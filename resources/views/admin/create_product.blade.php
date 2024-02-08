<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
      h1{
          margin-right: 20px;
      }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a{
            text-decoration: none;
            color: #f4f4f4;
        }
        button{
            background-color: green;
            border: none;
            width: 100px;
            padding: 10px 10px;
            float: right;
        }

    </style>
</head>
<body>

<h1>Create New Product</h1>


<form action="{{route('store')}}" method="POST">
    @csrf
    @method('POST')

    <button><a href="{{route('index')}}">Back</a></button><br><br><br>
    <label for="productName">Product Name:</label>
    <input type="text"  id="productName" name="productName"  value="{{old('productName')}}">
    

    <label for="productPrice">Price:</label>
    <input type="text"  id="productPrice" name="productPrice" value="{{old('productPrice')}}" >
    

    <label for="productQuantity">Quantity:</label>
    <input type="text"  id="productQuantity" name="productQuantity" value="{{old('productQuantity')}}">

    <input type="submit" >
    
</form>

</body>
</html>
