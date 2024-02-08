<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
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
        text-align: center;
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
    </style>
</head>
<body>

   <h1>Update Product</h1><br><br>

  <form action="{{route('edit',$product->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" id="id" value="{{$product->id}}">
    <label for="productName">Product Name:</label>
    <input type="text" id="productName" name="name" value="{{$product->name}}" required>

    <label for="productPrice">Price:</label>
    <input type="text" id="productPrice" name="price" value="{{$product->price}}" required>

    <label for="productQuantity">Quantity:</label>
    <input type="text" id="productQuantity" name="quantity"  value="{{$product->quantity}}" required>

    <input type="submit" >
</form>

</body>
</html>
