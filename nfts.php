<?php
include "connection.php";

if (!isset($_GET['listl'])) {
    $result = mysqli_query($conn, "SELECT * FROM nft");
}
if (isset($_POST['listl'])) {
    $result = mysqli_query($conn, "SELECT * FROM nft ORDER BY nft_prix");
}
if (isset($_POST['listh'])) {
    $result = mysqli_query($conn, "SELECT * FROM nft ORDER BY nft_prix DESC");
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
                <li><svg class="close-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path
                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="collection.php">Collections</a></li>
                <li><a class="place" href="nfts.php">NFTS</a></li>
                <li><a href="statistique.php">Statistique</a></li>
            </ul>
            <i class="bi bi-list burger-menu"></i>
        </div>
    </header>
    <!-- container -->
    <section>
        <div class="meta"><img src="img/cyber.png"></div>
        <h1 class="title">NFTS</h1>
        <form class="list-nfts" method="post">
            <input type="submit" class="listnft" name="listl" value="List nft low to high">
            <input type="submit" class="listnft" name="listh" value="List nft high to low">
        </form>

        <div class="grid-v1">

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="card">
                <div class="nf"><img src="./img/<?php echo $row['nft_image']; ?>" alt=""> </div>
                <div class="nft-info">
                    <h3>
                        <?php echo $row['nft_nom'] ?>
                    </h3>
                    <h3>
                        <?php echo $row['nft_prix'] ?>$
                    </h3>
                </div>
                <div class="nft_description">
                    <p>
                        <?php echo $row['nft_description'] ?>
                    </p>
                </div>
                <div class="edit">
                    <svg class="nfticon" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512"
                        height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512"
                        xml:space="preserve" class="">
                        <path
                            d="M28,28v8a1,1,0,0,1-1,1,1,1,0,0,1-.86-.5,0,0,0,0,0,0,0L22,31v5a1,1,0,0,1-2,0V28a1,1,0,0,1,1-1,1,1,0,0,1,.86.5,0,0,0,0,0,0,0L26,33V28a1,1,0,0,1,2,0Z"
                            fill="#ffffff" data-original="#000000" class=""></path>
                        <rect x="55" y="50" width="4" height="4" fill="#ffffff" data-original="#000000" class="">
                        </rect>
                        <path
                            d="M56,33a4,4,0,0,0-3.86,3H48V28h4.14a4,4,0,1,0,0-2H48v-.93a5,5,0,0,0-2.56-4.34L42,18.83V14.41l2-2A4.05,4.05,0,1,0,42.57,11l-2.28,2.27A1,1,0,0,0,40,14v3.72l-5.61-3.11a5,5,0,0,0-1.39-.5V9.86a4,4,0,1,0-2,0v4.25a4.76,4.76,0,0,0-1.39.51L24,17.72V14a1,1,0,0,0-.29-.71L21.43,11A4.05,4.05,0,1,0,20,12.43l2,2v4.42l-2.86,1.59a1,1,0,1,0,1,1.74l10.47-5.79a3,3,0,0,1,2.86,0l11,6.11A3,3,0,0,1,46,25.07V38.93a3,3,0,0,1-1.52,2.59l-11,6.11a3,3,0,0,1-2.86,0l-11-6.11A3,3,0,0,1,18,38.93V25.07a1.59,1.59,0,0,1,.05-.45,1,1,0,0,0-2-.44,4.19,4.19,0,0,0-.09.89V26H11.86a4,4,0,1,0,0,2H16v8H11.86a4,4,0,1,0,0,2H16v.93a5,5,0,0,0,2.56,4.34L22,45.17v4.42l-2,2A4.05,4.05,0,1,0,21.43,53l2.28-2.27A1,1,0,0,0,24,50V46.28l5.61,3.11a5,5,0,0,0,1.39.5v4.25a4,4,0,1,0,2,0V49.89a4.76,4.76,0,0,0,1.39-.51L40,46.28V50a1,1,0,0,0,.29.71L42.57,53A4.05,4.05,0,1,0,44,51.57l-2-2V45.17l3.45-1.91A5,5,0,0,0,48,38.93V38h4.14A4,4,0,1,0,56,33Zm0-8a2,2,0,1,1-2,2A2,2,0,0,1,56,25ZM46,7a2,2,0,1,1-1.41,3.42h0A2,2,0,0,1,46,7ZM16,9a2,2,0,1,1,3.42,1.41h0A2,2,0,0,1,16,9ZM30,6a2,2,0,1,1,2,2A2,2,0,0,1,30,6ZM8,29a2,2,0,1,1,2-2A2,2,0,0,1,8,29ZM8,39a2,2,0,1,1,2-2A2,2,0,0,1,8,39ZM18,57a2,2,0,1,1,1.41-3.42h0A2,2,0,0,1,18,57Zm16,1a2,2,0,1,1-2-2A2,2,0,0,1,34,58Zm14-3a2,2,0,1,1-3.42-1.41h0A2,2,0,0,1,48,55Zm8-16a2,2,0,1,1,2-2A2,2,0,0,1,56,39Z"
                            fill="#ffffff" data-original="#000000" class=""></path>
                    </svg>
                </div>
            </div>
            <?php
            }
            ?>
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