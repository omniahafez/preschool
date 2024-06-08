@extends('layouts.dashMain')
@section('content')
@include('dashIncludes.leftSideColumns')
               <!-- Right side columns -->
               @include('dashIncludes.rightSideColumns')
               @endsection
               @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif