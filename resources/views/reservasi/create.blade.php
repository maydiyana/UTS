
@extends('layout')
@section('content')
           <div>
            <form class="user" method="POST" action="{{ route('reservasi.store') }}" enctype="multipart/form-data">

              {{ csrf_field() }}
              
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
                                        <input type="date" class="form-control" name="tgl_reservasi">
                                  </div>
              
              
                                  <div class="form-group">
                                        <Label>Nama Customer :</Label>
                                        <input type="text" class="form-control" name="nm_customer" >
                                  </div>

                                  <div class="form-group">
                                    <Label>Kode Kamar :</Label>
                                    <input type="text" class="form-control" name="kd_kamar" >
                              </div>
              
                                  <div class="form-group">
                                        <Label>Jumlah :</Label><br>
                                        <input type="text" class="form-control" name="jumlah" >
                                    </div>
              
                                   
              
                                    <div class="form-group">
                                        <Label>Total :</Label>
                                        <input type="text" class="form-control" name="total"></input>
                                    </div>
                                    
                                    <div class="form-group">
                                      <Label>Foto Kwitansi :</Label>
                                      <input type="file" class="form-control" name="foto_kwitansi">
                                  </div>
              
                                    
              
                        
                        <center><input type="submit" class="btn btn-primary" value="Simpan Data" /></center>
                                  
                                  
                                
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        </form>
                    
                   
                        
                  
           </div>

        @endsection