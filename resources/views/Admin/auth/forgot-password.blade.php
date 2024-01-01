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
    <h3 class="text-color-secondary font-bold text-center text-3xl pt-10" >Forgot Password?</h3>
    <h5 class="text-center text-color-secondary py-5">Enter your email address and we will send you the recovery link.</h5>
    <div class="flex justify-center items-center" id="forgot-password">
        
        <form action="{{route('password.email')}}" method="post">
            @csrf
            @method('POST')
            
        <div class="w-[20rem] mx-auto">
        <div class="mb-4">
                    <label class="block text-color-secondary py-3">Email:</label>
                    <input type="text" name="email" placeholder="Enter your email" class="w-full p-2 border rounded">
                    @error('email')
                    <p class="text-color-blob">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                <button type="submit" class="btn w-full py-2 px-4 rounded transition duration-200">Send</button>
                </div>
        </div>
        @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
        @endif
        </form>
</div>
    </div>
    </body>
</html>