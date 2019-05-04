<?php namespace App\Models;
use CodeIgniter\Model;

class Barangs extends Model
{
    protected $table = 'barangs';

    protected $allowedFields = [
    'id_barang',
    'nama_barang', 
    'deskripsi_barang', 
    'pengirim',
    'email_pengirim',
    'penerima',
    'kontak_pengirim',
    'kontak_penerima',
    'asal',
    'tujuan',
    'lat_asal',
    'lat_tujuan',
    'lng_asal',
    'lng_tujuan',
    'status'];
            
}