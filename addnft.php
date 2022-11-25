<?php
include "connection.php";

$id = $_GET['show'];
if (isset($_POST['submit'])) {

    $name = $_POST["nftname"];
    $nftdescription = $_POST["nftdescription"];
    $nftprix = $_POST["nftprix"];
    $img = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "./img/" . $img;
    move_uploaded_file($tempname, $folder);


    $sql = "INSERT INTO nft (nft_nom, nft_description, nft_prix, 
  nft_image, nft_collection_id) VALUES  ('$name', '$nftdescription', '$nftprix', '$img', '$id');";

    if ($conn->query($sql) === TRUE) {
        header('location:nft.php?show=' . $id);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/form.css">

    <title>add.nft</title>
</head>

<body>

    <a href="nft.php?show=<?= $id ?>"><button class="back"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg></button></a>
    <div class="add-collection">

        <form class="collection-form" method="post" enctype="multipart/form-data">
            <h2 class="form-title">Add NFT</h2>
            <label>Name Of NFT</label>
            <input type="text" id="fname" name="nftname" placeholder="Name" required>

            <label>Nft Description</label>
            <textarea name="nftdescription" id="text-area" cols="30" rows="10"></textarea>
            <label>Nft Prix</label>
            <input type="number" placeholder="nft prix" name="nftprix">
            <label class="img-upload">
                Add image
                <input type="file" id="img" name="img" accept="image/*" required>
            </label>

            <input type="submit" class="submit" value="submit" name="submit">


        </form>
    </div>
</body>

</html>