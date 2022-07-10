@extends('layouts.app')


@section('content')

<form action="{{ '/' }}/posts" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Enter Name">
    {{-- <input type="email" name="email" placeholder="Enter Email">
    <input type="password" name="password" placeholder="Enter Password"> --}}

    <input type="submit" name="Register">
</form>


@yield('footer')