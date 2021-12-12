<?php

// Include files


//Function for getting the header

function generatePostHeader($pid, $connection)
{

	$query = "SELECT pheading FROM posts WHERE pID = '$pid'";

	$result = $connection->query($query);

	$cr = "\r\n";
	$row = $result->fetch_row();
	$header = stripslashes($row[0]);

	echo "\t\t".$header.$cr;

	$result->close();
}

function generatePostContent($pid, $connection)
{

	$query = "SELECT pcontent FROM posts WHERE pID = '$pid'";

	$result = $connection->query($query);

	$cr = "\r\n";
	$row = $result->fetch_row();
	$content = stripslashes($row[0]);

	echo $content;

	$result->close();

}

function generateSmallPostContent($pid, $connection)
{
	$query = "SELECT pcontent FROM posts WHERE pID = '$pid'";

	$result = $connection->query($query);

	$cr = "\r\n";
	$row = $result->fetch_row();
	$content = stripslashes($row[0]);

	$smallContent = substr($content, 0, 400);

	echo $smallContent.". . .";


	$result->close();

}

function generatePostSubheading($pid, $connection)
{

	$query = "SELECT psubheading FROM posts WHERE pID = '$pid'";

	$result = $connection->query($query);

	$cr = "\r\n";
	$row = $result->fetch_row();
	$subheading = stripslashes($row[0]);

	echo "\t\t".$subheading.$cr;

	$result->close();
}

function generatePostYear($pid, $connection)
{
	$query = "SELECT pyear FROM posts WHERE pID = '$pid'";

	$result = $connection->query($query);

	$cr = "\r\n";
	$row = $result->fetch_row();
	$year = stripslashes($row[0]);

	echo "\t\t".$year.$cr;

	$result->close();
}

function generatePostMonth($pid, $connection)
{
	$query = "SELECT pmonth FROM posts WHERE pID = '$pid'";

	$result = $connection->query($query);


	$cr = "\r\n";
	$row = $result->fetch_row();
	$month = stripslashes($row[0]);

	if($month == '01')
	{
		$month = 'January';
	}
	else if($month == '02')
	{
		$month = 'February';
	}
	else if($month == '03')
	{
		$month = 'March';
	}
	else if($month == '04')
	{
		$month = 'April';
	}
	else if($month == '05')
	{
		$month = 'May';
	}
	else if($month == '06')
	{
		$month = 'June';
	}
	else if($month == '07')
	{
		$month = 'July';
	}
	else if($month == '08')
	{
		$month = 'August';
	}
	else if($month == '09')
	{
		$month = 'September';
	}
	else if($month == '10')
	{
		$month = 'October';
	}
	else if($month == '11')
	{
		$month = 'November';
	}
	else if($month == '12')
	{
		$month = 'December';
	}

	echo "\t\t".$month.$cr;

	$result->close();
}

function generatePostCommentCount($pid, $connection)
{
	$query = "SELECT count(*) as commentcnt FROM comments WHERE cpID = '$pid' ORDER BY cID";

	$result = $connection->query($query);
	$cr = "\r\n";
	$row = $result->fetch_row();
	$count = $row[0];

	echo $count.$cr;

	$result->close();
}

function generatePostComments($pid, $connection)
{
	$query = "SELECT ccomment, cusername FROM comments WHERE cpID = '$pid'";


	$result = $connection->query($query);
	$cr = "\r\n";
	$commentArray = Array();
	$userArray = Array();

	while($row = $result->fetch_assoc())
	{
		$commentArray[] = $row['ccomment'];
		$userArray[] = $row['cusername'];
	}

	for($i = 0; $i < sizeof($commentArray); $i++)
	{
		echo "<p><span><b>".$userArray[$i].":</b></span> ".$commentArray[$i].$cr."</p>";
	}

	$result->close();
}

?>
