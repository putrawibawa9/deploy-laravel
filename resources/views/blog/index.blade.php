     @if (session('delete'))
        <div class="alert alert-danger">
            {{ session('delete') }}
        </div>
        @elseif (session('create'))
        <div class="alert alert-primary">
            {{ session('create') }}
        </div>
        @elseif (session('update'))
               <div class="alert alert-secondary">
            {{ session('update') }}
        </div>
    @endif
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
      <h4 class="text-center">Add Data</h4>
      <p class="text-center">Selamat datang <span class="text-primary"></span> </p>
      <div class="text-center">
          <a class="btn btn-primary btn-sm" href="{{ route('blog.create') }}">Tambah Data Blog</a>
      </div>
    </div>
    </div>
    </div>
  
    
    <div class="container">
      <div class="row">
        <div class="col-12 p-3 bg-white">
          
          <table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                <th class="text-center">No</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Blog</th>
                    <th class="text-center">Author</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Action</th>
                  </tr>
            </thead>
            <tbody>
              <?php $i=1?>
              <?php foreach($blogs as $row):?>
                <tr>
                  <td><?=$i++ ?></td>
                  <td >{{ $row->judul_blog }}</td>
                  <td >{{ $row->deskripsi_blog }}</td>
                  <td >{{ $row->penulis_blog }}</td>
                  <td >{{ $row->created_at }}</td>
                    <td class="text-center">
                        <a  href="/blog/{{ $row->id_blog }}/edit" class="btn btn-secondary btn-sm ">Edit</a>
                          <form action="/blog/{{ $row->id_blog }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm " onclick="return confirm('are you sure?')">
                      Hapus
                    </button>
                  </form>
                  <?php endforeach; ?>
                 
                  </td>
                </tr>
                </tbody>
        </table>
        <div>
          
          </div>
    </div>
  </div>
</div>
    @endsection