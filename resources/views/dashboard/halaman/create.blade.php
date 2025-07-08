@extends('dashboard.layout')

@section('konten')
  <div class="pb-3">
    <a href="{{ route('halaman.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
  <form action="{{ route('halaman.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="text" class="form-control form-control-sm" name="judul" id="judul" placeholder="Judul" value="{{ Session::get('judul') }}"/>
    </div>
    <div class="mb-3">
      <label for="isi" class="form-label">Isi</label>
      <textarea name="isi" class="form-control summernote" rows="5">{{Session::get('isi')}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary" >Simpan</button>
  </form>
@endsection