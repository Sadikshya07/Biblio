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
    <body class="bg-color-primary ">
    <a href="{{route('home')}}"><i class="fa-solid fa-arrow-left fa-xl px-3" style="color: #ec7709;"></i></a>
<div class="card">
    <div class="text-color-blob text-xl text-center">
    @if(session('message'))
        <h5>{{session('message')}}</h5>
    @endif
    </div>
    <h3 class="text-color-secondary font-bold text-center text-2xl pt-5" >Post an Ad</h3>
    <div class="flex justify-center items-center  text-color-white" id="postAd">
        
        <form action="{{route('submit')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
            <label class=" text-color-secondary ">Image:</label>
            <input type="file" name="Image" placeholder="Upload an image" class="w-full p-2 border rounded">
            </div>
        @error('Image')
        <p class="text-color-blob">{{ $message }}</p>
        @enderror
    </div>
        <div class="w-[20rem] mx-auto">
        <div class="mb-4">
                    <label class="block text-color-secondary">BookName:</label>
                    <input type="text" name="BookName" placeholder="Book Name" class="w-full p-2 border rounded">
                    @error('BookName')
        <p class="text-color-blob">{{ $message }}</p>
        @enderror

                </div>
                <div class="mb-4">
                    <label class="block text-color-secondary">Seller's Name:</label>
                    <input type="text" name="SellerName" placeholder="SellerName" class="w-full p-2 border rounded">
                    @error('SellerName')
        <p class="text-color-blob">{{ $message }}</p>
        @enderror

                </div>
                <div class="mb-4">
                    <label class="block text-color-secondary">ContactNo:</label>
                    <input type="digits" name="ContactNo" placeholder="Phone number" class="w-full p-2 border rounded">
                    @error('ContactNo')
        <p class="text-color-blob">{{ $message }}</p>
        @enderror

                </div>

            <div class="grid grid-cols-2">
                <div class="mb-4">
                    <label class="block text-color-secondary">Price:</label>
                    <input type="digits" name="Price" placeholder="Price of the book." class="w-40 border rounded">
                    @error('Price')
        <p class="text-color-blob">{{ $message }}</p>
        @enderror
                </div>
                <div class="mb-4 px-10">
                    <label class="block text-color-secondary">Condition:</label>
                    <select name="Condition" id="condition" class=" h-3/5 w-24 border rounded">
                        <option>New</option>
                        <option>Good</option>
                        <option>Fair</option>
                    </select>
                    @error('Condition')
        <p class="text-color-blob">{{ $message }}</p>
        @enderror
                </div>
            </div>

                <div class="mb-4">
                    <label class="block text-color-secondary">Category:</label>
                    <select name="Category" id="categories" placeholder="Choose a category." class="w-full p-2 border rounded">
                       @foreach( $categories as $item )
                    <option >{{ $item->Category }}</option>
                       @endforeach
                    </select>
        @error('Category')
        <p class="text-color-blob">{{ $message }}</p>
        @enderror
                </div>
                <button type="submit" class="btn w-full py-2 px-4 rounded hover:bg-color-blob-600 transition duration-200">Submit</button>
                </div>
        </div>
            </form>
</div>
    </div>
    </body>
</html>