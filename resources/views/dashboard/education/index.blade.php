@extends('dashboard.layout')

@section('konten')
  <p class="card-title">Education</p>
  <div class="pb-3"><a href="{{ route('education.create') }}" class="btn btn-primary">+Tambah Education</a></div>
  <div class="table-responsive"></div>
    <table class="table table-stripped">
      <thead>
        <tr>
          <th class="col-1">No</th>
          <th>Universitas</th>
          <th>Fakultas</th>
          <th>Prodi</th>
          <th>IPK</th>
          <th>Tanggal Mulai</th>
          <th>Tanggal Akhir</th>
          <th class="col-3">Aksi</th>
        </tr>
      </thead>  
      <tbody>
       
          @foreach ($data as $item )
           <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$item->judul}}</td>
              <td>{{$item->info1}}</td>
              <td>{{$item->info2}}</td>
              <td>{{$item->info3}}</td>
              <td>{{$item->tgl_mulai_indo}}</td>
              <td>{{$item->tgl_akhir_indo}}</td>
              <td>
                  <a href="{{ route('education.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                  <form action="{{ route('education.destroy', $item->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                  </form>
              </td>

            </tr>
          @endforeach
        
      </tbody>
    </table>
@endsection
