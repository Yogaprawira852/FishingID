@extends('layouts.main')

@section('container')
    <section class="mx-auto">
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class=" flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
                <div class="flex flex-col justify-center p-8 md:p-14">
                    <span class="mb-3 text-4xl font-bold">Welcome </span>
                    <span class="font-light text-gray-400 mb-8">
                        Please enter your login information!
                    </span>
                    @if (isset($_GET['message']) && $_GET['message'] === 'login')
                        <div class="bg-red-100 border-l-4 border-red-500 p-4 mb-4">
                            <p class="text-black-800">You are detected not logged in,</p>
                            <p class="text-black-600">Please log in!</p>
                        </div>
                    @endif
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('message'))
                        <div class="bg-red-100 border-l-4 border-red-500 p-4 mb-4">
                            <p class="text-black-800">{{ session('message') }}</p>
                        </div>
                    @endif

                    @if (session()->has('loginError'))
                        <div class="bg-red-500 text-white rounded-md text-center py-2" role="alert">
                            {{ session('loginError') }} <span> </span><i class="fa-solid fa-face-sad-tear"
                                style="color: #ffffff;"></i>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <main class="form-signin w-100 m-auto mt-1">
                        <form action="/login" method="post">
                            @csrf
                            <div class="py-4">
                                <span class="mb-2 text-md">Email</span>
                                <input type="email" name="email"
                                    class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500 form-control @error('email') is-invalid @enderror"
                                    id="email" placeholder="name@example.com" autofocus required
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <span class="mb-2 text-md">Password</span>
                                <input type="password" name="password"
                                    class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500 form-control"
                                    id="password" placeholder="Password" required>
                            </div>
                            <button
                                class="w-full bg-orange-400 text-white p-2 my-5 rounded-lg mb-6 hover:bg-orange-300  hover:border hover:border-gray-300"
                                type="submit">Login</button>
                        </form>
                        <small class="d-block text-center mt-3 mx-2">Not registered?<a class="mx-2 font-semibold"
                                href="/register">Register Now!</a></small>
                    </main>

                </div>
                <div class="">
                    <img src="img/reel.jpg" alt="img"
                        class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover" />
                    <div
                        class="absolute hidden bottom-10 right-6 p-6 bg-white bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block">
                    </div>
                </div>
            </div>
        </div>
    @endsection