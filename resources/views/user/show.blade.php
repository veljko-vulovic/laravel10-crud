@extends('layouts.app')

@section('content')

<div class="flex justify-center items-center sm:flex min-h-screen">
    <div class="max-w-7xl p-6 lg:p-8 text-white">

        <div class="flex items-center justify-between ">
            <h3>User</h3>
        </div>

        <div class="mt-4">

        <div class="flex flex-col space-3">
            <span>Name: {{$user->name}}</span>
            <span> E-mail: {{$user->email}}</span>
        </div>

        </div>
    </div>
</div>
@endsection
