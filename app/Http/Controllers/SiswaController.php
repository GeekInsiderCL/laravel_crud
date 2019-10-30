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
    public function index()
    {
        // return "Ini Data Siswa";
        $data_siswa = Siswa::all();
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
    public function create(request $request){
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->role = $request->role;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return redirect('/siswa')->with('added','Data has been added!');
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
        /* $nama = $request->nama;
        $role = $request->role;
        $alamat = $request->alamat; */
        
        $siswa = Siswa::find($id);
        //dd($siswa);
        /* $siswa->nama = $nama;
        $siswa->role = $role;
        $siswa->alamat = $alamat;
        $siswa->save();
 */
        return view('siswa/update', ['siswa'=>$siswa]);
        /* return redirect('/siswa')->with('edited','Data has been updated!');
        return "Data Has Been Updated!"; */
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

        return redirect('/siswa')->with('success','Data has been deleted!');
    }
}
