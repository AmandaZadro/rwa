@extends('layouts.admin')

@section('content')
    <div class="mb-20">
        <h1>Sve muzičke grupe</h1>
        <a href="{{ route('admin.render-music-group-create') }}">
            <button class="btn btn-primary">Dodaj novu</button>
        </a>
    </div>

    <div class="row">
        @foreach($musicGroups as $musicGroup)
            <div class="col-lg-6 mb-20">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('uploads'.'/'.$musicGroup->image)}}" class="card-img-top" alt="..." style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">{{$musicGroup->name}}</h5>
                        <p class="card-text">
                            {{$musicGroup->description}}
                        </p>
                        <a href="{{ route('admin.get-music-group', ['groupId' => $musicGroup->id]) }}" class="btn btn-info">Uredi</a>
                        <a href="{{ route('admin.delete-music-group', ['groupId' => $musicGroup->id]) }}" class="btn btn-danger">Izbriši</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
