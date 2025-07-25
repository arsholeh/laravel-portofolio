@extends('dashboard.layout')

@section('konten')
<div class="pb-3">
  <a href="{{ route('experience.index') }}" class="btn btn-secondary">Kembali</a>
</div>
<form action="{{ route('experience.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="judul" class="form-label">Posisi</label>
      <input type="text" class="form-control form-control-sm" name="judul" id="judul" placeholder="Posisi" value="{{ $data->judul}}"/>
    </div>
    <div class="mb-3">
      <label for="info1" class="form-label">Nama Perusahaan</label>
      <input type="text" class="form-control form-control-sm" name="info1" id="info1" placeholder="Nama Perusahaan" value="{{ $data->info1 }}"/>
    </div>
    <div class="mb-3">
      <div class="row">
        <div class="col-auto mt-2">Tanggal Mulai</div>
        <div class="col-auto"><input type="date" name="tgl_mulai" class="form-control form-control-sm" placeholder="dd/mm/yy" value="{{ $data->tgl_mulai }}"></div>
        <div class="col-auto mt-2">Tanggal Akhir</div>
        <div class="col-auto"><input type="date" name="tgl_akhir" class="form-control form-control-sm" placeholder="dd/mm/yy" value="{{ $data->tgl_akhir }}"></div>
      </div>
    </div>
    <div class="mb-3">
      <label for="isi" class="form-label">Isi</label>
      <textarea name="isi" class="form-control summernote" rows="5">{{$data->isi}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary" >Simpan</button>
  </form>
@endsection