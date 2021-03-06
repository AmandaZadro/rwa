@extends('layouts.admin')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('admin.music-groups')}}">Muzičke grupe</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Dodaj novu muzičku grupu</li>
        </ol>
    </nav>

    <form method="post" action="{{ route('admin.update-music-group', ['groupId' => $group->id]) }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Ime muzičke grupe</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$group->name}}">
        </div>

        <img src="{{asset('uploads'.'/'.$group->image)}}" class="card-img-top" alt="..." style="width: 250px; height: 250px;">

        <div class="form-group">
            <label for="exampleFormControlFile1">Slika</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </div>

        <div class="form-group">
            <label for="description">Opis</label>
            <textarea id="description" name="description" class="form-control" rows="5" cols="80">
                {{$group->description}}
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Uredi
        </button>
    </form>
@endsection
