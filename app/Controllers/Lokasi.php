<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Lokasis;
use App\Models\Barangs;
class Lokasi extends Controller
{
    public function __construct(){
        $this->session = \Config\Services::session($config);
    }
	public function index()
	{
        if(!$this->session->get('logged_in'))
		{
			return redirect()->to('/auth');
		}
        $model = new Lokasis();
        $data['lokasi'] = $model->findAll();
        $data['mb'] = new Barangs();
        $data['title'] = 'Data Lokasi';
        $data['uname'] = $this->session->get('username');
        echo view('templates/header', $data);
        echo view('content/lokasi/index',$data);
        echo view('templates/footer');
    }
    
    public function add()
    {
        if(!$this->session->get('logged_in'))
		{
			return redirect()->to('/auth');
		}
        $model = new Barangs();
        $data['barang'] = $model->findAll();
        $data['title'] = 'Data Lokasi';
        $data['uname'] = $this->session->get('username');
        echo view('templates/header', $data);
        echo view('content/lokasi/add',$data);
        echo view('templates/footer');
    }

    public function post()
    {
        helper('form');
        $model = new Lokasis();
        $insert = $model->insert([
        'id_barang' => $this->request->getVar('id_barang'),
        'alamat' => $this->request->getVar('lokasi'),
        'latitude' => $this->request->getVar('lat'),
        'longitude' => $this->request->getVar('lng'),
        'deskripsi' => $this->request->getVar('deskripsi'),
        ]);
      
        return redirect()->to('/lokasi');
    }

    public function delete($id)
    {
        if(!$this->session->get('logged_in'))
		{
			return redirect()->to('/auth');
		}
        $model = new Lokasis();
        $model->where('id_lokasi', $id)->delete();
        return redirect()->to('/lokasi');
    }

	//--------------------------------------------------------------------
    
}
