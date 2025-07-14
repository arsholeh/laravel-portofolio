@extends('dashboard.layout')

@section('konten')
  <div class="pb-3">
    <a href="{{ route('education.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
  <form action="{{ route('education.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="judul" class="form-label">Universitas</label>
      <input type="text" class="form-control form-control-sm" name="judul" id="judul" placeholder="Universitas" value="{{ $data->judul }}"/>
    </div>
    <div class="mb-3">
      <label for="info1" class="form-label">Nama Fakultas</label>
      <input type="text" class="form-control form-control-sm" name="info1" id="info1" placeholder="Nama Perusahaan" value="{{ $data->info1 }}"/>
    </div>
    <div class="mb-3">
      <label for="info2" class="form-label">Nama Prodi</label>
      <input type="text" class="form-control form-control-sm" name="info2" id="info2" placeholder="Nama Prodi" value="{{ $data->info2 }}"/>
    </div>
    <div class="mb-3">
      <label for="info3" class="form-label">IPK</label>
      <input type="text" class="form-control form-control-sm" name="info3" id="info3" placeholder="IPK" value="{{ $data->info3 }}"/>
    </div>
    <div class="mb-3">
      <div class="row">
        <div class="col-auto mt-2">Tanggal Mulai</div>
        <div class="col-auto"><input type="date" name="tgl_mulai" class="form-control form-control-sm" placeholder="dd/mm/yy" value="{{ $data->tgl_mulai }}"></div>
        <div class="col-auto mt-2">Tanggal Akhir</div>
        <div class="col-auto"><input type="date" name="tgl_akhir" class="form-control form-control-sm" placeholder="dd/mm/yy" value="{{ $data->tgl_akhir }}"></div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary" >Simpan</button>
  </form>
@endsection