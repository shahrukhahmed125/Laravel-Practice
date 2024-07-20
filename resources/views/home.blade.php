@extends('layouts.app')
@section('content')


<h1 class="dispaly-1">Home: {{\Auth::user()->name}}</h1>
    
@endsection