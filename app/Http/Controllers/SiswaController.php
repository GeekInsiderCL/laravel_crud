<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        if($request->has('search')){
            $data_siswa = Siswa::where('nama','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $data_siswa = Siswa::all();
        }

        return view('siswa.index')->with('data_siswa', $data_siswa);
        // return Siswa::all();
    }
    public function view(request $request){
        return Siswa::all();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(){
        $siswa = new Siswa;
        return view('/siswa/add');
    }
    public function create(request $request){
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->role = $request->role;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return "Data has been added!";
        return redirect('/siswa')->with('success','Data has been added!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     *
     * Display the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('welcome');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id){
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        
        return "Data has been updated!";
        return redirect('siswa')->with('success','Data has been updated!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $siswa = Siswa::find($id);

        return view('siswa/update', ['siswa'=>$siswa]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $siswa = Siswa::find($id);
        $siswa->delete();

        return "Data has been deleted";
        return redirect('/siswa')->with('success','Data has been deleted!');
    }
}
