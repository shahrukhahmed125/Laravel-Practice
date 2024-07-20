<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

    <div class="container" style="margin-top:20vh">
        <h1 class="display-4">Enter Product</h1>
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Brand Name</label>
                <input type="text" name="brand_name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Quantity</label>
                <input type="number" name="product_quantity" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

</html>
