@extends('layouts.master')
@section('content')
@include('partials.slider')
@include('partials.ieee')
@include('partials.team')
@include('partials.animatednumbers')
@include('partials.people')
@include('partials.latestarticles')
@include('partials.getintouch')
<script src="{{URL::to('js/theme/main.js')  }}"></script>
@endsection