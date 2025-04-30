<?php

namespace App\Models;

use CodeIgniter\Model;

class ProvinceModel extends Model
{
    protected $table            = 'provinces'; 
    protected $primaryKey       = 'id';      
    protected $useAutoIncrement = true;       
    protected $returnType       = 'array';    
    protected $useSoftDeletes   = false;      
    protected $protectFields    = true;       

    protected $allowedFields = ['nom_province', 'created_at', 'updated_at'];

    
    protected $createdField  = 'created_at'; 
    protected $updatedField  = 'updated_at'; 

   

    
    public function getAllProvinces()
    {
        return $this->findAll();
    }
    public function get_province_by_id($id) {
        $this->db->where('nom_province', $id); 
        return $this->db->get('provinces')->row(); 
    }
    
    public function getProvinceById($id)
    {
        return $this->find($id);
    }

    
    public function addProvince(array $data)
    {
        return $this->insert($data);
    }


public function updateProvince($id, array $data)
{
    return $this->update($id, $data); 
}

    // Supprime une province
    public function deleteProvince($id)
    {
        return $this->delete($id);
    }
    public function get_province_by_name($name) {
        return $this->where('nom_province', $name)->first(); 
    }

    // Validation
protected $validationRules = [
    'nom_province' => 'required|min_length[3]|is_unique[provinces.nom_province,id,{id}]',
];
    
    protected $validationMessages   = [
        'nom_province' => [
            'required' => 'Le nom de la province est requis.',
            'min_length' => 'Le nom de la province doit comporter au moins 3 caractères.',
            'is_unique' => 'Cette province existe déjà.',
        ],
    ];
    
    protected $skipValidation       = false; 
    protected $cleanValidationRules = true;  
    // Callbacks
    protected $allowCallbacks = true; 
    protected $beforeInsert   = []; 
    protected $afterInsert    = []; 
    protected $beforeUpdate   = []; 
    protected $afterUpdate    = []; 
    protected $beforeFind     = []; 
    protected $afterFind      = []; 
    protected $beforeDelete   = []; 
    protected $afterDelete    = []; 
}