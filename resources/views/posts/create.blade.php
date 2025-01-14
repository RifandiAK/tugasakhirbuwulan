@extends('layouts.app')
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rakpan</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/posts/Logo2.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
@section('content')

<body style="background: #C0CFB2">
<nav class="navbar navbar-expand-lg navbar-light bg-transparant">

<div class="container-fluid">
    <a class="navbar-brand" href="{{ route('portofolio.index') }}">
        <img src="{{ asset('storage/posts/logo.png') }}" alt="Logo" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('portofolio.index') }}">Flowgard</a>
            </li>
        </ul>
        

    </div>
</div>
</nav>
    <h2 class="mt-5 mb-5" style="text-align: center; color :black; font-weight:bold;">Tambahkan Produk Anda</h2>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="card border-0 shadow-sm rounded" style="width: 80%;">
                <div class="card-body">
                    <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="font-weight-bold">Tambahkan Produk</label>
                            <input style="padding: 10px; margin:10px;" type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            @error('image')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div> @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nama Product</label>
                            <input type="text" style="margin:10px;" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Nama Produk">
                            @error('title')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div> @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Deskripsi dan Harga Product</label>
                            <input type="text" style="margin:10px;" class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Deskripsi dan Harga dari Produk anda">{{ old('content') }}</input>
                            @error('content')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div style="margin: 10px;">
                            <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    @endsection

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('');
    </script>
</body>

</html>