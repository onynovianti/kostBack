@extends('_include.awalan')
@section('konten')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Berikut adalah data Kost</h3>
    <a href="/kost/create" class="btn btn-primary btn-rounded btn-icon btn-sm float-right"><i class="fas fa-plus"></i>&nbsp;Tambah</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kecamatan</th>
        <th>Kota/Kabupaten</th>
        <th>Provinsi</th>
        <th>
          Aksi
        </th>
      </tr>
      </thead>
      <tbody>
      @foreach ($item as $i)
      <tr>
        <td>{{ $i->nama }}</td>
        <td>{{ $i->alamat }}</td>
        <td>{{ $i->kecamatan }}</td>
        <td>{{ $i->kota }}</td>
        <td>{{ $i->provinsi }}</td>
        <td>
          <form action="/kost/{{ $i->id }}" method="POST">
            {{-- Update  --}}
            <a type="button" href="/kost/{{ $i->id }}/edit" class="btn btn-warning btn-rounded btn-icon btn-sm"><i class="fas fa-edit"></i></a>
            @method("delete")
            @csrf
            {{-- Delete  --}}
            <button type="submit" class="btn btn-danger btn-rounded btn-icon btn-sm">
              <i class="fas fa-trash"></i>
            </button>
            </form> 
        </td>
      </tr>
      @endforeach
      </tbody>
      <tfoot>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kecamatan</th>
        <th>Kota/Kabupaten</th>
        <th>Provinsi</th>
        <th>
          Aksi
        </th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection