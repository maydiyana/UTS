<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservasi = Reservasi::latest()->paginate(20);
        return view('reservasi.index',compact('reservasi'))->with('i', (request()->input('page',1)-1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservasi.create');
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
            'tgl_reservasi' =>  'required',
            'nm_customer' =>  'required',
            'kd_kamar' =>  'required',
            'jumlah' =>  'required',
            'total' =>  'required',
            'foto_kwitansi' =>  'required',
        ]);

        $file = $request->file('foto_kwitansi');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = "Foto_Kwitansi";
        $file->move($tujuan_upload,$nama_file);

        Reservasi::create([
            'tgl_reservasi' =>  $request->tgl_reservasi,
            'nm_customer' =>  $request->nm_customer,
            'kd_kamar' =>  $request->kd_kamar,
            'jumlah' =>  $request->jumlah,
            'total' =>  $request->total,
            'foto_kwitansi' =>  $nama_file,
        ]); 
        return redirect()->route('reservasi.index')
                        ->with('success','Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function show(Reservasi $reservasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservasi $reservasi)
    {
        return view ('reservasi.edit',compact('reservasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservasi $reservasi)
    {
        $request->validate([
            'tgl_reservasi' =>  'required',
            'nm_customer' =>  'required',
            'kd_kamar' =>  'required',
            'jumlah' =>  'required',
            'total' =>  'required',
            'foto_kwitansi' =>  'required',
        ]);

        if($request->file('foto_kwitansi')){
            unlink(public_path('Foto_Kwitansi/'. $reservasi->foto_kwitansi));
            $file = $request->file('foto_kwitansi');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = "Foto_Kwitansi";
            $file->move($tujuan_upload,$nama_file);

            // update post data image
            $reservasi->update([
                'tgl_reservasi' =>  $request->tgl_reservasi,
                'nm_customer' =>  $request->nm_customer,
                'kd_kamar' =>  $request->kd_kamar,
                'jumlah' =>  $request->jumlah,
                'total' =>  $request->total,
                'foto_kwitansi' =>  $nama_file,
            ]);
        }
        else{
            $reservasi->update($request->all());
        }
        return redirect()->route('reservasi.index')
                        ->with('success','Data Berhasil Dirubah'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservasi $reservasi)
    {
        unlink(public_path('Foto_Kwitansi/'. $reservasi->foto));
        $reservasi->delete();
        return redirect()->route('reservasi.index')
                        ->with('success','Data Berhasil dihapus');
    }
}
