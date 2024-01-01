<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')

</head>
<body class="bg-color-primary text-color-white">
    <header class="flex flex-cols gap-10">
        <div class="text-xl w-40 h-screen bg-color-white text-color-primary">
        <nav>
         <h2 class="px-4 py-10 hover:underline cursor-pointer font-bold"><a href="{{route('admin.dashboard')}}">Dashboard</a></h2>
         <ul class="py-4">
        <li class="px-4 py-4 hover:underline cursor-pointer"><a href="{{route('admin.ads.index')}}">Ads</a></li>
        <li class="px-4 py-4 hover:underline cursor-pointer"><a href="{{route('categories.index')}}">Categories</a></li>
        <li class="px-4 py-4 hover:underline cursor-pointer"><a href="{{route('admin.feedback.index')}}">Feedbacks</a></li>
        </ul>
        </nav>
        </div>
        <div>
        <h2 class="py-10 px-80 text-color-white text-4xl">Welcome to Biblio.</h2>
        <!-- <div class="text-xl underline text-color-white rounded mx-auto">Add hero image</div>
        <form>
        <div class=" py-2 text-lg">Image:</div>
        <div class="py-5"><input type="file" placeholder="Upload an image"></div>
        </form> -->
        <div>
</header>
</body>
</html>
