<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = Kamar::latest()->paginate(20);
        return view('kamar.index',compact('kamar'))->with('i', (request()->input('page',1)-1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kd_kamar' =>  'required',
            'no_kamar' =>  'required',
            'jenis' =>  'required',
            'fasilitas' =>  'required',
            'harga' =>  'required',
            'stok' =>  'required',
            'foto' =>  'required',
        ]);

        $file = $request->file('foto');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = "Foto_Kamar";
        $file->move($tujuan_upload,$nama_file);

        Kamar::create([
            'kd_kamar' =>  $request->kd_kamar,
            'no_kamar' =>  $request->no_kamar,
            'jenis' =>  $request->jenis,
            'fasilitas' =>  $request->fasilitas,
            'harga' =>  $request->harga,
            'stok' =>  $request->stok,
            'foto' =>  $nama_file,
        ]); 
        return redirect()->route('kamar.index')
                        ->with('success','Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamar $kamar)
    {
        return view ('kamar.edit',compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kamar $kamar)
    {
        $request->validate([
            'kd_kamar' =>  'required',
            'no_kamar' =>  'required',
            'jenis' =>  'required',
            'fasilitas' =>  'required',
            'harga' =>  'required',
            'stok' =>  'required',
            'foto' =>  'required',
        ]);

        if($request->file('foto')){
            unlink(public_path('Foto_Kamar/'. $kamar->foto));
            $file = $request->file('foto');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = "Foto_Kamar";
            $file->move($tujuan_upload,$nama_file);

            // update post data image
            $kamar->update([
                'kd_kamar' =>  $request->kd_kamar,
                'no_kamar' =>  $request->no_kamar,
                'jenis' =>  $request->jenis,
                'fasilitas' =>  $request->fasilitas,
                'harga' =>  $request->harga,
                'stok' =>  $request->stok,
                'foto' =>  $nama_file,
            ]);
        }
        else{
            $kamar->update($request->all());
        }
        return redirect()->route('kamar.index')
                        ->with('success','Data Berhasil Dirubah'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {
        unlink(public_path('Foto_Kamar/'. $kamar->foto));
        $kamar->delete();
        return redirect()->route('kamar.index')
                        ->with('success','Data Berhasil dihapus');
    }
}
