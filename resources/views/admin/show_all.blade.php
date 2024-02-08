<!DOCTYPE html>
<html>
    <head>
        <title>show all products</title>
        <style>
        body {
            font-family: Arial, sans-serif;
        }
        a{
            text-decoration: none;
        }
        .back{
            background-color: blue;
            color: black;
            width: 60px;
            height: 30px;
            border: none;
        }
        .back:hover{
            background-color: white;
        }
        h2{
            text-align: center;
            color: cornflowerblue;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .edit{
             background-color: green;
             width: 100px;
             height: 50px;
             border: none;
             margin: 10px 5px;
             
             
        }
        .delete{
            background-color: orange;
            width: 100px;
            height: 50px;
            border: none;
            margin: 10px 5px;
            
        }
        
        
    </style>
</head>
<body>

<button class="back"><a href="{{route('index')}}">Back</a></button>
<h2>Product Table</h2>

<table>
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
        <tr>
           <td>{{$product -> id}}</td>
           <td>{{$product -> name}}</td>
           <td>{{$product -> price}}</td>
           <td>{{$product -> quantity}}</td>
           <td><button class="edit"><a href="{{route('update',$product->id)}}">Edit</a></button>
           <button class="delete"><a href="{{route('destroy',$product->id)}}">Delete</a></button></td>
        </tr>
      @endforeach
    </tbody>
</table>
</body>
    
</html>