<?php

$conn=mysqli_connect("localhost","root","root","craigslist",3306);
$category = $_GET["category"];

$query_string_section = "select * from section where categoryID=$category;";
$result = mysqli_query( $conn, $query_string_section);
echo "<label>Section</label><br/>";
echo "<select id=\"section_ad\" name=\"section\" >";
while($row = $result->fetch_assoc())
{
	echo "<option value=".$row["sectionID"].">".$row["section"]."</option>";
}
echo"</select>";


?>