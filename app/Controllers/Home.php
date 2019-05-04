<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{

	public $session;

	public function __construct()
	{
		// parent::__construct();
		$this->session = \Config\Services::session($config);
		
	}

	public function index()
	{
		if(!$this->session->get('logged_in'))
		{
			return redirect()->to('/auth');
		}
		$data['title'] = 'Dashboard';
        $data['uname'] = $this->session->get('username');
        echo view('templates/header', $data);
        echo view('content/home/index');
        echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
