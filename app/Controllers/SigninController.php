<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class SigninController extends Controller
{
    public function index()
    {
        if (session()->get('isLoggedIn'))
        {
            return redirect()->back();
        }
        helper(['form']);
        echo view('signin');
    } 
  
    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/profile');
            
            }else{
                // $session->setFlashdata('msg', 'Password is incorrect.');
                $session->setFlashdata('err', 'La password non è corretta.');

                return redirect()->to('/signin');
            }
        }else{
            // $session->setFlashdata('msg', 'Email does not exist.');
            $session->setFlashdata('err', "L'e-mail non esiste.");

            return redirect()->to('/signin');
        }
    }
    
}