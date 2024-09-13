@extends('layouts.master')
@section('content')
    @foreach($users as $user)
    Hi, {{ $user->name }} <br>
    @endforeach
    @endsection
