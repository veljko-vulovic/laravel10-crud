@extends('layouts.app')

@section('content')

<div class="flex justify-center items-center sm:flex min-h-screen">
    <div class="max-w-7xl p-6 lg:p-8 text-white">

        <div class="flex items-center">
            <h3 class="text-xl mx-auto">Create New User</h3>
        </div>

        <div class="mt-4">

            <div class="flex flex-col space-3 max-w-2xl">
                <div class="w-full max-w-xs">
                    <form method="POST" action="{{route('user.store')}}" class="shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-white text-sm font-bold mb-2" for="name">
                                Name
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name='name' id="name" type="text" placeholder="Name">
                        </div>
                        <div class="mb-4">
                            <label class="block text-white text-sm font-bold mb-2" for="name">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" name="email" type="email" placeholder="Email">
                        </div>
                        <div class="mb-6">
                            <label class="block text-white text-sm font-bold mb-2" for="password">
                                Password
                            </label>
                            <input
                                class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" type="text" name='password' placeholder="******************">
                            {{-- <p class="text-red-500 text-xs italic">Please choose a password.</p> --}}
                        </div>
                        <div class="flex items-center justify-between">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
