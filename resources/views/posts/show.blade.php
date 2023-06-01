@extends('layouts.app')

@section('title')
    {{$post->from}}
@endsection

@section('logo')
<div class="navbar-start">
    <a href="{{url('/')}}" class="btn btn-ghost normal-case text-xl">RPLWhispers</a>
</div>
@endsection

@section('content')
<div class="bg-gradient-to-r from-purple-500 to-blue-800 h-screen flex justify-center items-center">
    <div class="card w-96 bg-white shadow-lg p-6 mt-10 overflow-scroll">
        <h2 class="font-bold text-2xl text-custum-text mb-4">Message </h2>
        <div class="border-t-2 mb-2"></div>
        <div class="text-xl">
            <p class="font-bold text-l text-custum-text mb-4">To: {{$post->to}}</p>
            <div class="border-b mb-2"></div>
            <p class="font-bold text-l text-custum-text mb-4">From: {{$post->from}}</p>
            <div class="border-b mb-2"></div>
        </div>
     
        <p class="text-lg text-center">{{$post->message}}</p>
        <small>{{date('d M Y', strtotime($post->created_at))}}</small>
    </div>
</div>
@include('sweetalert::alert')
@endsection
