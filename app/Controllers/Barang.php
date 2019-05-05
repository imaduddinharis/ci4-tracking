<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Barangs;
use App\Models\Lokasis;
class Barang extends Controller
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
        $data['title'] = 'Data Barang';
        $data['uname'] = $this->session->get('username');
        $model = new Barangs();
        $data['barang'] = $model->findAll();
      
        echo view('templates/header', $data);
        echo view('content/barang/index',$data);
        echo view('templates/footer');
    }
    
    public function add()
    {
        if(!$this->session->get('logged_in'))
		{
			return redirect()->to('/auth');
		}
        $data['title'] = 'Data Barang';
        $data['uname'] = $this->session->get('username');
        echo view('templates/header', $data);
        echo view('content/barang/add');
        echo view('templates/footer');
    }

    public function edit($id)
    {
        if(!$this->session->get('logged_in'))
		{
			return redirect()->to('/auth');
		}
        $model = new Barangs();
        $data['barang'] = $model->where('id_barang', $id)
                        ->findAll();

        $data['title'] = 'Data Barang';
        $data['uname'] = $this->session->get('username');
        echo view('templates/header', $data);
        echo view('content/barang/edit', $data);
        echo view('templates/footer');
    }

    public function edit_lokasi_asal($id)
    {
        if(!$this->session->get('logged_in'))
		{
			return redirect()->to('/auth');
		}
        $data['id_barang'] = $id;

        $data['title'] = 'Data Barang';
        $data['uname'] = $this->session->get('username');
        echo view('templates/header', $data);
        echo view('content/barang/add-lokasi-asal', $data);
        echo view('templates/footer');
    }

    public function edit_lokasi_tujuan($id)
    {
        if(!$this->session->get('logged_in'))
		{
			return redirect()->to('/auth');
		}
        $data['id_barang'] = $id;

        $data['title'] = 'Data Barang';
        $data['uname'] = $this->session->get('username');
        echo view('templates/header', $data);
        echo view('content/barang/add-lokasi-tujuan', $data);
        echo view('templates/footer');
    }

    public function post()
    {
        helper('form');
        $model = new Barangs();
        // $dataBarang = array();
        // // var_dump($dataBarang);
        // // return false;
        $insert = $model->insert([
        'id_barang' => $this->RandomString(),
        'nama_barang' => $this->request->getVar('nama_barang'),
        'deskripsi_barang' => $this->request->getVar('deskripsi_barang'),
        'pengirim' => $this->request->getVar('pengirim'),
        'email_pengirim' => $this->request->getVar('email_pengirim'),
        'kontak_pengirim' => $this->request->getVar('kontak_penerima'),
        'penerima' => $this->request->getVar('penerima'),
        'kontak_penerima' => $this->request->getVar('kontak_penerima'),
        ]);
      
        return redirect()->to('/barang');
    }

    public function put()
    {
        helper('form');
        $model = new Barangs();
        // $dataBarang = array();
        // // var_dump($dataBarang);
        // // return false;
        $dataUpdate = [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'deskripsi_barang' => $this->request->getVar('deskripsi_barang'),
            'pengirim' => $this->request->getVar('pengirim'),
            'email_pengirim' => $this->request->getVar('email_pengirim'),
            'kontak_pengirim' => $this->request->getVar('kontak_penerima'),
            'penerima' => $this->request->getVar('penerima'),
            'kontak_penerima' => $this->request->getVar('kontak_penerima'),
        ];
        
        $id = [
            'id_barang' => $this->request->getVar('id_barang')
        ];
        $model->whereIn('id_barang', $this->request->getVar('id_barang'))
                    ->set($dataUpdate)
                    ->update();

        return redirect()->to('/barang');
    }

    public function post_lokasi_asal()
    {
        helper('form');
        $model = new Barangs();
        // $dataBarang = array();
        // // var_dump($dataBarang);
        // // return false;
        $dataUpdate = [
            'asal' => $this->request->getVar('lokasi'),
            'lat_asal' => $this->request->getVar('lat'),
            'lng_asal' => $this->request->getVar('lng'),
        ];
        
        $id = [
            'id_barang' => $this->request->getVar('id_barang')
        ];
        $model->whereIn('id_barang', $this->request->getVar('id_barang'))
                    ->set($dataUpdate)
                    ->update();

        return redirect()->to('/barang');
    }

    public function post_lokasi_tujuan()
    {
        helper('form');
        $model = new Barangs();
        // $dataBarang = array();
        // // var_dump($dataBarang);
        // // return false;
        $dataUpdate = [
            'tujuan' => $this->request->getVar('lokasi'),
            'lat_tujuan' => $this->request->getVar('lat'),
            'lng_tujuan' => $this->request->getVar('lng'),
        ];
        
        $id = [
            'id_barang' => $this->request->getVar('id_barang')
        ];
        $model->whereIn('id_barang', $this->request->getVar('id_barang'))
                    ->set($dataUpdate)
                    ->update();

        return redirect()->to('/barang');
    }

    public function delete($id)
    {
        if(!$this->session->get('logged_in'))
		{
			return redirect()->to('/auth');
		}
        $model = new Barangs();
        $model2 = new Lokasis();
        $model->where('id_barang', $id)->delete();
        $model2->where('id_barang', $id)->delete();
        return redirect()->to('/barang');
    }

    function RandomString()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 30; $i++) {
            $randstring .= $characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }

	//--------------------------------------------------------------------
    
}
