@extends('layouts.admin')

@section('kontenku')

@include('pesan_error')

<form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
  <div class="upload-container">
    <div class="row justify-content-around mt-5">
      <div class="col-10"><h3 class=" fw-bolder display-5 mb-3">Edit User</h3>
        <form>
          <div class="mb-3">
            <label for="InputPrint" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
          </div>
          <div class="mb-3">
            <label for="InputBahan" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
          </div>
          <div class="mb-3">
            <label for="InputUser" class="form-label">Role</label>
            <select name="role" aria-label="Default select example" value="{{ $user->role }}">
              <option value="1">Mahasiswa</option>
              <option value="2">Dosen</option>
            </select>
            <br><br>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</form>

@endsection