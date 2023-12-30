@extends('layouts.main')

@section('container')

    <section class="mx-auto">
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class=" flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
                <div class="flex flex-col justify-center p-8 md:p-14">
                    <span class="mb-3 text-4xl font-bold">registration</span>
                    <span class="font-light text-gray-400 mb-8">
                    please register with your email!
                    </span>
  
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('registrasiError'))
                        <div class="bg-red-500 text-white rounded-md text-center py-2" role="alert">
                            {{ session('registrasiError') }} <span> </span><i class="fa-solid fa-face-sad-tear"
                                style="color: #ffffff;"></i>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <main class="form-signin w-100 m-auto mt-1">
                        <form action="/register" method="post">
                            @csrf
                            <div class="form-floating">
                                <span class="mb-2 text-md">Name</span>
                                <input type="text" name="name"
                                    class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500 form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Name" autofocus required
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
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
                                type="submit">Register</button>
                        </form>
                        <small class="d-block text-center mt-3 mx-2">already have an account?<a class="mx-2 font-semibold"
                                href="/login">Login Now!</a></small>
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