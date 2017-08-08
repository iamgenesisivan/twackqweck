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

class DispatchController extends Controller
{
    
    public function dispatchManagement(){
    	return view ('dispatch.dispatchManagement');
    }
    public function dispatchSchedule(){
    	return view ('dispatch.dispatchSchedule');
    }
    public function dispatchMonitoring(){
    	return view ('dispatch.dispatchMonitoring');
    }

}
