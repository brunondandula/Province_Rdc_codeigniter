<?php

namespace App\Controllers;

use App\Models\CityModel;
use App\Models\ProvinceModel;
use CodeIgniter\Controller;

class City extends Controller
{
    protected $cityModel;
    protected $provinceModel;

    public function __construct() {
        $this->cityModel = new CityModel(); 
        $this->provinceModel = new ProvinceModel();
    }

    public function get_info() {
        $name = $this->request->getGet('name');

       
        $province_info = $this->provinceModel->get_province_by_name($name);
        
        if ($province_info) {
            $cities = $this->cityModel->get_cities_by_province($province_info['id']);
            return $this->response->setJSON($cities);
        } else {
            return $this->response->setJSON(['error' => 'Aucun résultat trouvé.']);
        }
    }

  public function get_details($id) {
        return $this->response->setJSON($this->cityModel->getCityDetails($id));
    }}