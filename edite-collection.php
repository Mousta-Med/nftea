<?php
include "connection.php";
$id = $_GET['edite'];

if (isset($_POST['submit'])) {

    $name = $_POST["collectionname"];
    $artist = $_POST["artistname"];
    $img = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "./img/" . $img;
    move_uploaded_file($tempname, $folder);
    if (empty($img)) {
        $sql = "update collections set collection_nom ='$name', collection_artist ='$artist' where  collection_id = $id";
    } else {
        $sql = "update collections set collection_nom ='$name', collection_artist ='$artist', collection_image ='$img' where  collection_id = $id";
    }

    if ($conn->query($sql) === TRUE) {
        header('location:collection.php');
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
    <title>Update.collection</title>
</head>

<body>
    <a href="collection.php"><button class="back"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg></button></a>
    <?php
    $query = mysqli_query($conn, "SELECT * from  collections WHERE collection_id = $id ");

    while ($rows = mysqli_fetch_assoc($query)) {
    ?>
        <div class="add-collection">
            <form class="collection-form" method="post" enctype="multipart/form-data">
                <h2 class="form-title">Update Collection</h2>
                <label>Name Of Collection</label>
                <input type="text" id="fname" name="collectionname" value="<?php echo $rows['collection_nom']; ?>" placeholder="Name" required>

                <label>Artist Name</label>
                <input type="text" id="lname" name="artistname" value="<?php echo $rows['collection_artist']; ?>" placeholder="Artist" required>

                <label class=" img-upload">
                    Add image
                    <input type="file" id="img" name="img" accept="image/*">
                </label>

                <input class="submit" type="submit" value="Send" name="submit">
            </form>
        <?php } ?>
        </div>
</body>

</html>