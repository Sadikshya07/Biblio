<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    @vite('resources/css/app.css')
</head>
<body class="bg-color-primary text-color-white">
<a href="{{route('admin.dashboard')}}"><i class="fa-solid fa-arrow-left fa-xl pt-3" style="color: fffff;"></i></a>
    <h3 class="text-center text-color-white text-3xl py-10">Feedbacks</h3>
        <table class="m-auto w-full border-2 border-color-white ">
        <thead>
            <th>SN</th>
            <th>Name</th>
            <th>Feedback</th>
            <th>Delete</th>
            </thead>
            <tbody>
            @foreach($feedback as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->Name}} </td>
            <td>{{$item->Feedback}}</td>
            <td>
            <form method="post"action="{{route('feedback.destroy', ['item' => $item->id])}}" onsubmit="return confirm('Are you sure you want to delete this?');">
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