@extends('layouts.admin')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{route('admin.users')}}">Korisnici</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Informacije korisnika</li>
        </ol>
    </nav>

    <form method="post" action="{{route('admin.update-user', ['userId' => $user->id])}}">
        @csrf
        <div class="form-group">
            <label for="name">Ime korisnika</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}">
        </div>

        <div class="form-group">
            <label for="email">Email korisnika</label>
            <input type="text" id="email" name="email" class="form-control" value="{{$user->email}}">
        </div>

        <div class="form-group">
            <label for="role">Korisnička grupa</label>
            <select name="role_id" id="role" class="form-control">
                @foreach($roles as $role)
                    <option
                        @if($role->id === $user->role_id)
                            selected
                        @endif
                        value="{{$role->id}}">
                        {{$role->role_name}}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Promjeni
        </button>
    </form>
@endsection
