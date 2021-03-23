<?php

include "config_s.php";
$id = $_POST['update_id'];
$name = $_POST['name'];
$title = $_POST['title'];
$journal_name = $_POST['journal_name'];
$periodical_name = $_POST['periodical_name'];
$city = $_POST['city'];
$dayP = $_POST['dayP'];
$monthP = $_POST['monthP'];
$yearP = $_POST['yearP'];
$pages = $_POST['pages'];
$editor =  $_POST['editor'];
$publisher =  $_POST['publisher'];
$edition =  $_POST['edition'];
$volume =  $_POST['volume'];
$issue =  $_POST['issue'];
$short_title =  $_POST['short_title'];
$standard_num =  $_POST['standard_num'];
$comment =  $_POST['comment'];
$medium =  $_POST['medium'];
$dayACC =  $_POST['dayACC'];
$monthACC =  $_POST['monthACC'];
$yearACC =  $_POST['yearACC'];
$url =  $_POST['url'];
$doi =  $_POST['doi'];
$id = $_POST['id'];




	$sql = "UPDATE `author` SET `name`='$name',`title`='$title',`journal_name`='$journal_name',`periodical_name`='$periodical_name',`city`='$city',`dayP`='$dayP',
	`monthP`='$monthP',`yearP`='$yearP',`pages`='$pages',`editor`='$editor',`publisher`='$publisher',`edition`='$edition',
	`volume`='$volume',`issue`='$issue',`short_title`='$short_title',`standard_num`='$standard_num',`comment`='$comment',`medium`='$medium',
	`dayACC`='$dayACC',`monthACC`='$monthACC',`yearACC`='$yearACC',`url`='$url',`doi`='$doi' WHERE id=$id";
	 mysqli_query($con, $sql);




?>