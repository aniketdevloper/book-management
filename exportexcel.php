<?php

require('donate.php');

$query = "SELECT * FROM book_db";

$res = mysqli_query($con,$query);
// data recived

$html = "<table>
<tr>
<th style='width:200%'>Name</th>
<th style='width:200%'>Author</th>
<th style='width:200%'>Language</th>
<th style='width:200%'>Category</th>
<th style='width:200%'>City</th>
<th style='width:300%'>Description</th>
</tr>";



while($row = mysqli_fetch_assoc($res))
{
    $html .= '
    <tr style="height:100px">
    <td>'.$row['book_name'].'</td>
    <td>'.$row['book_author'].'</td>
    <td>'.$row['book_language'].'</td>
    <td>'.$row['book_category'].'</td>
    <td>'.$row['book_city'].'</td>
    <td>'.$row['book_description'].'</td>
    </tr>';

    // '.$row['book_image'].'
// http://localhost/Book_Documents/index.php
}

$html .= "</table>";
header("Content-Type:application/xls");
header("Content-Disposition:attachment;filename=Books.xls");



echo $html;

?>