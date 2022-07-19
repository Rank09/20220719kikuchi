<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Contact;
use Illuminate\support\Facades\DB;

class AdministratorController extends Controller
{
  public function function(){
    return view('administrator');
  }
  
}