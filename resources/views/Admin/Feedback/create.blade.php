<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    @vite('resources/css/app.css')
    </head>
    <body class="bg-color-primary m-auto py-20 ">
    <a href="{{route('home')}}"><i class="fa-solid fa-arrow-left fa-xl px-3" style="color: #ec7709;"></i></a>
<div class="card">
<div class="text-color-blob">
    @if(session('message'))
        <h5>{{session('message')}}</h5>
    @endif
    </div>
    <h3 class="text-color-secondary font-bold text-center text-3xl py-10" >Give Your Feedback</h3>
    <div class="flex justify-center items-center" id="Feedback">
        
        <form action="/submit/Feedback" method="post">
            @csrf
            @method('POST')
            
        <div class="w-[20rem] mx-auto">
        <div class="mb-4">
                    <label class="block text-color-secondary">Name:</label>
                    <input type="text" name="Name" placeholder="Enter your name" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-color-secondary">Feedback:</label>
                    <textarea name="Feedback" placeholder="Give your Feedback" class="w-full p-2 border rounded h-30"></textarea>
                </div>
                <div>
                <button type="submit" class="btn w-full py-2 px-4 rounded hover:bg-color-blob-600 transition duration-200">Submit</button>
                </div>
        </div>
            </form>
</div>
    </div>
    </body>
</html>