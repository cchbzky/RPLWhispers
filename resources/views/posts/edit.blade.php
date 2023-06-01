@extends('layouts.app')

@section('title', 'Edit')

@section('logo')
<div class="navbar-start">
    <a href="{{url('/')}}" class="btn btn-ghost normal-case text-xl">RPLWhispers</a>
</div>
@endsection

@section('content')
<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>

<div class="bg-gradient-to-r from-purple-500 to-blue-800 h-screen">
    <div class="flex justify-center h-screen items-center">
        <div class="card w-96 bg-base-100 shadow-xl fsm:m-5">
            <form action="{{url("posts/$post->id")}}" method="post">
                @csrf
                @method('patch')
                <div class="card-body fel">
                    <h2 class="text-center font-bold text-xl text-custum-text">Edit</h2>
                    <div>
                        <small><i>From</i></small>
                        <input type="text" placeholder="" class="input input-bordered w-full max-w-xs"
                            name="from" value="{{$post->from}}" readonly />
                    </div>
                    <div>
                        <small><i>To</i></small>
                        <input type="text" placeholder="" class="input input-bordered w-full max-w-xs"
                            name="to" value="{{$post->to}}" readonly />
                    </div>
                    <div>
                        <small><i>Pesan</i></small>
                        <textarea class="textarea textarea-bordered w-full"
                            placeholder="" name="message">{{$post->message}}</textarea>
                    </div>
                    <div class="card-actions justify-end">
                        <button type="submit" class="btn btn-accent">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
