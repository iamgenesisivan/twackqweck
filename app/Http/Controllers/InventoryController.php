<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Request;
use Alert;
use Auth;
use Hash;
use Carbon;

class InventoryController extends Controller
{
    
    public function inventoryManagement(){
    	return view ('inventory.inventoryManagement');
    }
    public function inventoryStock(){
    	return view ('inventory.inventoryStock');
    }
    public function inventoryDelivery(){
    	return view ('inventory.delivery');
    }

}
