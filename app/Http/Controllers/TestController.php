<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< HEAD
=======
use App\Product;

>>>>>>> Add guzzle dependency
class TestController extends Controller
{
    //
    public function welcome()
    {

<<<<<<< HEAD
    
    	return view('welcome');
    }
=======
    $products = product::paginate(9);
    return view('welcome')->with(compact('products'));

    }
   
>>>>>>> Add guzzle dependency
}
