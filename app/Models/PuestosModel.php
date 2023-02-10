<?php
namespace App\Models;

use CodeIgniter\Model;

    class PuestosModel extends Model {

        protected $table      = 'puestos';
        protected $primaryKey = 'Idpuesto';

        protected $useAutoIncrement = false;

        protected $returnType     = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['Nompuesto'];

        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        protected $deletedField  = 'deleted_at';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;

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
?>