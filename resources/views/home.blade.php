@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
    Hola {{ $user->name }} {{ $sn1->sn1 }}
@endsection