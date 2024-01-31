@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto p-6 lg:p-8 text-white">

    <div class="flex items-center justify-between">
        <h3 class="text-2xl">Users</h3>
    </div>

    <div class="mt-4">
        <ul>
            @foreach ($users as $user)
            <li class="px-6 py-4">
                <div class="flex items-center justify-between">
                    <a href="{{route('user.show', $user)}}">
                        {{ $user->name}}
                    </a>

                    <div>
                        <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <a class="border bg-yellow-500 rounded-md px-4 py-2" href="{{route('user.edit', $user)}}">
                                Edit</a>

                            <button type="submit"
                                class="border inline-flex bg-red-500 rounded-md px-4 py-2">Delete</button>
                        </form>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
