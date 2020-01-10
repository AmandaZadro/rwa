@extends('layouts.app')

@section('content')

    @foreach($salons as $salon)
        <div class="card mb-3">
            <img src="{{asset('uploads'.'/'.$salon->image)}}" class="card-img-top" alt="..." style="height: 500px;">
            <div class="card-body">
                <h5 class="card-title">{{$salon->name}} - {{$salon->location}}</h5>
                <p class="card-text">
                    Kapacitet: {{$salon->capacity}} <br/>
                    Kontakt: {{$salon->contact}}
                </p>
            </div>
        </div>
    @endforeach

@endsection
