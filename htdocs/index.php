<?php
define("INC_FOOTER", "includes/footer.inc.php");
define("INC_HEADER", "includes/header.inc.php");

$servername = "localhost";
$username = "root";
$password = "Spoon2021";
$dbname = "cs3140database2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$postCountArray = Array();

$post1Count = "SELECT cPID, count(*) as commentcnt FROM comments WHERE cpID = 1 ORDER BY cID";
$post2Count = "SELECT cPID, count(*) as commentcnt FROM comments WHERE cpID = 2 ORDER BY cID";
$post3Count = "SELECT cPID, count(*) as commentcnt FROM comments WHERE cpID = 3 ORDER BY cID";
$post4Count = "SELECT cPID, count(*) as commentcnt FROM comments WHERE cpID = 4 ORDER BY cID";
$post5Count = "SELECT cPID, count(*) as commentcnt FROM comments WHERE cpID = 5 ORDER BY cID";
$post6Count = "SELECT cPID, count(*) as commentcnt FROM comments WHERE cpID = 6 ORDER BY cID";

$result1 = $conn->query($post1Count);

while($row1 = $result1->fetch_assoc())
{
  $row1Count = $row1['commentcnt'];
}

$result1->close();

$result2 = $conn->query($post2Count);

while($row2 = $result2->fetch_assoc())
{
  $row2Count = $row2['commentcnt'];
}

$result2->close();

$result3 = $conn->query($post3Count);

while($row3 = $result3->fetch_assoc())
{
  $row3Count = $row3['commentcnt'];
}

$result3->close();

$result4 = $conn->query($post4Count);

while($row4 = $result4->fetch_assoc())
{
  $row4Count = $row4['commentcnt'];
}

$result4->close();

$result5 = $conn->query($post5Count);

while($row5 = $result5->fetch_assoc())
{
  $row5Count = $row5['commentcnt'];
}

$result5->close();

$result6 = $conn->query($post6Count);

while($row6 = $result6->fetch_assoc())
{
  $row6Count = $row6['commentcnt'];
}

$result6->close();


$allCount = array("1"=>$row1Count, "2"=>$row2Count, "3"=>$row3Count, "4"=>$row4Count, "5"=>$row5Count, "6"=>$row6Count);

arsort($allCount);

$orderedPosts = array_keys($allCount);


?>

<!DOCTYPE html>
<html>
<title>A09 Humphrey, Adrian</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="css/styles.css">
<style>
  body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body>

<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" id="background" style="max-width:1400px">

<!-- Header -->
<?php
  require_once("includes/define.inc.php");
  require_once(INC_HEADER);
