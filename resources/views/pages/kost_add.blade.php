@extends('_include.awalan')
@section('konten')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah Kost</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="/kost">@csrf
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
          <label for="exampleInputEmail1">Alamat</label>
          <input type="text" class="form-control" name="alamat"/>
          @error('alamat')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
        </div>
        
        <div class="form-group">
          <label for="exampleInputPassword1">Provinsi</label>
          <select class="select2" style="width: 100%;" id="provinsi" name="provinsi">
            @foreach ($prov as $p)
              <option value="{{ $p->id }}">{{ $p->name }}</option>
            @endforeach
          </select>
          @error('provinsi')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Kabupaten / Kota</label>
          <select class="form-control select2" style="width: 100%;" id="kota" disabled name="kota">
          </select>
          @error('kab/kota')
                        <code>
                          {{ $message }}
                        </code>
                          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Kecamatan</label>
          <select class="form-control select2" style="width: 100%;" disabled id="kecamatan" name="kecamatan">
          </select>
          @error('kecamatan')
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