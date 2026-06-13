@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4">
        <div class="max-w-md w-full bg-white p-8 rounded-lg shadow">
            <h2 class="text-2xl font-semibold text-gray-900 mb-4">{{ __('Verify Your Email Address') }}</h2>

            @if (session('resent'))
                <div class="mb-4 text-sm text-green-600">
                    {{ __('A fresh verification link has been sent to your email address.') }}</div>
            @endif

            <p class="text-sm text-gray-600 mb-4">
                {{ __('Before proceeding, please check your email for a verification link.') }}</p>
            <p class="text-sm text-gray-600">{{ __('If you did not receive the email') }},</p>

            <form class="mt-3" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit"
                    class="text-sm text-blue-600 hover:underline">{{ __('click here to request another') }}</button>.
            </form>
        </div>
    </div>
@endsection
