
@extends('layout')
@section('content')
           <div>
            <form class="user" method="POST" action="{{ route('kamar.store') }}" enctype="multipart/form-data">

              {{ csrf_field() }}
              
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
                                        <input type="text" class="form-control" name="kd_kamar">
                                  </div>
              
              
                                  <div class="form-group">
                                        <Label>Nomer Kamar :</Label>
                                        <input type="text" class="form-control" name="no_kamar">
                                  </div>

                                  <div class="form-group">
                                    <Label>Jenis Kamar :</Label>
                                    <input type="text" class="form-control" name="jenis" >
                              </div>
              
                                  <div class="form-group">
                                        <Label>Fasilitas Kamar :</Label><br>
                                        <input type="text" class="form-control" name="fasilitas" >
                                    </div>
              
                                   
              
                                    <div class="form-group">
                                        <Label>Harga Kamar :</Label>
                                        <textarea class="form-control" name="harga"></textarea>
                                    </div>

                                    <div class="form-group">
                                      <Label>stok :</Label>
                                      <textarea class="form-control" name="stok"></textarea>
                                  </div>

                                  <div class="form-group">
                                    <Label>Foto Kamar :</Label>
                                    <input type="file" class="form-control" name="foto">
                                </div>
              
                                    
              
                        
                        <center><input type="submit" class="btn btn-primary" value="Simpan Data" /></center>
                                  
                                  
                                
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        </form>
                    
                   
                        
                  
           </div>

        @endsection