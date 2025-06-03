@extends('layout')

@section('content')
    <h2 class="font-semibold text-xl text-red-600 leading-tight">Delete Account</h2>

    <div class="py-12 max-w-xl mx-auto">
        <p class="mb-6 text-gray-700">Are you sure you want to delete your account? This action cannot be undone.</p>

        <form method="POST" action="{{ route('account.delete') }}">
            @csrf
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Yes, Delete My Account</button>
            <a href="{{ route('account.edit') }}" class="ml-4 text-gray-700 underline">Cancel</a>
        </form>
    </div>
@endsection
