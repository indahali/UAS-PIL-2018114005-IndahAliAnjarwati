@extends('layout.app')

@section('title', 'Kontrak Matakuliah')

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
              <h6 class="m-0 font-weight-bold text-primary">Data Kontrak Matakuliah</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr> 
                    <th>Mahasiswa ID </th>
                    <th>Semester ID</th>
                    </tr>
                <tbody>
                  @foreach($kontrakmatakuliahs as $mk)
                  <tr>

                    <td> {{ $mk['mahasiswa_id'] }} </td>
                    <td> {{ $mk['semester_id'] }} </td>
                    <td> <a href="/kontrakmatakuliahs/{{ $mk['id'] }}/edit"> Edit Data</td>
                    <td> <from action="/kontrakmatakuliahs/{{ $mk['id'] }}" method="post"> 
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
      <form action="/kontrakmatakuliahs" method="POST">

          @csrf

      <div class="modal-body">
      <div class="form-group">
      <label class="font-weight-bold">Mahasiswa ID</label>
                                <input type="text" class="form-control @error('mahasiswa_id') is-invalid @enderror" name="mahasiswa_id" value="{{ old('mahasiswa_id') }}">
                            
                                <!-- error message untuk mahasiswa_id -->
                                @error('mahasiswa_id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
      <div class="form-group">
      <label class="font-weight-bold">Semester ID</label>
                                <input type="text" class="form-control @error('semester_id') is-invalid @enderror" name="semester_id" value="{{ old('semester_id') }}">
                            
                                <!-- error message untuk semester_id -->
                                @error('semester_id')
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