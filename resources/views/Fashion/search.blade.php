@extends('layouts.fashion')
@section('content')
@livewire('search',['products'=>$products])
@endsection
