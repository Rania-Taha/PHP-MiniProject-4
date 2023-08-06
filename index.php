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
<link rel="stylesheet" href="./home.css">
</head>
  <body id='b'>

      <?php
      include 'navbar.php';
?> 


    <div class="bgsection">
    <img src="ban.jpg" class="bg">
    <div class="banner-content padding-large">
        <div class="overlay-content">
            <h1 id="h1">WELCOME TO IN HAUS</h1>
            <p id="paragraph">Where Elegance Meets Comfort! Step into a world of unparalleled luxury <br> and sophistication.  Discover a symphony of styles, from classic<br> to contemporary, to elevate your living spaces.  Each piece is a work of art, <br> created to bring radiance and charm to your home.</p>
            <a href="shop.html" class="btn btn-medium btn-arrow position-relative mt-5">
                <span class="text-uppercase">Shop Now</span>
            </a>
        </div>
    </div>
</div>


    <br><br>

    <!-- form -->
    <div class="container1" id="add" > 
        <h4 id="h4"> ADD PRODUCT</h4> <br> <br>
        <form action="phpHome.php" method="POST">
           
            <div class="row">
                <div class="col-25">
                    <label for="cname">PRODUCT NAME</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" placeholder="Enter Product Name" Required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="details">DESCRIPTION</label>
                </div>
                <div class="col-75">
                    <input type="text" id="description" name="description" placeholder="Add a description for you product" Required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="price">PRICE</label>
                </div>
                <div class="col-75">
                    <input type="text" id="price" name="price" placeholder="Ex: 120JD" Required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="img">PRODUCT IMAGE</label>
                </div>
                <div class="col-75">
                    <input type="text" id="img" name="img"  value="https://www.bludot.com/media/catalog/product/r/i/ri1-lngchr-cl_34front.jpg?optimize=medium&fit=bounds&height=488&width=488&canvas=488:488" >
                </div>

            </div>
            <br>

            <div class="row">
  <div class="col text-center">
    <button type="submit" class="btn btn-medium btn-arrow1 position-relative mt-5" name="submit">ADD TO PRODUCTS</button>
  </div>
</div>
            <!-- <div class="row"> -->
            <!-- <a href="index.php" class="btn btn-medium btn-arrow1 position-relative mt-5"> -->
                <!-- <button type="submit" class="btn btn-medium btn-arrow1 position-relative mt-5" name="submit" >ADD TO PRODUCTS</button> -->
            <!-- </a> -->
                
            <!-- </div> -->
        </form>
        </div>


<!-- table ------------------------------------------------------------------------------------------------>
<div class="mt-4">
  <div class="table-responsive">
    <table class="table table-bordered table-striped custom-table w-100"> 
    <!-- <div class="container mt-4">
  <div class="table-responsive">
    <table class="table custom-table"> -->
      <thead>
        <tr class="text-center">
          <th>PRODUCT NAME</th>
          <th>PRODUCT DESCRIPTION</th>
          <th>PRODUCT PRICE</th>
          <th>PRODUCT IMAGE</th>
        </tr>
      </thead>
    <tbody>
    <?php
    
            // Check if the session array 'product' exists
            if (isset($_SESSION['products'])) {
                foreach ($_SESSION['products'] as $productItem) {
                  
            ?>
                    <tr class="text-center">
                        <td><?php echo $productItem['name']; ?></td>
                        <td><?php echo $productItem['description']; ?></td>
                        <td><?php echo $productItem['price']; ?></td>
                        <td><img class="image-prod" src="<?php  echo $productItem['img']; ?>" alt="product image" style="height: 100px; "></td>
                    </tr>
            <?php
                }
            }
            
            ?>
        </tbody>
    </table>
    
<form action="view-item.php" method="POST">
  <div class="row">
    <div class="col-md-6"> <!-- First column, occupies 6 out of 12 columns (half of the row) -->
      <button type="submit" class="btn btn-medium btn-arrow2 position-relative mt-5" name="submit">VIEW ALL PRODUCTS</button>
    </div>
    <div class="col-md-6"> <!-- Second column, occupies 6 out of 12 columns (half of the row) -->
       <button type="submit" class="btn btn-medium btn-arrow2 position-relative mt-5" name="clear"><a href="destroy.php" class="link-text "> CLEAR ALL PRODUCTS </a></button>
       
    </div>
  </div>
</form>



</div>
  


    <?php
  include 'footer.php';
?> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  
  </body>
  
 
</html>