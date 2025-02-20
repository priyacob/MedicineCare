<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #dfeffc; /* Softer light blue background */
        }

        .card {
            background-color: white;
            border-radius: 10px;
        }

        .btn-custom {
            background-color: #6c757d; /* Subtle gray */
            color: white;
            border: none;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #0dcaf0; /* Info color on hover */
            color: white;
        }
    </style>
</head>
<body>
<div class="container-fluid my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="card shadow">
            <div class="card-header text-center bg-info-subtle">
            <h2>Update Product</h2>
                </div>
                <div class="card-body">  
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="productID" class="form-label">Product ID</label>
                                <input type="text" class="form-control" id="productID" name="productID" readonly>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="productImage" class="form-label">Product Image</label>
                                <input type="file" class="form-control" id="productImage" name="productImage" accept="image/*" onchange="previewImage(event)">
                                <img id="imagePreview" src="#" alt="Product Image" class="img-thumbnail mt-2" style="display:none; max-width: 150px;">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="productName" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="productName" name="productName" required>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" id="category" name="category">
                                    <option value="electronics">Electronics</option>
                                    <option value="clothing">Clothing</option>
                                    <option value="home">Home</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" required>
                            </div>

                            <div class="text-start mt-3">
                                <button type="submit" class="btn btn-custom btn-sm">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function(){
            const img = document.getElementById("imagePreview");
            img.src = reader.result;
            img.style.display = "block";
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
