@extends('layouts.admin')
<link href="{{ URL::asset('/assets/edit.css') }}" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
@section('kontenku')

@include('pesan_error')

<form action="{{ route('logbooks.update', $logbook->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
  <div class="global-container">
    <div class="row justify-content-around mt-5">
      <div class="col-10"><h3 class=" fw-bolder display-5 mb-3">Edit User</h3>
        <form>
          <div class="mb-3">
            <label for="InputPrint" class="form-label">Print</label>
            <input type="text" name="judul" class="form-control" value="{{ $logbook->judul }}">
          </div>
          <div class="mb-3">
            <label for="InputPrint" class="form-label">Bahan</label>
            <input type="text" name="nim_ketua" class="form-control" value="{{ $logbook->nim_ketua }}">
          </div>
          <div class="mb-3">
            <label for="InputPrint" class="form-label">Qty</label>
            <input type="text" name="topik" class="form-control" value="{{ $logbook->topik }}">
          </div>
          <div class="mb-3">
            <label for="InputPrint" class="form-label">Ukuran</label>
            <input type="text" name="deskripsi_progress" class="form-control" value="{{ $logbook->deskripsi_progress }}">
          </div>
          <div class="mb-3">
            <label for="FormFile" class="form-label">Dokumen (kosongkan jika tidak ingin diubah):</label> <br>
            <input type="file" name="file_laporan" value="{{ $logbook->file_laporan }}"> 
            File saat ini: 
            @if ($logbook->file_laporan == NULL) 
            <span> </span>Tidak ada file laporan
            @else
            <a href="{{ asset("storage/fileku/$logbook->file_laporan") }}"> Download Laporan</a>
            @endif
          </div>
          <div class="mb-3">
            <label for="InputUser" class="form-label">Deskripsi</label>
            <input type="text" name="ukuran" class="form-control" value="{{ $logbook->ukuran }}">
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