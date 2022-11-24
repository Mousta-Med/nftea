<?php
include "connection.php";

$id = $_GET['edite'];
$show = $_GET['show'];
if (isset($_POST['submit'])) {

    $name = $_POST["nftname"];
    $nftdescription = $_POST["nftdescription"];
    $nftprix = $_POST["nftprix"];
    $img = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "./img/" . $img;
    move_uploaded_file($tempname, $folder);
    if (empty($img)) {
        $sql = "update nft set nft_nom ='$name', nft_description='$nftdescription', nft_prix='$nftprix'
         , nft_collection_id='$show' where  nft_id = $id";
    } else {
        $sql = "update nft set nft_nom ='$name', nft_description='$nftdescription', nft_prix='$nftprix', 
        nft_image='$img' , nft_collection_id='$show' where  nft_id = $id";
    }
    if ($conn->query($sql) === TRUE) {
        header('location:nft.php?show=' . $show);
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
    <title>Update.nft</title>
</head>

<body>

    <a href="nft.php?show=<?= $show ?>"><button class="back"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg></button></a>
    <?php
    $sqli = "SELECT * FROM nft WHERE nft_id = $id";
    $excute = $conn->query($sqli);

    while ($row = mysqli_fetch_assoc($excute)) {
    ?>
    <div class="add-collection">

        <form class="collection-form" method="post" enctype="multipart/form-data">
            <h2 class="form-title">Update NFT</h2>
            <label>Name Of NFT</label>
            <input type="text" id="fname" name="nftname" value="<?php echo $row['nft_nom']; ?>" placeholder="Name"
                required>
            <label>Nft Description</label>
            <textarea name="nftdescription" id="" cols="30" rows="10"><?php echo $row['nft_description']; ?></textarea>
            <label>Nft Prix</label>
            <input type="number" placeholder="nft prix" value="<?php echo $row['nft_prix']; ?>" name="nftprix">
            <label class="img-upload">
                Add image
                <input type="file" id="img" name="img" accept="image/*">
            </label>

            <input type="submit" class="submit" value="submit" name="submit">
        </form>
        <?php } ?>
    </div>
</body>

</html>