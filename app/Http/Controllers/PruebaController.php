<?php 

namespace Prueba\Http\Controllers;

use Prueba\Http\Controllers\Controller;

class PruebaController extends Controller {
	public function test($param){
		return 'Estoy dentro de PruebaController y recibi este parametro '.$param;
	} 
}