
@extends('layout')
@section('content')
           <div>
            

            @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
        </div>
        @endif

<a class="btn btn-success" href="{{ route('kamar.create') }}">Tambah Data</a><p></p>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO.</th>
                      <th>Kode Kamar</th>
                      <th>No Kamar</th>
                      <th>Jenis</th>
                      <th>Fasilitas</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Foto</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($kamar as $kmr)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $kmr->kd_kamar }}</td>
                      <td>{{ $kmr->no_kamar }}</td>
                      <td>{{ $kmr->jenis }}</td>
                      <td>{{ $kmr->fasilitas }}</td>
                      <td>{{ $kmr->harga }}</td>
                      <td>{{ $kmr->stok }}</td>
                      <td><img width="100px" src="{{ url('Foto_Kamar/'.$kmr->foto) }}"></td>
                      <td>

<form action="{{ route('kamar.destroy',$kmr->id_kamar) }}" method="POST">
    @csrf
    @method('DELETE')
    <a class="btn btn-warning" href="{{ route('kamar.edit',$kmr->id_kamar) }}">Ubah</a>

    <button type="submit" class="btn btn-danger" onclick="javascript: return confirm('Apakah Anda Ingin Menghapus Data Ini..?')">Hapus</button>
                        
</form>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
                  
              @endsection