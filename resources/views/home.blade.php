@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
    Hola {{ $user->name }} {{ $user->sn1 }}
@endsection