@extends('layouts.app')

@section('title', 'Login')

@section('logo')
<div class="navbar-start">
    <a href="{{url('/')}}" class="btn btn-ghost normal-case text-xl text-blue-500">RPLWhispers</a>
</div>
@endsection

@section('content')
<div class="bg-gradient-to-r from-purple-500 to-blue-800 h-screen flex items-center justify-center">
    <div class="card w-96 bg-white shadow-xl rounded-md">
        <form action="{{url('login')}}" method="post">
            @csrf
            <div class="card-body">
                <h2 class="text-center font-bold text-xl text-gray-800 mb-6">LOGIN</h2>
                <div class="mb-4">
                    <label for="username" class="block text-gray-800">Username</label>
                    <input type="text" id="username" class="input input-bordered w-full" name="from" />
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-800">Password</label>
                    <input type="password" id="password" class="input input-bordered w-full" name="to" />
                </div>
                <div class="flex items-center justify-between mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox">
                        <span class="ml-2 text-gray-800">Remember me</span>
                    </label>
                    <a href="#" class="text-blue-500 text-sm">Forgot password?</a>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="btn btn-indigo">Login</button>
                </div>
                <div class="mt-4 text-center">
                    <p class="text-gray-800">Don't have an account? <a href="#" class="text-blue-500">Sign up</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
