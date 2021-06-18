<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Platillo;

use Illuminate\Http\Request;
use SplQueue;

class Orden {
    public $id_orden = 0;
    public $cantidad = 0;
    public $platillo;
   
   
    function agregarPlatillo($platillo) {
        $this->cantidad ++;
        $this->platillo = $platillo;
    }
}


class OrdenesController extends Controller
{
    public $cola = array();

    public function ordenar($id_platillos, $cantidad,$mesa){
        //$plat = Platillo::findOrFail($id_platillos);
        array_push($this->cola, $id_platillos,$cantidad,$mesa);
        
        return $this->cola;
    }
}
