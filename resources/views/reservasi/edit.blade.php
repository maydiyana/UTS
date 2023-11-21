@extends('layout')
@section('content')
           <div>
            
            <form class="user" method="POST" action="{{ route('reservasi.update', $reservasi->id_reservasi) }}" enctype="multipart/form-data">

                @csrf
                @method('PUT')
              
                        <div class="row">
                          
                        
                        
                          <div class="col-lg-12 mb-4">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                              <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary" align="center">DATA RESERVASI</h6>
                              </div>
                              <div class="card-body">
                              
                
                                  
                                <div class="form-group">
                                  <Label>Tanggal Reservasi :</Label>
                                  <input type="date" class="form-control" name="tgl_reservasi" value="{{ $reservasi->tgl_reservasi }}">
                            </div>
        
        
                            <div class="form-group">
                                  <Label>Nama Customer :</Label>
                                  <input type="text" class="form-control" name="nm_customer" value="{{ $reservasi->nm_customer }}">
                            </div>

                            <div class="form-group">
                              <Label>Kode Kamar :</Label>
                              <input type="text" class="form-control" name="kd_kamar" value="{{ $reservasi->kd_kamar }}">
                        </div>
        
                            <div class="form-group">
                                  <Label>Jumlah :</Label><br>
                                  <input type="text" class="form-control" name="jumlah" value="{{ $reservasi->jumlah }}">
                              </div>
        
                             
        
                              <div class="form-group">
                                  <Label>Total :</Label>
                                  <input type="text" class="form-control" name="total" value="{{ $reservasi->total }}"></input>
                              </div>
                              
                              <div class="form-group">
                                <Label>Foto Kwitansi :</Label>
                                <input type="file" class="form-control" name="foto_kwitansi">
                            </div>
                        
                        <center><input type="submit" class="btn btn-primary" value="Update Data" />
                        <a href="{{route('reservasi.index')}}" class="btn btn-dark">Kembali</a>
                        </center>
                                  
                                  
                                
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        </form>

           </div>

        @endsection