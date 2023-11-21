
@extends('layout')
@section('content')
           <div>
            

            @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
        </div>
        @endif

<a class="btn btn-success" href="{{ route('reservasi.create') }}">Tambah Data</a><p></p>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO.</th>
                      <th>Tanggal reservasi</th>
                      <th>Nama Customer</th>
                      <th>Kode Kamar</th>
                      <th>Jumlah</th>
                      <th>Total</th>
                      <th>Foto Kwitansi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($reservasi as $rsv)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $rsv->tgl_reservasi }}</td>
                      <td>{{ $rsv->nm_customer }}</td>
                      <td>{{ $rsv->kd_kamar }}</td>
                      <td>{{ $rsv->jumlah }}</td>
                      <td>{{ $rsv->total }}</td>
                      <td><img width="100px" src="{{ url('Foto_Kwitansi/'.$rsv->foto_kwitansi) }}"></td>
                      <td>

<form action="{{ route('reservasi.destroy',$rsv->id_reservasi) }}" method="POST">
    @csrf
    @method('DELETE')
    <a class="btn btn-warning" href="{{ route('reservasi.edit',$rsv->id_reservasi) }}">Ubah</a>

    <button type="submit" class="btn btn-danger" onclick="javascript: return confirm('Apakah Anda Ingin Menghapus Data Ini..?')">Hapus</button>
                        
</form>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
                  
              @endsection