?>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->

  <div class="w3-card-4 w3-margin w3-white">
    <img src="images/dwarf_workshop" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b><?php generatePostHeader(1, $conn); ?></b></h3>
      <h5><?php generatePostSubheading(1, $conn); ?>, <span class="w3-opacity"><?php generatePostMonth(1, $conn) ?> 29 <?php generatePostYear(1, $conn); ?></span></h5>
    </div>

    <div class="w3-container">
      <p><?php generateSmallPostContent(1, $conn); ?></p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><form method="get" action="blogpost.php"><button class="w3-button w3-padding-large w3-white w3-border" name="value" value="post1"><b>READ MORE &raquo;</b></button></form></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-tag"><?php generatePostCommentCount(1, $conn);?></span></span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="images/ring_skies.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b><?php generatePostHeader(2, $conn); ?></b></h3>
      <h5><?php generatePostSubheading(2, $conn); ?>, <span class="w3-opacity"><?php generatePostMonth(2, $conn) ?> 13 <?php generatePostYear(2, $conn); ?></span></h5>
    </div>

    <div class="w3-container">
      <p><?php generateSmallPostContent(2, $conn); ?></p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><form method="get" action="blogpost.php"><button class="w3-button w3-padding-large w3-white w3-border" name="value" value="post2"><b>READ MORE &raquo;</b></button></form></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-badge"><?php generatePostCommentCount(2, $conn);?></span></span></p>
        </div>
      </div>
    </div>
  </div>

  <div class="w3-card-4 w3-margin w3-white">
  <img src="images/parked_gondola.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b><?php generatePostHeader(3, $conn); ?></b></h3>
      <h5><?php generatePostSubheading(3, $conn); ?>, <span class="w3-opacity"><?php generatePostMonth(3, $conn) ?> 09 <?php generatePostYear(3, $conn); ?></span></h5>
    </div>

    <div class="w3-container">
      <p><?php generateSmallPostContent(3, $conn); ?></p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><form method="get" action="blogpost.php"><button class="w3-button w3-padding-large w3-white w3-border" name="value" value="post3"><b>READ MORE &raquo;</b></button></form></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-badge"><?php generatePostCommentCount(3, $conn);?></span></span></p>
        </div>
      </div>
    </div>
  </div>

  <div class="w3-card-4 w3-margin w3-white">
  <img src="images/walk_woods.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b><?php generatePostHeader(4, $conn); ?></b></h3>
      <h5><?php generatePostSubheading(4, $conn); ?>, <span class="w3-opacity"><?php generatePostMonth(4, $conn) ?> 23 <?php generatePostYear(4, $conn); ?></span></h5>
    </div>

    <div class="w3-container">
      <p><?php generateSmallPostContent(4, $conn); ?></p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><form method="get" action="blogpost.php"><button class="w3-button w3-padding-large w3-white w3-border" name="value" value="post4"><b>READ MORE &raquo;</b></button></form></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-badge"><?php generatePostCommentCount(4, $conn);?></span></span></p>
        </div>
      </div>
    </div>
  </div>

  <div class="w3-card-4 w3-margin w3-white">
  <img src="images/new_rock.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b><?php generatePostHeader(5, $conn); ?></b></h3>
      <h5><?php generatePostSubheading(5, $conn); ?>, <span class="w3-opacity"><?php generatePostMonth(5, $conn) ?> 02 <?php generatePostYear(5, $conn); ?></span></h5>
    </div>

    <div class="w3-container">
      <p><?php generateSmallPostContent(5, $conn); ?></p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><form method="get" action="blogpost.php"><button class="w3-button w3-padding-large w3-white w3-border" name="value" value="post5"><b>READ MORE &raquo;</b></button></form></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-badge"><?php generatePostCommentCount(5, $conn);?></span></span></p>
        </div>
      </div>
    </div>
  </div>

  <div class="w3-card-4 w3-margin w3-white">
  <img src="images/light_bridge.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b><?php generatePostHeader(6, $conn); ?></b></h3>
      <h5><?php generatePostSubheading(6, $conn); ?>, <span class="w3-opacity"><?php generatePostMonth(6, $conn) ?> 30 <?php generatePostYear(6, $conn); ?></span></h5>
    </div>

    <div class="w3-container">
      <p><?php generateSmallPostContent(6, $conn); ?></p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><form method="get" action="blogpost.php"><button class="w3-button w3-padding-large w3-white w3-border" name="value" value="post6"><b>READ MORE &raquo;</b></button></form></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-badge"><?php generatePostCommentCount(6, $conn);?></span></span></p>
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="images/avatar_ship.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>Adrian Humphrey</b></h4>
      <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
    </div>
  </div><hr>

  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="images/dwarf_workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><?php generatePostHeader($orderedPosts[0], $conn); ?></span><br>
        <span><?php generatePostSubheading($orderedPosts[0], $conn); ?></span>
      </li>
      <li class="w3-padding-16">
        <img src="images/parked_gondola.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><?php generatePostHeader($orderedPosts[1], $conn); ?></span><br>
        <span><?php generatePostSubheading($orderedPosts[1], $conn); ?></span>
      </li>
      <li class="w3-padding-16">
        <img src="images/ring_skies.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><?php generatePostHeader($orderedPosts[2], $conn); ?></span><br>
        <span><?php generatePostSubheading($orderedPosts[2], $conn); ?></span>
      </li>
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="images/new_rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large"><?php generatePostHeader($orderedPosts[3], $conn); ?></span><br>
        <span><?php generatePostSubheading($orderedPosts[3], $conn); ?></span>
      </li>
    </ul>
  </div>
  <hr>

<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<div id="newFooter">
<!-- Footer -->
<?php
  require_once(INC_FOOTER);
?>
</div>

</body>
</html>
