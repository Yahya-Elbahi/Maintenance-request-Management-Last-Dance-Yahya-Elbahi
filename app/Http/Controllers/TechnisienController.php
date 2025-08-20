<?php

namespace App\Http\Controllers;

use App\Models\Technisien;
use App\Models\User;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;
use Spatie\Permission\Models\Role;
use WpOrg\Requests\Session;

use function Pest\Laravel\post;

class TechnisienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    
    public function technisien(){
        $users = User::all();
        $roles = Role::all();
        $technisien = Technisien::all();
        return view('technisien',compact('roles','users','technisien'));
    }
    public function technisienInfo(){
        $users = User::all();
        $roles = Role::all();
        $technisien = Technisien::all();
        return view('technisieninfo',compact('roles','users','technisien'));
    }
    public function technisienPost(){
        $users = User::all();
        $roles = Role::all();
        $technisien = Technisien::all();
        return view('technisienpost',compact('roles','users','technisien'));
    }
   
    



    public function store(Request $request, Technisien $technisien){
       $request->validate([
        // 'technisien_id' => 'required|exists:technisiens,id',
          'title'=>'required|string|max:18',
          'description'=>'required|string|max:50',
          'category'=>'required|string|max:20',
        //   'user_id'=>'integer',
          'image'=>'required|file'
       ]);
       $path = $request->file('image')->store('Technisien-image','public');
        Technisien::create([
        // 'user_id' => Auth::id(),
        // 'technisien_id' => $request->technisien_id,
         'title'=>$request->title,
         'description'=>$request->description,
         'category'=>$request->category,
        //  'user_id'=>$request->user_id,
         'image'=>$path
       ]);
       return redirect()->route('technisienpost.technisienPost');
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    
    
    /**
     * Display the specified resource.
     */
    // public function show(Technisien $technisien)
    // {
    //     // dd($technisien);
    //     $technisien = Auth::user()->technisien;
        

        
    //     // $technisien = Technisien::where('user_id',Auth::id())->get();    
    //     return view('postdetail',compact('technisien'));
    //     // return view('technisienpost',compact('technisien'));
    // }

//    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technisien $technisien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technisien $technisien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technisien $technisien)
    {
        //
    }
}
