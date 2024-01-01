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
    <h3 class="text-color-secondary font-bold text-center text-3xl py-10" >Reset Password</h3>
    <div class="flex justify-center items-center" id="reset-password">
        
        <form action="{{route('password.update')}}" method="post">
            @csrf
            @method('POST')
            
        <div class="w-[20rem] mx-auto">
                <div>
                    <label class="block text-color-secondary">Email</label>
                    <input type="text" name="email" placeholder="Enter your email." class="w-full p-2 border rounded">
                    @error('email')
                    <p class="text-color-blob">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-color-secondary">New-Password:</label>
                    <input type="password" name="password" class="w-full p-2 border rounded h-30"/>
                    @error('password')
                    <p class="text-color-blob">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-color-secondary">Confirm-Password:</label>
                    <input type="password" name="password_confirmation" class="w-full p-2 border rounded h-30"/>
                    @error('password_confirmation')
                    <p class="text-color-blob">{{ $message }}</p>           
                    @enderror
                </div>
                    <input type="hidden" name="token" value="{{request()->route('token')}}" />
                    @error('password_confirmation')
                    <p class="text-color-blob">{{ $message }}</p>           
                    @enderror
                </div>
                <div>
                <button type="submit" class="btn w-full py-2 px-4 rounded transition duration-200">Reset</button>
                </div>
        </div>
            </form>
</div>
    </div>
    </body>
</html>