<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Platillo;

class HomeController extends Controller
{
    public function index(){
        $role = Auth::user()->role;
        
        if($role == '2'){
            $platillos = Platillo::all();
            return view('gerente.dashboard');
        }
        elseif($role == '1'){
            $platillos = Platillo::all();
            return view('meseroJefe.dashboard', compact('platillos'));
        }
        else{
            $platillos = Platillo::all();
            return view('platillos.platillos', compact('platillos'));
        }
    }
}
