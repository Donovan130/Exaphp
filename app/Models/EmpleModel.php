<?php
namespace App\Models;

use CodeIgniter\Model;

    class EmpleModel extends Model {

        protected $table      = 'empleados';
        protected $primaryKey = 'Idempleado';

        protected $useAutoIncrement = false;

        protected $returnType     = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['Nombre','Edad','Sexo','Puesto','Sucursal'];

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