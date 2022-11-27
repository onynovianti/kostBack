@extends('_include.awalan')
@section('konten')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Pemilik</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="/pemilik/{{ $item->id }}"> @method("put")
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama" value="{{ $item->nama }}">
          @error('nama')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Username" value="{{ $item->username }}">
          @error('username')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nomor Handphone</label>
          <input type="number" name="noHp" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nomor Handphone" value="{{ $item->noHp }}">
          @error('noHp')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email" name="email" value="{{ $item->email }}">
          @error('email')
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