@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4">
        <div class="max-w-md w-full bg-white p-8 rounded-lg shadow">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4">{{ __('Reset Password') }}</h2>

            @if (session('status'))
                <div class="mb-4 text-sm text-green-600">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">{{ __('Send Password Reset Link') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
