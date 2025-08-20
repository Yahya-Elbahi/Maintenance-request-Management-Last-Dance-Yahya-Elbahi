<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Technisien;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ClientController extends Controller
{
    public function clientDash(){
        $users = User::all();
        $roles = Role::all();
        return view('client',compact('roles','users'));
    }
    public function postClient(){
        $clients = Client::all();
        $technisiens = Technisien::all();
        return view('postclient',compact('clients','technisiens'));
    }
    public function store(Request $request, Client $clients){
        $request->validate([
           "name"=>"string|required|max:20",
           "descriptien"=>"string|required|max:20",
           "category"=>"string|required|max:20",
           "image"=>"required|file",
        ]);
        $path = $request->file('image')->store('client-image','public');
        Client::create([
          "name"=>$request->name,
          "descriptien"=>$request->descriptien,
          "category"=>$request->category,
          "image"=>$path,
        ]);

        return back();

    }

   
}
