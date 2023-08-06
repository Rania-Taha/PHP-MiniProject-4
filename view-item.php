<?php 
session_start() ?>
<!doctype html>

<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
   <link rel="stylesheet" href="view-item.css">
</head>
  <body >

      <?php
      include 'navbar.php';
?> 
<br>
<br>


<div class="container mt-4">
    <div class="row card-container">
        <?php
        // Check if the session array 'products' exists
        if (isset($_SESSION['products'])) {
            foreach ($_SESSION['products'] as $productItem) {
        ?> 
                 <div class="col-sm-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" style="width:100%; height:250px" src="<?php echo $productItem['img']; ?>" alt="product image">
                        <div class="card-body " >
                            <h4 class="card-title text-center" > <?php echo $productItem['name']; ?></h4>
                            <p class="card-text">Description :<?php echo $productItem['description']; ?></p>
                            <p class="card-text">Price : <?php echo $productItem['price']; ?></p>
                        </div>
                    </div>
                </div> 

      

        <?php
            }
        }
        else {
            // Display a message when there are no products
            echo '<div class="alert alert-info">No products available.</div>';
        }
        ?>
    </div>
</div>


<br>
<br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  
  </body>
  <?php
  include 'footer.php';
?> 
 
</html>