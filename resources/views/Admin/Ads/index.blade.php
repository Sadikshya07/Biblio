<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ads</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    @vite('resources/css/app.css')
    
</head>
<body class="bg-color-primary text-color-white">
<a href="{{route('admin.dashboard')}}"><i class="fa-solid fa-arrow-left fa-lg pt-4" style="color: fffff;"></i></a>
    <h3 class="text-center text-3xl py-10">Ads</h3>
        <table class="mx-auto w-full border-2 border-color-white ">
            <thead>
            <th>ID</th>
            <th>Image</th>
            <th>BookName</th>
            <th>SellerName</th>
            <th>ContactNo</th>
            <th>Price</th>
            <th>Category</th>
            <th>Condition</th>
            <th>Approval</th>
            <th>Delete</th>
            </thead>
            <tbody>
            @foreach($ads as $ad)
            <tr>
            <td>{{$ad->id}}</td>
            <td>{{$ad->Image}} </td>
            <td>{{$ad->BookName}} </td>
            <td>{{$ad->SellerName}}</td>
            <td>{{$ad->ContactNo}}</td>
            <td>{{$ad->Price}}</td>
            <td>{{$ad->Category}}</td>
            <td>{{$ad->Condition}}</td>
            <td>
                <form method="post" action="{{ route('ads.approve', ['ad' => $ad->id]) }}" onsubmit="return confirm('Are you sure you want to approve this ad?');">
                    @csrf
                    @method('PUT')
                    <input type="checkbox" name="Approval" onchange="this.form.submit()" {{ $ad->approval ? 'checked' : '' }} /> Approve
                </form>
            </td>
            <td>
            <form method="post"action="{{route('ads.destroy', ['ad' => $ad->id])}}" onsubmit="return confirm('Are you sure you want to delete this ad?');">
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