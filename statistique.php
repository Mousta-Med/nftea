<?php

include("connection.php");
$sql = "SELECT * FROM nft ORDER BY nft_prix";
$min = $conn->query($sql);

$sqll = "SELECT * FROM nft ORDER BY nft_prix DESC";
$max = $conn->query($sqll);

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
                <li><svg class="close-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path
                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="collection.php">Collections</a></li>
                <li><a href="nfts.php">NFTS</a></li>
                <li><a class="place" href="statistique.php">Statistique</a></li>
            </ul>
            <i class="bi bi-list burger-menu"></i>
        </div>
    </header>
    <!-- home -->
    <?php
    $row = mysqli_fetch_assoc($min);
    ?>
    <section>
        <div class="statistique-container">
            <div class="total">
                <h3>Total of nfts <p>
                        <?php echo mysqli_num_rows($min) ?>
                    </p>
                </h3>
            </div>
            <div class="statistique-cards">
                <div class="nft-stat">
                    <div class="nft-stat-info">
                        <h3>
                            <?php
                            if (isset($row['nft_nom'])) {
                                echo $row['nft_nom'];
                            } else {
                                echo "no image found";
                            }
                            ?>
                        </h3>
                        <p>
                            <?php
                            if (isset($row['nft_prix'])) {
                                echo $row['nft_prix'];
                            } else {
                                echo "no image found";
                            }
                            ?>$
                        </p>
                    </div>
                    <img src="./img/<?php echo $row['nft_image']; ?>" alt="">
                    <div class="nft-stat-min">
                        <p>Cheaper</p>
                    </div>
                </div>
                <?php
                $row = mysqli_fetch_assoc($max);
                ?>
                <div class="nft-stat">
                    <div class="nft-stat-info">
                        <h3>
                            <?php
                            if (isset($row['nft_nom'])) {
                                echo $row['nft_nom'];
                            } else {
                                echo "no image found";
                            }
                            ?>
                        </h3>
                        <p>
                            <?php
                            if (isset($row['nft_prix'])) {
                                echo $row['nft_prix'];
                            } else {
                                echo "no image found";
                            }
                            ?>$
                        </p>
                    </div>
                    <img src="./img/<?php echo $row['nft_image']; ?>" alt="">
                    <div class="nft-stat-max">
                        <p>more expensive</p>
                    </div>
                </div>
            </div>
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
    <script src="js/menu.js"></script>
</body>

</html>