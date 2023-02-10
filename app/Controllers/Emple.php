<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\EmpleModel;
use App\Models\PuestosModel;
use App\Models\SucursalModel;

class Emple extends BaseController {

    protected $helpers = ['form', 'url'];
    protected $libraries = ['validation'];
    protected $Empl = "";
    protected $Ptos = "";
    protected $Suc = "";

    public function __construct() {
        $this->Empl = new EmpleModel();
        $this->Ptos = new PuestosModel();
        $this->Suc = new SucursalModel();
    }

    public function index() {
                
        $Suc = $this->Suc->orderBy("Idsucursal","asc")->findAll();
        $Ptos = $this->Ptos->orderBy("Idpuesto","asc")->findAll();
        $Empl = $this->Empl->join('puestos pt', 'pt.Idpuesto = empleados.Idpuesto')->join('sucursales sc', 'sc.Idsucursal = empleados.Idsucursal')->orderBy("Idempleado","asc")->findAll();
        $data = ['Suc' => $Suc, 'Empl' => $Empl, 'Ptos' => $Ptos];

        return view('Empleados', $data);
    }

}
