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

$pid = 0;

if($_GET['value'] == 'post1');
{
  $GLOBALS['pid'] = 1;
}

if($_GET['value'] == 'post2')
{
  $GLOBALS['pid'] = 2;
}

if($_GET['value'] == 'post3')
{
  $GLOBALS['pid'] = 3;
}

if($_GET['value'] == 'post4')
{
  $GLOBALS['pid'] = 4;
}

if($_GET['value'] == 'post5')
{
  $GLOBALS['pid'] = 5;
}

if($_GET['value'] == 'post6')
{
  $GLOBALS['pid'] = 6;
}

if(isset($_POST["submit"]))
{
  $name = $_POST["fname"];
  $email = $_POST["email"];
  $comment = $_POST["comments"];

  $query = mysqli_query($conn, "INSERT INTO comments(cpID, ccomment, cauthor, cauthemail, cdateposted, capproved, cusername, crevdate) VALUES ('$pid','$comment','$name','$email','2021-12-11 01:39:37','0','user','2021-12-11 01:39:37')");

  $msg = "Email has been sent";

  mail("Starkey2893@gmail.com", "New comment added", $msg);
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
      <h3><b><?php generatePostHeader($pid, $conn); ?></b></h3>
      <h5><?php generatePostSubheading($pid, $conn); ?>,<span class="w3-opacity"><?php generatePostMonth($pid, $conn) ?> 29 <?php generatePostYear($pid, $conn); ?>
      </span></h5>
    </div>

    <div class="w3-container">
      <p><?php generatePostContent($pid, $conn); ?></p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p>Comments:</p>
          <?php generatePostComments($pid, $conn) ?>
        </div>
      </div>
      <form method="post">
          <div>
            <label for="fname" style="color: black" id="nameCheck">Name:</br></label>
            <input type="text" id="fname" name="fname" required><br><br>
            <label for="email" style="color: black" id="emailCheck">Email:</br></label>
            <input type="text" id="email" name="email" required><br><br>
            <label for="comments" style="color: black" id="commentsCheck">Comment:</br></label>
            <textarea name="comments" id="comments" style="width: 100%; resize: none; height: 100px;" required></textarea>
          </div>
          <input id="submit" type="submit" name="submit" value="Submit" style="margin-bottom: 15px;">
        </form>
    </div>
  </div>
  <hr>
  <!-- Blog entry -->

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
          <img src="images/dwarf_workshop" alt="Image" class="w3-left w3-margin-right" style="width:50px">
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
<script src="scripts/scripts.js"></script>
</body>
</html>
