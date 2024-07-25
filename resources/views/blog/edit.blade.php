@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 text-center">
        <img src="{{ asset('images/spdigital.png') }}" class="img-fluid" width="200px" alt="Logo Hanoman">
      </div>
    </div>
  </div>

  <div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
      <h4 class="text-center">Edit blog</h4>
    </div>
    </div>
    </div>


<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <form action="/blog/{{ $blog->id_blog }}" method="post"`>  
            @csrf
            @method('PUT')
        <input type="hidden" name="id_blog" value="{{ $blog->id_blog }}">
            @csrf

      
            <div class="mb-3">
                <input type="text" name="judul_blog" placeholder="Judul blog" class="form-control" value ="{{ $blog->judul_blog }} " required>
            </div>
            <div class="mb-3">
          <label for="message">Deskripsi Blog:</label><br>
        <textarea name="deskripsi_blog" class="form-control" id="message" name="message">{{ $blog->deskripsi_blog }}</textarea>
            </div>
            <a href="index.php" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
  </div>
</div>
@endsection