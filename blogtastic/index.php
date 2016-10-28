<?php

require("header.php");

$sql = "SELECT entries.*, categories.cat FROM entries, categories
    WHERE entries.cat_id = categories.id
    ORDER BY dateposted DESC
    LIMIT 1;";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
?>

<h2>
    <a href="viewentry.php?id=<?php echo $row['id']; ?>"; ><?php echo $row['subject'] ?></a>
</h2>

<?php
echo "<h2><a href='viewentry.php?id=" . $row['id']
    ."'>" . $row['subject'] . 
    "</a></h2><br />";

echo "<i>In <a href='viewcat.php?id=". $row['cat_id']
    ."'>" .$row['cat'].
    "</a> - Posted on " . date("D jS",
        strtotime($row['dateposted'])).
        "</i>";
echo "<p>";
echo nl2br($row['body']);
echo "</p>";

echo "<p>";

$commsql = "SELECT name FROM comments WHERE blog_id = " . $row['id'] .
    "ORDER BY dateposted;";
$commresult = mysql_query($commsql);
$numrows_comm = mysql_num_rows($commresult);


require("footer.php");

?>
