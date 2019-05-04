<?php namespace App\Models;
use CodeIgniter\Model;

class Lokasis extends Model
{
    protected $table = 'lokasis';

    protected $allowedFields = [
    'id_lokasi',
    'id_barang', 
    'longitude', 
    'latitude',
    'alamat',
    'deskripsi'];
            
}