@extends('layout')
@section('content')
           <div>
            
            <form class="user" method="POST" action="{{ route('kamar.update', $kamar->id_kamar) }}" enctype="multipart/form-data">

                @csrf
                @method('PUT')
              
                        <div class="row">
                          
                        
                        
                          <div class="col-lg-12 mb-4">
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                              <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary" align="center">DATA KAMAR</h6>
                              </div>
                              <div class="card-body">
                              
                
                                  
                                <div class="form-group">
                                  <Label>Kode Kamar :</Label>
                                  <input type="text" class="form-control" name="kd_kamar" value="{{ $kamar->kd_kamar }}">
                            </div>
        
        
                            <div class="form-group">
                                  <Label>Nomer Kamar :</Label>
                                  <input type="text" class="form-control" name="no_kamar" value="{{ $kamar->no_kamar }}">
                            </div>

                            <div class="form-group">
                              <Label>Jenis Kamar :</Label>
                              <input type="text" class="form-control" name="jenis" value="{{ $kamar->jenis }}">
                        </div>
        
                            <div class="form-group">
                                  <Label>Fasilitas Kamar :</Label><br>
                                  <input type="text" class="form-control" name="fasilitas" value="{{ $kamar->fasilitas }} ">
                              </div>
        
                             
        
                              <div class="form-group">
                                  <Label>Harga Kamar :</Label>
                                  <input class="form-control" name="harga" value="{{ $kamar->harga }}"></input>
                              </div>

                              <div class="form-group">
                                <Label>stok :</Label>
                                <input class="form-control" name="stok" value="{{ $kamar->stok }}"></input>
                            </div>

                            <div class="form-group">
                              <Label>Foto Kamar :</Label>
                              <input type="file" class="form-control" name="foto">
                          </div>
              
                        
                        <center><input type="submit" class="btn btn-primary" value="Update Data" />
                        <a href="{{route('kamar.index')}}" class="btn btn-dark">Kembali</a>
                        </center>
                                  
                                  
                                
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        </form>

           </div>

        @endsection