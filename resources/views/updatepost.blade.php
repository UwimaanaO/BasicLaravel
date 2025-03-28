<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
</head>

<body>
    <x-app-layout>

    </x-app-layout>
    <div style="padding-left:40%; padding-top: 10%;">
        <form action="{{ url('confirm_update',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Post Description</label>
                <input type="text" name="description" value="{{ $data->description}}">
            </div> <br>
            <div>
                <label for="">Previous Image</label>
                <img src="/post/{{ $data->image}}" height="400px" width="400px" alt="">
            </div> <br>
            <div>
                <label for="">Change Image</label>
                <input type="file" name="image">
            </div><br>
            <div>
                <input type="submit" value="Update Post" style="background:greenyellow; cursor: pointer; padding:10px; border-radius:10px;">
            </div>
        </form>
    </div>
</body>

</html>