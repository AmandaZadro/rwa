@extends('layouts.admin')

@section('content')

    <h1 class="mb-20">Svi korisnici</h1>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Ime</th>
            <th scope="col">Email adresa</th>
            <th scope="col">Korisnička grupa</th>
            <th scope="col">Datum registracije</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @if($user->role_id === 1)
                        Super admin
                    @elseif($user->role_id === 2)
                        Admin
                    @else
                        Korisnik
                    @endif
                </td>
                <td>{{$user->created_at}}</td>
                <td>
                    <a href="{{route('admin.single-user', ['userId' => $user->id])}}">
                        <button class="btn btn-info">
                            Promjeni
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
