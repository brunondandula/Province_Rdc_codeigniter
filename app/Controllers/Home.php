<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\VilleModel;
use App\Models\ProvinceModel;

class Home extends BaseController
{      protected $villeModel;
    protected $provinceModel;

    public function __construct()
    {
        $this->villeModel = new VilleModel();
        $this->provinceModel = new ProvinceModel();
    }
   public function index()
{
    $data['villes'] = $this->villeModel->getAllVilles();
    $data['villes4'] = $this->villeModel->getPopularVilles(4); 
    $data['provinces'] = $this->provinceModel->findAll();
    
    
    $data['villesLimit'] = array_slice($data['villes'], 0, 3);

    return view('index', $data);
}


public function show($id)
{
    $data['ville'] = $this->villeModel->getVilleDetails($id); 
     
    return view('Villes/ville_detail', $data);
}
}
