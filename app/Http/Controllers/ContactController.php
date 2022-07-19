<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Contact;
use Illuminate\support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        $items = DB::table('contacts')->get();
        return view('index',['items' => $items]);
    }

    public function confirm(Request $request)
    {
        $input = $request->all();
        return view('confirm',['input' => $input]);
    }

    public function create(Request $request) 
    {
        $param = [
            'fullname' => $request ->fullname,
            'gender' => $request ->gender,
            'email' => $request ->email,
            'postcode' => $request ->postcode,
            'address' => $request ->address,
            'building_name' => $request ->building_name,
            'opinion' => $request ->opinion,
        ];
        DB::table('contacts')->insert($param);
        return view('thanks');
    }
    
}