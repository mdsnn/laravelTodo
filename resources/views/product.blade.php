
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        table{
            border: 1px solid;
            padding: 5px;
            margin: 5px;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .tableHeader{
            background-color: black;
            color: #fff;

        }
        #tableHead{
            padding: 8px;
        }
        .navA{
            display: flex;

        }
        .mainHeading{
            margin-right: 18px;

        }
        .titltA{
            font: bold;
        }

    </style>
</head>
<body>
    <nav class="navA">
        <div class="mainHeading">
            <a href="{{ route('product.store') }}">Products</a>
        </div>
        <div class="">
            <a href="{{ route('product.index') }}">Add product</a>
        </div>
    </nav>
<br>
<table>
    <tr class="tableHeader">
        <th id="tableHead">Title</th>
        <th>Description</th>
        <th>Image</th>
        <th></th>
        <th></th>
    </tr>
    @foreach ($data as $data)
    <tr>
        <td class="titleA"> <b>{{ $data ->title }}</b></td>
        <td>{{  $data ->description }}</td>
        <td><img src="{{ asset($data ->image) }}" alt="" width="150" height="150"></td>
        <td><a style="background-color: blue; padding:5px" href="{{ route('product.update', $data ->id) }}">edit</a></td>
        <td><a style="background-color: red; padding:5px"  onclick="return confirm('Are you sure you want to delete this');" href="{{ route('product.delete', $data ->id) }}">delete</a></td>

    </tr>
    @endforeach

</table>

</body>
</html>
