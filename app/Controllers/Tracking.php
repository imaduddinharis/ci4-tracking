<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Barangs;
use App\Models\Lokasis;
class Tracking extends Controller
{
    public function __construct(){
        $this->session = \Config\Services::session($config);
    }
	public function index($id)
	{
        if(!$this->session->get('logged_in'))
		{
			return redirect()->to('/auth');
		}
        $model = new Barangs();
        $model2 = new Lokasis();
        $data['barang'] = $model->where('id_barang',$id)->findAll();
        $data['lokasi'] = $model2->where('id_barang',$id)->orderBy('created_at', 'desc')->findAll();
        
        $data['title'] = 'Data Lokasi';
        $data['uname'] = $this->session->get('username');
        echo view('templates/header', $data);
        echo view('content/tracking/index',$data);
        echo view('templates/footer');
    }
    
    
	//--------------------------------------------------------------------
    
}
