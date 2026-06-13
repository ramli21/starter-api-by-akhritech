@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4">
        <div class="max-w-md w-full bg-white p-8 rounded-lg shadow">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4">{{ __('Confirm Password') }}</h2>

            <p class="mb-4 text-sm text-gray-600">{{ __('Please confirm your password before continuing.') }}</p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">{{ __('Confirm Password') }}</button>
                </div>

                @if (Route::has('password.request'))
                    <div class="mt-4 text-center">
                        <a class="text-sm text-blue-600 hover:underline"
                            href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
