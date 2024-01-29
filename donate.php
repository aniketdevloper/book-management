
<?php
$con = mysqli_connect('localhost', 'u860718961_books', "@cceleroC12", "u860718961_bookdocuments");
// ('localhost', 'root', "", "bookdocuments");




if (isset($_POST["submit"])) {
    $bookname = $_POST["book_name"];
    $bookauthor = $_POST["book_author"];
    $booklanuage = $_POST["book_language"];
    $bookcategory = $_POST["book_category"];
    $bookcity = $_POST["book_city"];
    $files = $_FILES["book_image"]["name"];
    $bookdescription = $_POST["book_description"];

    if ($bookname != "" && $bookauthor != "" && $booklanuage != "" && $bookcategory != "" && $bookcity != "" && $files != "" && $bookdescription != "") {

        $q = "INSERT INTO `book_db`(`book_name`,`book_author`, `book_language`,`book_category`, `book_city`,`book_image`, `book_description`) VALUES ('$bookname','$bookauthor','$booklanuage','$bookcategory','$bookcity','$files','$bookdescription')";

        $query_run = mysqli_query($con, $q);

        if ($query_run) {

            move_uploaded_file($_FILES["book_image"]["tmp_name"], "uploadimg/" . $_FILES["book_image"]["name"]);

            $_SESSION["status"] = "Book Donated Successfuly...";
            header("location: bookgalerry.php");
        } else {
            $_SESSION["status"] = "Book Not Donated....";
            header("location: index.php");
        }
    } else {
        echo "Please fill form Properly";
    }
}


?>