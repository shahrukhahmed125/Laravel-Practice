<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#Id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($product as $product )
                
            
          <tr>
            <th scope="row">{{$product->product_id}}</th>
            <td>{{$product->product_name}}</td>
            <td>{{$product->brand_name}}</td>
            <td>{{$product->product_quantity}}</td>
            <td>
                <a type="button" class="btn btn-danger" href="{{url('/show')}}/{{$product->product_id}}">
                    Delete
                </a>
                <a type="button" class="btn btn-primary" href="{{url('/show/edit')}}/{{$product->product_id}}">
                    edit
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

</html>