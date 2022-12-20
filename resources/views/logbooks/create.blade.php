@extends('layouts.admin')
<link href="{{ URL::asset('/assets/edit.css') }}" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@section('kontenku')

@include('pesan_error')
<form action="{{ route('logbooks.store') }}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<div class="global-container">
    <div class="row justify-content-around mt-5">
      <div class="col-10"><h3 class=" fw-bolder display-5 mb-3">Create Order</h3>
        <form>
          <div class="mb-3">
            <label for="InputPrint" class="form-label">Print</label>
            <input type="text" name="judul" class="form-control">
          </div>
          <div class="mb-3">
            <label for="InputPrint" class="form-label">Bahan</label>
            <input type="text" name="nim_ketua" class="form-control">
          </div>
          <div class="mb-3">
            <label for="InputPrint" class="form-label">Qty</label>
            <input type="text" name="topik" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="InputPrint" class="form-label">Ukuran</label>
            <input type="text" name="deskripsi_progress" class="form-control">
          </div>
          <div class="mb-3">
            <label for="FormFile" class="form-label">Dokumen</label> <br>
            <input type="file" name="file_laporan" > 
          </div>
          <div class="mb-3">
            <label for="InputUser" class="form-label">Deskripsi</label>
            <input type="text" name="ukuran" class="form-control" >
          </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button> <br><br>
          </div>
        </form>
      </div>
    </div>
  </div>
</form>

@endsection