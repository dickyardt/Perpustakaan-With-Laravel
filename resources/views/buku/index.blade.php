@extends('layouts.master')

@section('content')
        <div class="container">
            <div class="area">
              <div class="kiri"><h4>Data Buku</h4></div>
              <div class="kanan"><a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a></div>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul Buku</th>
                  <th>Penulis</th>
                  <th>Harga</th>
                  <th>Tgl. Terbit</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_buku as $buku)
                <tr>
                  <td>{{ ++$no }}</td>
                  <td>{{ $buku->judul }}</td>
                  <td>{{ $buku->penulis }}</td>
                  <td>{{ $buku->harga }}</td>
                  <td>{{ $buku->tgl_terbit }}</td>
                  <td>
                  <form action="{{ route('buku.destroy', $buku->id) }}" method="post">@csrf
                  <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-info">Edit</a>
                  <button type="submit" class="btn btn-danger" onClick="return confirm('Yakin mau dihapus?')">Hapus</button></td>
                  </form>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
@endsection
