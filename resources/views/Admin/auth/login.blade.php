<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        @vite('resources/css/app.css')
    </head>
    <body class="bg-color-primary m-auto py-20 ">
<div class="card">
    <h3 class="text-color-secondary font-bold text-center text-3xl py-10" >LogIn</h3>
    <div class="flex justify-center items-center" id="LogIn">
        
        <form action="{{route('login')}}" method="post">
            @csrf
            @method('POST')
            
        <div class="w-[20rem] mx-auto">
        <div class="mb-4">
                    <label class="block text-color-secondary">Email:</label>
                    <input type="text" name="email" placeholder="Enter your email" class="w-full p-2 border rounded">
                    @error('email')
                    <p class="text-color-blob">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-color-secondary">Password:</label>
                    <input type="password" name="password" class="w-full p-2 border rounded h-30"/>
                    @error('password')
                    <p class="text-color-blob">{{ $message }}</p>
                    @enderror
                    <p class="text-color-secondary text-right pt-2 text-sm"><a href="{{route('password.email')}}">Forgot Password</a></p>
                </div>
                <div>
                <button type="submit" class="btn w-full py-2 px-4 rounded transition duration-200">LogIn</button>
                </div>
                <p class="text-color-secondary text-center pt-5">New Here? <a href="{{route('register')}}" class="underline">Register</a></p>

        </div>
        <div class="text-center">
        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
        </div>
        @endif
        </div>
            </form>
</div>
    </div>
    </body>
</html>