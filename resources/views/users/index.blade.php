@extends('layouts.admin')

@section('kontenku')
<div class="d-flex justify-content-around mt-4">
    <div class="col-10"><h3 class="fw-bolder display-5 mb-3">Users</h3></div>
</div>

@include('pesan_error')

<div class="container">
   <table class="table table-striped table-hover">
    <thead class="table-Light">
      <tr>
        <td scope="col">Nama</td>
        <td scope="col">Email</td>
        <td scope="col">Role</td>
        <td scope="col">Ket</td>
      </tr>
      @forelse ($Users as $user)
      <tr>
         <td>{{ $user->name }}</td>
         <td>{{ $user->email }}</td>
         <td>{{ $user->role }}</td>
         <td class="d-flex">
               <a type="button" class="btn btn-light me-2" href="{{ route('users.edit', $user->id) }}" class="me-2 ">Edit</a> 
               
               <form action="{{ route('users.destroy', $user->id) }}" method="POST" onclick="confirm('yakin')">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
               </form>
         </td>
      </tr>
      @empty
         <td colspan="5"> Belum ada data. </td>
      @endforelse
   </thead>
</div>


@endsection