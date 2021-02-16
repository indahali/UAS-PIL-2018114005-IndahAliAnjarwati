@extends('layout.app')

@section('title', 'Semester')

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
              <h6 class="m-0 font-weight-bold text-primary">Data Semester</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Semester</th> 
                    </tr>
                <tbody>
                  @foreach($semesters as $smster)
                  <tr>
                    <td> {{ $smster['semester'] }} </td>
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
      <form action="/semesters" method="POST">

          @csrf

      <div class="modal-body">
      <div class="form-group">
      <label class="font-weight-bold">Semester</label>
                                <input type="text" class="form-control @error('semester') is-invalid @enderror" name="semester" value="{{ old('semester') }}">
                            
                                <!-- error message untuk semester -->
                                @error('semester')
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