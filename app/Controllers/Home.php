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
   public function index(): string
{
    $data['villes'] = $this->villeModel->getAllVilles();
    $data['provinces'] = $this->provinceModel->findAll();
    
    
    $data['villesLimit'] = array_slice($data['villes'], 0, 3);

    return view('index', $data);
}
public function show($id): string
{
    $data['ville'] = $this->villeModel->getVilleDetails($id); 
     
    return view('Villes/ville_detail', $data);
}
}
