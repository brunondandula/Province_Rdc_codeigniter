<?php

namespace App\Models;

use CodeIgniter\Model;

class CityModel extends Model
{
    protected $table            = 'villes'; 
    protected $primaryKey       = 'id'; 
    protected $returnType       = 'array';

    protected $allowedFields    = ['nom_ville', 'province_id', 'langue', 'superficie', 'population', 'image'];

    public function get_city_by_name($name) {
        return $this->where('nom_ville', $name)->first(); 
    }
        public function getCityDetails($id) {
        return $this->select('villes.*, nom_province AS nom_province')
                    ->join('provinces', 'provinces.id = villes.province_id')
                    ->where('villes.id', $id)
                    ->first();
    }

    public function get_cities_by_province($province_id) {
        return $this->where('province_id', $province_id)->findAll(); 
    }
}