<?php
include "connection.php";

$sql = "SELECT * FROM collections";
$all_collection = $conn->query($sql);

if(isset($_GET['delete'])){
$id = $_GET['delete'];
mysqli_query($conn, "DELETE FROM collections WHERE collection_id = $id");
header('location:collection.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NFTea</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Fragment+Mono&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Nav bar and Header section-->
  <header>
    <div class="header">
      <div class="title-logo">
        <a href="#" class="logo"><img src="./img/tea-cup-icon.png" width="70px" height="70px" alt=""></a>
        <a href="#" class="second-logo">NFTea</a>
      </div>
      <ul class="nav-bar">
        <li><svg class="close-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
            class="bi bi-x-lg" viewBox="0 0 16 16">
            <path
              d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
          </svg></li>
        <li><a href="index.php">Home</a></li>
        <li><a class="place" href="collection.php">Collections</a></li>
        <li><a href="statistique.php">Statistique</a></li>
      </ul>
      <i class="bi bi-list burger-menu"></i>
    </div>
  </header>
  <!-- Home section -->
  <section>
    <div class="meta"><img src="img/meta.png"></div>
    <h1 class="title" >Collections</h1>
   

    
    <div class="grid">
      
    <?php
  while($row = mysqli_fetch_assoc($all_collection)){
?> 
<div class="card">
        <div class="nf"><img src="./img/<?php echo $row['collection_image']; ?>" alt=""> </div>
        <div class="nft-info">
          <h3><?php echo $row['collection_nom'] ?></h3>
          <h3><?php echo $row['collection_artist'] ?></h3>
        </div>
        <div class="edit">
          <a href="collection.php?delete=<?php echo $row['collection_id']; ?>"><svg class="rem" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
            <path
              d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
          </svg></a>
          <a href="nft.php?show=<?= $row['collection_id'] ?>"><svg class="rem" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
          </svg></a>
          <a href="edite-collection.php?edite=<?= $row['collection_id'] ?>"><svg class="rem" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-pencil" viewBox="0 0 16 16">
            <path
              d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
          </svg></a>
        </div>
</div>
          <?php
  }
  ?>
          
          
   </div>

     

 

    <div class="ajout"><a href="addcollection.php"><button>Add collection</button></a></div>

  </section>

  <!-- footer -->
  <footer>
    <div class="footer">
      <div class="social">
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-twitter"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="copyright">
        <p>Copyright ©2022 All rights reserved | NFTea</p>
      </div>
    </div>
  </footer>
  <script src="js/script.js"></script>
</body>

</html>