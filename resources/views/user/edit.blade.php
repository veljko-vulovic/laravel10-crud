@extends('layouts.app')

@section('content')

<div>
    @if ($errors->any())
    <div class="alert alert-danger text-white">
        <ul class="mt-3">
            @foreach ($errors->all() as $error)
                <li class="mx-auto max-w-2xl px-6 py-2 bg-red-500 rounded-md text-white">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

<div class="flex justify-center items-center sm:flex min-h-screen">
    <div class="max-w-7xl p-6 lg:p-8 text-white">

        <div class="flex items-center">
            <h3 class="text-xl mx-auto">Edit User</h3>
        </div>

        <div class="mt-4">

            <div class="flex flex-col space-3 max-w-2xl">
                <div class="w-full max-w-xs">
                    <form method="POST" action="{{route('user.update', $user)}}"
                        class="shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        @method('PATCH')

                        <div class="mb-4">
                            <label class="block text-white text-sm font-bold mb-2" for="name">
                                Name
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name='name' id="name" type="text" placeholder="Name" value="{{$user->name}}">
                        </div>
                        <div class="mb-4">
                            <label class="block text-white text-sm font-bold mb-2" for="name">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" name="email" type="email" placeholder="Email" value="{{$user->email}}">
                        </div>
                        <div class="mb-6">
                            <label class="block text-white text-sm font-bold mb-2" for="password">
                                Password
                            </label>
                            {{-- border-red-500 --}}
                            {{-- <input
                                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" type="text" name='password' placeholder="******************"> --}}
                            {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
                        </div>
                        <div class="flex items-center justify-between">
                            <button
                                class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                                Edit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
