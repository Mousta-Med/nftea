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
                <li><a class="place" href="index.php">Home</a></li>
                <li><a href="collection.php">Collections</a></li>
                <li><a href="statistique.php">Statistique</a></li>
            </ul>
            <i class="bi bi-list burger-menu"></i>
        </div>
    </header>
    <!-- Home section -->
    <section>
        <div class="container">
            <div class="explor">
                <div class="explor-cards">
                    <div class="info">
                        <h1>Explore</h1>
                        <p class="h1">Lose yourself in an amazing,<br>evolving NFTS</p>
                        <p>NFTea is NFT gallery. Granting artists the <br> opportunities to showcase their work,
                            facilitating <br> synergies between artists and collectors.</p>
                    </div>
                    <img src="./img/nft.png" alt="">
                </div>

                <div class="explor-cards-v1">
                    <img src="./img/nft2.png" alt="">
                    <div class="info">
                        <h1>Create</h1>
                        <p class="h1">Test the limits of your<br>imagination</p>
                        <p>Create scenes, artworks, challenges and<br>more, using the simple Builder tool, then<br>take
                            part
                            in events to win prizes. For more <br> experienced creators, the SDK provides <br>the tools
                            to
                            fill the world with social <br>games and applications.</p>
                    </div>
                </div>
                <div class="explor-cards">
                    <div class="info">
                        <h1>Share</h1>
                        <p class="h1">Promote your NFT. We have <br> collectors behind<br>searching art</p>
                        <p> Even though non-fungible tokens by definition<br> are singular and unique, there are
                            ways<br>to
                            split up the cost of investing in NFTs.</p>
                    </div>
                    <img src="./img/nft3.png" alt="" width="500px" height="500px">
                </div>
            </div>
            <div class="top-collections">
                <h1>TOP COLLECTIONS</h1>
            </div>
            <div class="top-nfts">
                <div class="nft">
                    <img src="./img/pixel vault.jpg" alt="">
                    <h1>Pixel Vault</h1>
                </div>
                <div class="nft">
                    <img src="./img/WallpaperDog-20542265.jpg" alt="">
                    <h1>Street Art</h1>
                </div>
                <div class="nft">
                    <img src="./img/CryptoPunks.png" alt="">
                    <h1>CryptoPunks</h1>
                </div>
                <div class="nft">
                    <img src="./img/WallpaperDog-20542267.jpg" alt="">
                    <h1>Krapopolis</h1>
                </div>
                <div class="nft">
                    <img src="./img/WallpaperDog-20542397.png" alt="">
                    <h1>Fox Deporte</h1>
                </div>
            </div>
            <div class="contact-section">
                <div class="contact-us">
                    <h1>Contact us</h1>
                    <p>You'll find us at all hours <br> on instagram.You can also <br>reach us through the twitter.</p>
                    <button class="contact-open">Reach Us</button>
                    <div class="inputs">
                        <button class="contact-close"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path
                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                            </svg></button>
                        <form>
                            <input class="input" type="text" placeholder="Enter your name" required>
                            <input class="input" type="email" placeholder="Enter your email" required>
                            <textarea class="input-message" name="" placeholder="Enter your message" id="" cols="30"
                                rows="10"></textarea >
                            <input  class="input-submit" type="submit" value="submite">    
                        </form>
                    </div>
                </div>
                <div class="newsletter">
                    <h1>Get the latest updates</h1>
                    <p>Breaking news on events,delivered<br>straight to your inbox</p>
                    <form>
                        <input class="news-email" type="email" placeholder="Write Your Email" required />
                        <input class="btn-submit" type="submit" value="Submit" />
                    </form>
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