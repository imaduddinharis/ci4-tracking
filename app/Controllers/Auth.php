<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Users;

class Auth extends Controller
{
    public $session;
    public function __construct(){
        $this->session = \Config\Services::session($config);
    }

	public function index()
	{
        if($this->session->get('logged_in')){
            return redirect()->to('/home');
        }
		return view('content/sign-in');
    }
    
    public function login()
    {
        helper('form');
        
        $model = new Users();
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));

            $login = $model->where('username',$username)
                        ->where('password', $password)
                        ->find();
        
            if(count($login)>0){
                $newdata = [
                    'username'  => $username,
                    'logged_in' => TRUE
                ];
            
                $this->session->set($newdata);
                // var_dump($this->session->get('username'));
                // return false;
                return redirect()->to('/home');
                }
    }

    public function logout()
    {
        $newdata = [
            'username' ,
            'logged_in'
        ];
        $this->session->remove($newdata);
        return redirect()->to('/auth');
    }

	//--------------------------------------------------------------------

}
