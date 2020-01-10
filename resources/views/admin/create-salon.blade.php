@extends('layouts.admin')

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('admin.salons')}}">Svadbeni saloni</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Dodaj novi svadbeni salon</li>
        </ol>
    </nav>

    <form method="post" action="{{ route('admin.create-salon') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Ime svadbenog salona</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Slika</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </div>

        <div class="form-group">
            <label for="location">Lokacija</label>
            <input type="text" id="location" name="location" class="form-control">
        </div>

        <div class="form-group">
            <label for="capacity">Kapacitet</label>
            <input type="number" id="capacity" name="capacity" class="form-control">
        </div>

        <div class="form-group">
            <label for="contact">Kontakt</label>
            <input type="text" id="contact" name="contact" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">
            Dodaj
        </button>
    </form>
@endsection
