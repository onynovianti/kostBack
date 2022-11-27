@extends('_include.awalan')
@section('konten')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah Administrator</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="/admin">@csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama">
          @error('nama')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Username">
          @error('username')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nomor Handphone</label>
          <input type="number" name="noHp" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nomor Handphone">
          @error('noHp')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email" name="email">
          @error('email')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password" name="password">
          @error('password')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection