<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <style>
        table,tr,td{
            border: 1px solid black;
            border-collapse: collapse;
        
        }
        tr,td{
            background: skyblue;
            text-align: center;
            
        }
    </style>
</head>
<body>
 <x-app-layout>

 </x-app-layout> 
 <center>
 <div>
    <table style="width:80%">
        <tr>
            <th>Post Description</th>
            <th>Image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    @foreach ($post as $post )
    
   
        <tr>
            <td>{{ $post->description}}</td>
            <td>
                <img height="400px" width="400px" src="post/{{ $post->image}}" alt="">
            </td>
            <td ><a onclick="return confirm('Are you sure you want to update the post?');" href="{{ url('update_post', $post->id) }}" class="btn btn-warning">Update</a></td>
            <td><a onclick="return confirm('Are you sure you want to delete the post?');" href="{{ url('delete_post', $post->id) }}" class="btn btn-danger">Delete</a></td>
        </tr>
 @endforeach
    </table>
 </div>
</center>
</body>
</html>