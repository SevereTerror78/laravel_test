@extends('layout')

@section('content')
<h1>Category index </h1>

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
<ul>
    @foreach($categories as $category)
        <li>
            {{$category->id}} - {{$category->name}}
            <a href="{{route('categories.show', $category->id)}}" class="button">Megjelenítés</a>
            <a href="{{route('categories.edit', $category->id)}}" class="button">Szerkesztés</a>
            <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="danger" onclick="return confirm('Biztos hogy törölni akarsz?')">Törlés</button>
            </form>

        </li>
    @endforeach
</ul>
@endsection
