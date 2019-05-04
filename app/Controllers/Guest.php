<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Barangs;
use App\Models\Lokasis;
class Guest extends Controller
{
    public function index()
	{
        $data['title'] = 'Welcome';
        echo view('templates/header-guest', $data);
        echo view('content/guest/index', $data);
        echo view('templates/footer');
    }
    
	public function search()
	{
        $id = $this->request->getVar('resi');
        $model = new Barangs();
        $model2 = new Lokasis();
        $data['barang'] = $model->where('id_barang',$id)->findAll();
        $data['lokasi'] = $model2->where('id_barang',$id)->orderBy('created_at', 'desc')->findAll();
        
        $data['validate'] = count($data['barang']);
        $data['searching'] = true;
        $data['resi'] = $id;
        $data['title'] = 'Search';
        echo view('templates/header-guest', $data);
        echo view('content/guest/index',$data);
        echo view('templates/footer');
    }
    
    
	//--------------------------------------------------------------------
    
}
