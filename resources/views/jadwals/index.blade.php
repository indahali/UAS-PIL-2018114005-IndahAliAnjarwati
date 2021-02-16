@extends('layout.app')

@section('title', 'Jadwal')

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
              <h6 class="m-0 font-weight-bold text-primary">Data Jadwal Mahasiswa</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr> 
                    <th>Jadwal</th>
                    <th>Mata Kuliah ID </th>
                    </tr>
                <tbody>
                  @foreach($jadwals as $jdw)
                  <tr>

                    <td> {{ $jdw['jadwal'] }} </td>
                    <td> {{ $jdw['matakuliah_id'] }} </td>
                    <td> <a href="/jadwals/{{ $jdw['id'] }}/edit"> Edit Data</td>
                    <td> <from action="/jadwals/{{ $jdw['id'] }}" method="post"> 
                    @csrf
                    @method('DELETE')
                    <button class="card-link btn-danger">hapus data</button> </td>
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
      <form action="/jadwals" method="POST">

          @csrf

      <div class="modal-body">
       <div class="form-group">
                                <label class="font-weight-bold">JADWAL</label>
                                <select name="jadwal" class="form-control">
                                        <option value="">- Pilih -</option>
                                            <option value="Senin"> Senin </option>
                                            <option value="Selasa"> Selasa </option>
                                            <option value="Rabu"> Rabu </option>
                                            <option value="Kamis"> Kamis </option>
                                            <option value="Jumat"> Jumat </option>
                                            <option value="Sabtu"> Sabtu </option>
                                            <option value="Minggu"> Minggu </option>
                                            
                                    </select>
                            
                                <!-- error message untuk JADWAL -->
                                @error('jadwal')
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
                                            <option value="LIBUR"> LIBUR </option>
                                    </select>
                            
                                <!-- error message untuk MATAKULIAH ID -->
                                @error('matakuliah_id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

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