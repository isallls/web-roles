@extends('user.layouts.header')
@section('container')
<div>
    <p>name : {{ Auth::user()->name }}</p>
</div>

@endsection