<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="bg-gradient-to-l from-sky-500 to-indigo-600 min-h-screen flex items-center justify-center">
        <!-- Login Container -->
        <div class="bg-gray-100 flex rounded-2xl shadow-2xl w-full max-w-md md:max-w-lg p-8">
            <!-- form -->
            <div class="px-8 my-5 text-center w-full">
                <h2 class="font-bold text-2xl text-[#725EEA]">Create Account</h2>

                <form action="{{ route('register.proses') }}" method="POST" class="flex flex-col gap-4 pt-5">
                    @csrf
                    @error('nama')
                        <small>{{ $message }}</small>
                    @enderror
                    <input class="p-2 rounded-xl border" type="text" name="nama" value="{{ old('nama') }}"
                        placeholder="Enter Name">
                    @error('email')
                        <small>{{ $message }}</small>
                    @enderror
                    <input class="p-2 rounded-xl border" type="email" name="email" value="{{ old('email') }}"
                        placeholder="Email Address">
                    @error('password')
                        <small>{{ $message }}</small>
                    @enderror
                    <div class="relative">
                        <input class="w-full p-2 rounded-xl border" type="password" name="password"
                            placeholder="Password">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray"
                            class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                        </svg>
                    </div>
                    @error('alamat')
                        <small>{{ $message }}</small>
                    @enderror
                    <input class="p-2 rounded-xl border" type="text" name="alamat" value="{{ old('alamat') }}""
                        placeholder="Your Address">
                    @error('telepon')
                        <small>{{ $message }}</small>
                    @enderror
                    <input class="p-2 rounded-xl border" type="text" name="telepon" value="{{ old('telepon') }}""
                        placeholder="No. Telepon">
                    <button type="submit"
                        class="bg-[#725EEA] rounded-xl py-2 text-white hover:bg-indigo-400 hover:scale-105 duration-300">
                        Create
                    </button>
                </form>

                <div class="my-6 grid grid-cols-3 items-center text-gray-500">
                    <hr class="border-gray-500">
                    <p class="text-center">OR</p>
                    <hr class="border-gray-500">
                </div>

                <div class="text-xs flex justify-between items-center">
                    <p class="">Already have an account?</p>
                    <a href="{{ route('login') }}">
                        <button
                            class="bg-[#725EEA] rounded-lg text-white hover:bg-indigo-400 hover:scale-105 duration-300 py-2 px-5">
                            Login
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
