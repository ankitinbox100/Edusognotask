<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class ProfileController extends Controller
{
  
    public function index()
    {
       
        $session = session();
        echo view('profile');
        // echo "Hello : ".$session->get('name');
    }
}