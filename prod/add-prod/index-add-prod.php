<?php
session_start();
include_once "../../backend/add-prod.php";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap5.1.3/css/bootstrap.min.css">
    <title>Add Product</title>
</head>
<body class="bg-secondary p-2 text-dark bg-opacity-10">
    <div class="container d-flex align-items-center mt-5 bg-light p-5">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" novalidate>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Product Name </label>
              <input type="text" name="nameprod" class="form-control" id="validationCustom01" placeholder="Product Name"  required>
              <div class="valid-feedback">Looks good!</div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Product Price</label>
              <div class="input-group has-validation">
                <input type="text" name="priceprod" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="product price" required>
                <span class="input-group-text" id="inputGroupPrepend">DZ</span>
                <div class="invalid-feedback">Please choose a Product Price.</div>
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustomUsername" class="form-label">Q Stock</label>
              <div class="input-group has-validation">
                <input type="text" name="qtestock" class="form-control" id="validationCustomUsername" placeholder="Q Stock" pattern="[0-9]*"  required>
                <div class="invalid-feedback">Please choose a Q.</div>
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustom03" class="form-label">Mark of the Product</label>
              <input type="text" name="markprod" class="form-control" id="validationCustom03" placeholder="Mark of the Product"  required>
              <div class="invalid-feedback">Please provide a Mark of the Product.</div>
            </div>
            <div class="col-md-4">
              <label for="validationCustom05" class="form-label">Image of the item</label>
              <input type="file" id="image" name="image" class="form-control" id="validationCustom05" required>
              <div class="invalid-feedback">Please provide a image of the item.</div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Description of the item</label>
                <textarea class="form-control" name="descprod" id="validationCustom03" id="exampleFormControlTextarea1" rows="3" placeholder="description of the item" required></textarea>
                <div class="invalid-feedback">Please provide a description of the item.</div>
              </div>
            
            <div class="col-12 d-flex justify-content-end">
              <button class="btn btn-primary" name="Extra" type="submit">Extra Product</button>
            </div>
          </form>
    </div>
    <script src="app.js"></script>
</body>
</html>