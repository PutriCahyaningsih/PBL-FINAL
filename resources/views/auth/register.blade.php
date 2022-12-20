<link href="{{ URL::asset('/assets/register.css') }}" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('register') }}" method="POST">
@csrf
  <div class="upload-container">
    <div class="row justify-content-around mt-5">
      <div class="col-10"><h3 class=" fw-bolder display-5 mb-3">Create User</h3>
        <form>
          <div class="mb-3">
            <label for="InputPrint" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="mb-3">
            <label for="InputBahan" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="mb-3">
            <label for="InputBanyak" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="InputUkuran" class="form-label">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" >
          </div>
          <div class="mb-3">
            <label for="InputUser" class="form-label">Role</label>
            <select name="role" aria-label="Default select example">
              <option selected>Role</option>
              <option value="1">Mahasiswa</option>
              <option value="2">Dosen</option>
            </select>
            <br><br>
          <button type="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</form>
