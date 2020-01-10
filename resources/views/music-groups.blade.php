@extends('layouts.app')

@section('content')

    @foreach($groups as $group)
        <div class="card mb-3">
            <img src="{{asset('uploads'.'/'.$group->image)}}" class="card-img-top" alt="..." style="height: 500px;">
            <div class="card-body">
                <h5 class="card-title">{{$group->name}}</h5>
                <p class="card-text">
                    {{$group->description}}
                </p>
            </div>
        </div>
    @endforeach

@endsection
