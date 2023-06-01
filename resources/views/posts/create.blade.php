@extends('layouts.app')

@section('title', 'Add Message')

@section('logo')

<div class="navbar-start">
    <a href="{{url('/')}}" class="btn btn-ghost normal-case text-xl font-bold text-blue-500">RPLWhispers</a>
</div>
@endsection
@section('content')

<div class="bg-gradient-to-r from-purple-500 to-blue-800 h-screen">
    <div class="flex justify-center h-screen items-center">
        <div class="card w-96 bg-white shadow-xl">
            <form action="{{url('/')}}" method="post">
                @csrf
                <div class="card-body fel text-blue-500">
                    <h2 class="text-center font-bold text-xl mb-4">Add Message</h2>
                    <div>
                        <small><b>From</b></small>
                        <input type="text" class="input input-bordered w-full max-w-xs" name="from" placeholder="" />
                    </div>
                    <div>
                        <small><b>To</b></small>
                        <input type="text" class="input input-bordered w-full max-w-xs" name="to" placeholder="" />
                    </div>
                    <div>
                        <small><b>Message</b></small>
                        <textarea class="textarea textarea-bordered w-full" placeholder="Enter message" name="message"></textarea>
                    </div>
                    <div class="card-actions justify-end">
                        <button type="submit" class="btn btn-blue text-white">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection