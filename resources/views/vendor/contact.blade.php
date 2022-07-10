@extends('layouts.app')


@section('content')
@if !count($people)
    <ul>
        @foreach ($people as $person )

            <li>
                {{ $person }}
            </li>
            
        @endforeach
    </ul>
    
@endif
<h1 class="text-center">Contact Page using blade example </h1>
@endsection 