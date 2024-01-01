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
    <a href="{{route('categories.index')}}"><i class="fa-solid fa-arrow-left fa-xl px-4" style="color: #ffffff;"></i></a>
<div class="card">
    <div class="text-color-white">
    @if(session('message'))
        <h5>{{session('message')}}</h5>
    @endif
    </div>
    <h3 class="text-color-white font-bold text-center text-3xl py-10" >Update Categories</h3>
    <div class="flex justify-center items-center" id="postAd">
        <form action="{{route('categories.update', $categories->id)}}" method="post" onsubmit="return confirm('Are you sure you want to update this ad?');">
            @csrf
            @method('PUT')
            
        <div class="w-[20rem] mx-auto">
        <div class="mb-4">
                    <label class="block text-color-white">Category:</label>
                    <input type="text" name="Category" value='{{ $categories->Category }}' placeholder="Enter a category" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label class="block text-color-white">SubCategory:</label>
                    <input type="text" name="Subcategory" value='{{ $categories->Subcategory }}' placeholder="Enter a SubCategory" class="w-full p-2 border rounded">
                </div>
                <div>
                <button type="submit" class="bg-color-white text-color-primary w-full py-2 px-4 rounded hover:bg-color-blob-600 transition duration-200">Submit</button>
                </div>
        </div>
            </form>
</div>
    </div>
    </body>
</html>
