@extends('layouts.admin')

@section('content')
    <div class="mb-20">
        <h1>Svi svadbeni saloni</h1>
        <a href="{{ route('admin.render-salon-create') }}">
            <button class="btn btn-primary">Dodaj novi</button>
        </a>
    </div>

    <div class="row">
        @foreach($salons as $salon)
            <div class="col-lg-6 mb-20">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('uploads'.'/'.$salon->image)}}" class="card-img-top" alt="..." style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">{{$salon->name}} - {{$salon->location}}</h5>
                        <p class="card-text">
                            Kapacitet: {{$salon->capacity}} <br/>
                            Kontakt: {{$salon->contact}}
                        </p>
                        <a href="{{ route('admin.get-salon', ['salonId' => $salon->id]) }}" class="btn btn-info">Uredi</a>
                        <a href="{{ route('admin.delete-salon', ['salonId' => $salon->id]) }}" class="btn btn-danger">Izbriši</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
