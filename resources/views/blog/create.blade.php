@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 text-center">
        <img src="{{ asset('images') }}/spdigital.png" class="img-fluid" width="200px" alt="Logo Hanoman">
      </div>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
      <h4 class="text-center">Tambah Blog</h4>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <form method="post" action="{{ route('blog.store') }}" >
            @csrf
            <div class="mb-3">
                <input type="text" name="judul_blog" class="form-control" required placeholder="Judul Blog">
            </div>
            <div class="mb-3">
          <label for="message">Deskripsi Blog:</label><br>
        <textarea name="deskripsi_blog" class="form-control" id="message" name="message"></textarea>
            </div>
            <a href="/blog" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary" >Simpan</button>
        </form>
    </div>
  </div>
</div>
@endsection