<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class SendEmail extends Controller
{
    public function index(){
        if (session()->get('isLoggedIn'))
        {
            return redirect()->back();
        }
        echo view('forget');
    }
    public function SendMailpush()
    {
        helper(['form']);
        $rules = [
            'email' => 'required|min_length[4]|max_length[100]|valid_email',
        ];
        $session = session();
        $to = $this->request->getVar('email');
        $db      = \Config\Database::connect();
        $builder = $db->table('users')->select('*')->where('email', $to)->get()->getResultArray();
        if (!$builder) {
            $session->setFlashdata('err', 'Questa email non si registra');
                return redirect()->back();
        }
        $passwordplain  = rand(1111111111,9999999999);
        $newpass = password_hash($passwordplain, PASSWORD_DEFAULT);
        // $message='Dear '.$builder[0]['name'].','. "\r\n";
        // $message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
        // $message.='<br>Thanks & Regards';
        // $message.='<br>Edo Sogno';
        // $subject = "Forget Password";
        $message='Caro '.$builder[0]['name'].','. "\r\n";
        $message.='grazie per averci contattato in merito alla tua password dimenticata,<br> La tua <b> password è</b> is <b>'.$passwordplain.'</b>'."\r\n";
        $message.='<br>Grazie e saluti';
        $message.='<br>Edo Sogno';
        $subject = "Dimenticare la password";
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom("EdoSogno@edo.com", 'Edo Sogno');
        $email->setSubject($subject);
        $email->setMessage($message);
        if($email->send())
        {
        $upr = $db->table('users')->set('password',$newpass)->where('email', $to)->update();
        // $session->setFlashdata('msg', 'Password have been updated. please check your register email.');
        $session->setFlashdata('msg', 'La password è stata aggiornata. per favore controlla la tua email di registrazione.');
                return redirect()->to('/signin');
        }
        else{
            // $session->setFlashdata('msg', 'Something went wrong !. please try to after some time');
            $session->setFlashdata('err', "Qualcosa è andato storto !. si prega di riprovare dopo un po' di tempoe.");

                return redirect()->back();
        }
    }

}