<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            color: #000;
        }

        a{
            text-decoration: none;
            color: #000;
        }

        .navA{
            display: flex;

        }
        .mainHeading{
            margin-right: 18px;
            margin-bottom: 35px;

        }
        button {
            padding: 5px;
            margin: 2px;
            width: 230px;
            background-color: black;
            color: white;
        }
        .formA{

        }

    </style>
</head>
<body>
    <nav class="navA">
        <div class="mainHeading">
            <a href="{{ route('product.show') }}">Products</a>
        </div>

    </nav>


        <form class="formA" action="{{ route('product.edit', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <label for="">Product Title</label><br>
                <input type="text" name="title" id="" value="{{ $data->title }}">
            </div>
            <div class="">
                <label for="">Product Description</label><br>
                <textarea name="description" id="" cols="30" rows="10">{{ $data->description }}</textarea>

            </div>
            <div class="">

                <input type="file" name="image" id=""><br>
                <img src="{{ asset($data->image) }}" alt="" width="70" height="70"></td>
            </div>
            <div class="">
                 <button type="submit">Update Product</button>
            </div>
        </form>

</body>
</html>
