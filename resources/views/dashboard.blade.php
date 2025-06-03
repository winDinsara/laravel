@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 shadow-md" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif


@extends('layout')

@section('content')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Welcome, {{ Auth::user()->name }}!
    </h2>

    <div class="py-12 max-w-3xl mx-auto text-center">
        <h1 class="text-3xl font-bold mb-4">Hello, {{ Auth::user()->name }} 👋</h1>
        <p class="mb-6">You have successfully logged in to your Laravel application.</p>
    </div>

    {{-- SweetAlert2 --}}
    @if(session('login_success') || session('register_success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session("login_success") ?? session("register_success") }}',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
@endsection
