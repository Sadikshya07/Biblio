<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    @vite('resources/css/app.css')
</head>
<body class="bg-color-primary text-color-white">
<a href="{{route('admin.dashboard')}}"><i class="fa-solid fa-arrow-left fa-xl pt-3" style="color: fffff;"></i></a>
    <h3 class="text-center text-3xl py-10">Categories</h3>
    <button class="w-10 h-8 text-color-white border-2 border-neutral-50"><a href="{{route('categories.create')}}">ADD</a></button>
        </br></br>
        <table class="m-auto w-full border-2 border-color-white">
            <thead>
                <th>SN</th>
            <th>Category</th>
            <th>SubCategory</th>
            <th>Remarks</th>
            </thead>
            <tbody>
            @foreach($categories as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->Category}} </td>
            <td>{{$item->Subcategory}}</td>
            <td><a href="{{route('categories.edit', $item->id)}}" class="text-color-blob">Edit</a></td>
            <td>
            <form method="post"action="{{route('categories.destroy', $item->id)}}" onsubmit="return confirm('Are you sure you want to delete this?');">
                        @csrf
                        @method('DELETE')
                        <button class="text-color-secondary">Delete</button>
            </form>
            </td>
            </tr>
            @endforeach
            </tbody>
        </table>
</body>
</html>
