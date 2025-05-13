<?php

namespace App\Controllers;

use App\Models\VilleModel;
use App\Models\ProvinceModel;
use CodeIgniter\Controller;

class VilleController extends Controller
{
    protected $villeModel;
    protected $provinceModel;

    public function __construct()
    {
        $this->villeModel = new VilleModel();
        $this->provinceModel = new ProvinceModel();
    }

    public function index()
    {
        $data['villes'] = $this->villeModel->getAllVilles(); 
        $data['provinces'] = $this->provinceModel->findAll();
        return view('Villes/ville', $data); 
    }
public function showTopFiveVilles()
{
    $data['Villes'] = $this->villeModel->getTopFiveVilles(); 
    return view('index', $data); 
}
    public function store()
    {
        try {
            $validationRules = [
                'nom_ville' => 'required|min_length[3]',
                'province_id' => 'required|is_not_unique[provinces.id]',
                'population' => 'required|integer',
                'langue' => 'required|min_length[3]',
                'superficie' => 'required|integer',
                'image' => 'uploaded[image]|is_image[image]|max_size[image,2048]'
            ];

            if (!$this->validate($validationRules)) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Validation error',
                    'errors' => $this->validator->getErrors()
                ])->setStatusCode(422);
            }

            $imageFile = $this->request->getFile('image');
            $imageName = $imageFile->getRandomName();
            $imagePath = 'uploads/images/';

            if (!$imageFile->move($imagePath, $imageName)) {
                throw new \RuntimeException('Échec du téléchargement de l\'image');
            }

            $villeData = [
                'nom_ville' => $this->request->getPost('nom_ville'),
                'province_id' => $this->request->getPost('province_id'),
                'langue' => $this->request->getPost('langue'),
                'superficie' => $this->request->getPost('superficie'),
                'population' => $this->request->getPost('population'),
                'image' => $imagePath.$imageName
            ];

            $villeId = $this->villeModel->addVille($villeData);

            
            $villeComplete = $this->villeModel->getVilleDetails($villeId);

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Ville ajoutée avec succès.',
                'data' => $villeComplete
            ]);

        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Une erreur est survenue lors de l\'ajout de la ville.'
            ])->setStatusCode(500);
        }
    }

    public function update($id)
    {
        try {
              $validationRules = [
            'nom_ville' => 'required|min_length[3]',
            'province_id' => 'required|is_not_unique[provinces.id]',
            'population' => 'required|integer',
            'langue' => 'required|min_length[3]',
            'superficie' => 'required|integer',
            'image' => 'if_exist|is_image[image]|max_size[image,2048]' 
        ];

            if (!$this->validate($validationRules)) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Validation error',
                    'errors' => $this->validator->getErrors()
                ])->setStatusCode(422);
            }

            $villeData = [
                'nom_ville' => $this->request->getPost('nom_ville'),
                'province_id' => $this->request->getPost('province_id'),
                'langue' => $this->request->getPost('langue'),
                'superficie' => $this->request->getPost('superficie'),
                'population' => $this->request->getPost('population'),
            ];

            $imageFile = $this->request->getFile('image');
            if ($imageFile && $imageFile->isValid()) {
                $imagePath = 'uploads/images/';
                $imageName = $imageFile->getRandomName();
                
                if ($imageFile->move($imagePath, $imageName)) {
                   
                    $oldImage = $this->villeModel->find($id)['image'] ?? '';
                    if ($oldImage && file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                    
                    $villeData['image'] = $imagePath . $imageName;
                }
            }

            $this->villeModel->updateVille($id, $villeData);

           
            $villeComplete = $this->villeModel->getVilleDetails($id);

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Ville mise à jour avec succès.',
                'data' => $villeComplete
            ]);

        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Une erreur est survenue lors de la mise à jour de la ville.'
            ])->setStatusCode(500);
        }
    }
    public function show($id)
{
    try {
        $ville = $this->villeModel->getVilleDetails($id);
        
        if (!$ville) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Ville non trouvée'
            ])->setStatusCode(404);
        }

        return $this->response->setJSON([
            'success' => true,
            'data' => $ville
        ]);

    } catch (\Exception $e) {
        log_message('error', $e->getMessage());
        return $this->response->setJSON([
            'success' => false,
            'message' => 'Erreur de serveur interne'
        ])->setStatusCode(500);
    }
}
public function get_details($id)
{
    $ville = $this->villeModel->getVilleDetails($id);
    return $this->response->setJSON($ville);
}
    public function delete($id)
    {
        try {
          
            $ville = $this->villeModel->find($id);
            if ($ville && !empty($ville['image']) && file_exists($ville['image'])) {
                unlink($ville['image']);
            }

            $this->villeModel->deleteVille($id);
            
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Ville supprimée avec succès.'
            ]);
            
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Une erreur est survenue lors de la suppression de la ville.'
            ])->setStatusCode(500);
        }
    }
}