<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class SingoutController extends Controller
{
    public function index()
    {
        $session = session();
        if (session()->get('isLoggedIn'))
        {
            $session->setFlashdata('msg', 'logout successfully');
            session_destroy();
            return redirect()
                ->to('/signin');
        }
        // return redirect()->back();
    }
}