<?php
$target_dir = "c:/Xampp/htdocs/Chat/Files/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 2500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        header('location: Home.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    $conn=mysqli_connect("localhost", "root", "", "chat");
     // Check connection
	if (mysqli_connect_errno())
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
    //Writes the information to the database
    function show($check) {
        echo $check;
    }
    $send = "File";
    $target_file = "<a href=".$target_file.">".$send."</a>";
    mysqli_query($conn,"INSERT INTO chats(ChatUserId,ChatText) VALUES ('1','$target_file')"); 
    mysqli_close($conn);

}
?>

