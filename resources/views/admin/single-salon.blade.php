@extends('layouts.admin')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('admin.salons')}}">Svadbeni saloni</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Uredi svadbeni salon</li>
        </ol>
    </nav>

    <form method="post" action="{{ route('admin.update-salon', ['salonId' => $salon->id]) }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Ime svadbenog salona</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $salon->name }}">
        </div>

        <img src="{{asset('uploads'.'/'.$salon->image)}}" class="card-img-top" alt="..." style="width: 250px; height: 250px;">

        <div class="form-group">
            <label for="exampleFormControlFile1">Promjeni sliku</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </div>

        <div class="form-group">
            <label for="location">Lokacija</label>
            <input type="text" id="location" name="location" class="form-control" value="{{ $salon->location }}">
        </div>

        <div class="form-group">
            <label for="capacity">Kapacitet</label>
            <input type="number" id="capacity" name="capacity" class="form-control" value="{{ $salon->capacity }}">
        </div>

        <div class="form-group">
            <label for="contact">Kontakt</label>
            <input type="text" id="contact" name="contact" class="form-control" value="{{ $salon->contact }}">
        </div>

        <button type="submit" class="btn btn-primary">
            Uredi
        </button>
    </form>
@endsection
