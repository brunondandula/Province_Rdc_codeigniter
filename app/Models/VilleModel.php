<?php
namespace App\Models;

use CodeIgniter\Model;

class VilleModel extends Model
{
    protected $table            = 'villes';  
    protected $primaryKey       = 'id';      
    protected $useAutoIncrement = true;      
    protected $useSoftDeletes   = false;     
    protected $protectFields    = true;      

    protected $allowedFields    = [
        'nom_ville', 
        'province_id', 
        'langue', 
        'superficie', 
        'population', 
        'image', 
        'created_at', 
        'updated_at'
    ];

   
    public function getAllVilles()
    {
        return $this->select('villes.*, provinces.nom_province')
                    ->join('provinces', 'provinces.id = villes.province_id')
                    ->findAll();
    }
    public function getPopularVilles($limit)
{
    return $this->select('villes.*, provinces.nom_province') 
                ->join('provinces', 'provinces.id = villes.province_id')
                ->findAll($limit); 
}
public function getTopFiveVilles()
{
    return $this->select('villes.*, provinces.nom_province')
                ->join('provinces', 'provinces.id = villes.province_id')
                ->limit(5) // Limiter à 5 résultats
                ->findAll(); 
}

    
    public function getVilleDetails($id)
{
    $ville = $this->select('villes.*, provinces.nom_province')
                  ->join('provinces', 'provinces.id = villes.province_id')
                  ->where('villes.id', $id)
                  ->first();

 
    if ($ville) {
        log_message('info', 'Détails de la ville : ' . print_r($ville, true));
    } else {
        log_message('error', 'Aucune ville trouvée avec l\'ID : ' . $id);
    }

    return $ville;
}

    
    public function getVillesByProvince($provinceId)
    {
        return $this->select('villes.*, provinces.nom_province')
                    ->join('provinces', 'provinces.id = villes.province_id')
                    ->where('villes.province_id', $provinceId)
                    ->findAll();
    }

    
    public function addVille($data)
    {
        return $this->insert($data);
    }

    
    public function updateVille($id, $data)
    {
        return $this->update($id, $data);
    }

    
    public function deleteVille($id)
    {
        return $this->delete($id);
    }
}