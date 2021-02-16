@extends('layout.app')

@section('title', 'ABSENSI')

@section('content')
<!-- DataTales Example -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-plus fa-sm text-white-50"></i>
              Tambah
            </button> 
          </div>

          <!-- Content Row -->
          <div class="row">
          </div>
          <!-- /.container-fluid -->
  
        


<div class="card shadow mb-4">
            <div class="card-header py-3">  
              <h6 class="m-0 font-weight-bold text-primary">Data Absensi Mahasiswa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Waktu Absen</th>
                      <th>Mahasiswa ID</th> 
                      <th>Mata Kuliah ID </th>
                      <th>Keterangan</th>
                    </tr>
                <tbody>
                  @foreach($absens as $abs)
                  <tr>

                    <td> {{ $abs['waktu_absen'] }} </td>
                    <td> {{ $abs['mahasiswa_id'] }} </td>
                    <td> {{ $abs['matakuliah_id'] }} </td>
                    <td> {{ $abs['keterangan'] }} </td>
                  
                  
                  </tr>
                  @endforeach
                </tbody>
                </table>
              </div>
            </div>
          </div>

          </div>
        <!-- End of Main Content -->

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukkan Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/absens" method="POST">

          @csrf

      <div class="modal-body">
      <div class="form-group">
                                <label class="font-weight-bold">Waktu Absen</label>
                                <input type="time" class="form-control @error('waktu_absen') is-invalid @enderror" name="waktu_absen" value="{{ old('waktu_absen') }}">
                            
                                <!-- error message untuk waktu_absen -->
                                @error('waktu_absen')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Mahasiswa ID</label>
                                <select name="mahasiswa_id" class="form-control">
                                        <option value="">- Pilih -</option>
                                            <option value="2018114002"> 2018114002 </option>
                                            <option value="2018114004"> 2018114004 </option>
                                            <option value="2018114005"> 2018114005 </option>
                                            <option value="2018114006"> 2018114006 </option>
                                            <option value="2018114010"> 2018114010 </option>
                                            <option value="2018114011"> 2018114011 </option>
                                            <option value="2018114017"> 2018114017 </option>
                                            <option value="2018114018"> 2018114018 </option>
                                            <option value="2018114020"> 2018114020 </option>
                                            <option value="2018114025"> 2018114025 </option>
                                            <option value="2018114022"> 2018114022 </option>
                                            <option value="2018114028"> 2018114028 </option>
                                            <option value="2018114034"> 2018114034 </option>
                                            <option value="2018114035"> 2018114035 </option>
                                            <option value="2018114038"> 2018114038 </option>
                                            <option value="2018114039"> 2018114039 </option>
                                            <option value="2018114040"> 2018114040 </option>
                                            <option value="2018114041"> 2018114041 </option>
                                            <option value="2018114042"> 2018114042 </option>
                                            
                                    </select>
                            
                                <!-- error message untuk MAHASISWA ID -->
                                @error('mahasiswa_id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Matakuliah ID</label>
                                <select name="matakuliah_id" class="form-control">
                                        <option value="">- Pilih -</option>
                                            <option value="SIE043003"> SIE043003 </option>
                                            <option value="SI052020"> SI052020 </option>
                                            <option value="SIE063009"> SIE063009 </option>
                                            <option value="DKVX052001"> DKVX052001 </option>
                                            <option value="SI054024"> SI054024 </option>
                                            <option value="DKVX052002"> DKVX052002 </option>
                                            <option value="SI054022"> SI054022 </option>
                                            <option value="SI052021"> SI052021 </option>
                                    </select>
                            
                                <!-- error message untuk MATAKULIAH ID -->
                                @error('matakuliah_id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Keterangan</label>
                                <select name="keterangan" class="form-control">
                                            <option value="">- Pilih -</option>
                                            <option value="Hadir"> Hadir </option>
                                            <option value="Tidak Hadir"> Tidak Hadir</option>
                                    </select>
                                <!-- error message untuk keterangan -->
                                @error('keterangan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">INPUT</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </form> 
            </div>
          </div>
        
       
      </div>
    </form>
    </div>
  </div>
</div>
@endsection