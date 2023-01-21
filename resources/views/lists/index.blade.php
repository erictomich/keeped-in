@extends('template.dashboard')

@section('content')
    <div>
        <p>Listas</p>
        <br>
        @foreach ($lists as $list)
            <p> {{ $list->title }} </p>
        @endforeach
    </div>
@endsection