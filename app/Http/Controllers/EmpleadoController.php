<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadoController extends Controller
{
    public function index() {
    	//select
       // return Empleado::all();
       
         Empleado::create(["nombre"=> "valentino", "edad"=> 20]);

    }
   public function insert() {
    	//select
       // return Empleado::all();
       
         Empleado::create(["nombre" => "daniel"]);

    }
   public function elim() {
    	//select
       // return Empleado::all();
       
       $id = 1;
        Empleado::delete();


    }
   public function up() {
    	//select
       // return Empleado::all();
       Empleado::query()->update(["nombre" => "elana"]);

    }
 
}
