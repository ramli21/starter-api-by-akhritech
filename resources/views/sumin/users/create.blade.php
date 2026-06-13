@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto py-8 px-4">
        <h1 class="text-2xl font-semibold mb-6">Create User</h1>

        <form method="POST" action="{{ route('sumin.users.store') }}">
            @csrf

            @include('sumin.users._form', ['user' => null])

            <div class="mt-6">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
                <a href="{{ route('sumin.users.index') }}" class="ml-3 text-sm text-gray-700">Cancel</a>
            </div>
        </form>
    </div>
@endsection
