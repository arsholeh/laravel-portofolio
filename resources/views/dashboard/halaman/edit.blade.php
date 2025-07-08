@extends('dashboard.layout')

@section('konten')
<div class="pb-3">
  <a href="{{ route('halaman.index') }}" class="btn btn-secondary">Kembali</a>
</div>
<form action="{{ route('halaman.update', $halaman->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="judul" class="form-label">Judul</label>
    <input type="text" class="form-control form-control-sm" name="judul" id="judul" placeholder="Judul" value="{{ $halaman->judul }}" />
  </div>
  <div class="mb-3">
    <label for="isi" class="form-label">Isi</label>
    <textarea name="isi" class="form-control summernote" rows="5">{{$halaman->isi}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection