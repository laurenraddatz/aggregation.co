<?php
require("include/db.php");
require("include/header.php");
require("include/nav.php");

$feedName = $_POST["feedurl"];
$query = "SELECT count(*) FROM feeds";
$rows = Query($db, $query);

$id = 0;
$column = rand(1,3);
foreach ($rows as $feed) {
  $id = $feed[0];
}

$addFieldQuery = "INSERT INTO feeds (id, displayColumn, link) VALUES ('$id', '$column', '$feedName')";
$rows2 = Query($db, $addFieldQuery);

echo "Feed added a feed for ", $feedName;
