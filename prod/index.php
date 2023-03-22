<?php
include "../backend/conn.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Product</title>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
     <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">TechShop</span> </a>
                <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                      <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> 
                      <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a>
                      <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> 
                      <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> 
                      <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> 
                </div>
            </div> 
            <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div> 

    <!--Container Main start-->
    <div class="height-100 bg-light">
        <div class="d-flex justify-content-between mx-5">
            <h4>Product</h4>
            <a href="add-prod/index-add-prod.php" class="btn btn-primary ">Add Product</a>
        </div>
        <div class="tab mt-5">
            <?php
            $sql = "SELECT * FROM `produit` WHERE 1";
            $result = mysqli_query($conn, $sql);
            
           
            ?>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Q Stock</th>
                    <th scope="col">Mark of the Product</th>
                    <th scope="col">Image of the item</th>
                    <th scope="col">Description of the item</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                         if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                              echo "<td>". $row["id"]."</td>". 
                                   "<td>". $row["nameprod"]."</td>".
                                   "<td>". $row["priceprod"]."</td>".
                                   "<td>". $row["qtetock"]."</td>".
                                   "<td>". $row["makeprod"]."</td>".
                                   "<td>". $row["descprod"]."</td>".
                                   "<td>";?> <img width="50px" src="add-prod/images/<?php echo $row['imgprod'];?>"><?php "</td>".
                                    
                                   "<td>";?>
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-danger">Danger</button>
                                </td></tr>
                    <?php
                            }
                          }
                    ?>
                    
                        
                  
                </tbody>
              </table>
        </div>
        
        
    </div>
  
  
   
    <!--Container Main end-->
    <script src="../../bootstrap5.1.3/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
</body>
</html>