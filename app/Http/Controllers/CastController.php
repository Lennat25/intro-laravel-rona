<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class CastController extends Controller
{
    public function index(Request $req)
    {
        $casts = DB::table('casts')->get();
        return view('casts/index', ['casts' => $casts]);
    }
    public function create(request $req)
    {
        return view('casts/create',);
    }
    public function store(Request $req)
    {
        $name = $req->input('name');
        $umur = $req->input('umur');
        $bio = $req->input('bio');
    
        DB::table('casts')->insert([
            'name' => $name,
            'umur' => $umur,
            'bio' => $bio,
        ]);

        return redirect('/cast');
    }
    public function show($cast_id)
    {
        $cast = DB::table('casts')->where('id' , $cast_id)->first();

        if (!$cast) {
            abort(404);
        }
        return view('casts/show',['casts' => $cast]);
    }
    public function update (Request $req, $cast_id) {
        $nama = $req->input('nama');
        $umur = $req->input('umur');
        $bio = $req->input('bio');

        DB::table('casts')->whare('id', $cast_id)->update([
            'nama' => $nama,
            'umur' => $umur,
            'bio' => $bio
        ]);
        return redirect('/cast/' . $cast_id);
    }
    public function destory($cast_id) {
        DB::table('casts')->where('id', $cast_id)->delete();
        return redirect('/cast');
    }
} 


