<?php

namespace App\Controllers;

use App\Models\ProvinceModel;
use CodeIgniter\Controller;

class ProvinceController extends Controller
{
    protected $provinceModel;

    public function __construct()
    {
        $this->provinceModel = new ProvinceModel(); // Initialisation du modèle de province
    }

    // Affiche toutes les provinces
    public function index()
    {
        $data['provinces'] = $this->provinceModel->getAllProvinces();
        return view('provinces/province-view', $data); // Charge la vue avec les provinces
    }

    // Affiche le formulaire pour ajouter une nouvelle province
    public function create()
    {
        return view('province_create'); // Charge la vue pour créer une nouvelle province
    }

    // Traite l'ajout d'une nouvelle province via AJAX
public function store()
{
    $data = [
        'nom_province' => $this->request->getPost('nom_province'),
    ];

    // je vérifie la validation avant d'insérer
    if (!$this->provinceModel->validate($data)) {
        return $this->response->setJSON(['success' => false, 'message' => $this->provinceModel->errors()]);
    }

    if ($this->provinceModel->insert($data)) {
        return $this->response->setJSON(['success' => true, 'message' => 'Province ajoutée avec succès.', 'id' => $this->provinceModel->insertID()]);
    } else {
        return $this->response->setJSON(['success' => false, 'message' => 'Erreur lors de l\'ajout de la province.']);
    }
}

    // j'affiche le formulaire pour éditer une province
    public function edit($id)
    {
        $data['province'] = $this->provinceModel->find($id);
        return view('province_edit', $data); // Charge la vue pour éditer la province
    }

  
  // Traitement la mise à jour d'une province
public function update($id)
{
    $data = [
        'nom_province' => $this->request->getPost('nom_province'),
    ];

    // Validation de l'unicité
    $this->provinceModel->setValidationRules([
        'nom_province' => 'required|min_length[3]|is_unique[provinces.nom_province,id,' . $id . ']',
    ]);

    if (!$this->provinceModel->validate($data)) {
        return $this->response->setJSON(['success' => false, 'message' => $this->provinceModel->errors()]);
    }

    if ($this->provinceModel->updateProvince($id, $data)) {
        return $this->response->setJSON(['success' => true, 'message' => 'Province mise à jour avec succès.']);
    } else {
        return $this->response->setJSON(['success' => false, 'message' => 'Erreur lors de la mise à jour.']);
    }
}
   
// Supprime une province
public function delete($id)
{
    if ($this->provinceModel->deleteProvince($id)) {
        return $this->response->setJSON(['success' => true, 'message' => 'Province supprimée avec succès.']);
    } else {
        return $this->response->setJSON(['success' => false, 'message' => 'Erreur lors de la suppression.']);
    }
}
}