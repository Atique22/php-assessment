<!DOCTYPE html>
<html>
<head>
    <title>Response Page</title>
</head>
<body>
<?php
if (isset($_GET['enterresults'])) {
    if ($_GET['enterresults'] === 'cancel') {
        echo "<h1>Cancel button was pressed</h1>";
    } else {
        $name = $_GET['studentname'];
        $travel = $_GET['travel'];
        $journeyTime = $_GET['journeytime'];
        $comments = $_GET['comments'];

        echo "<h1>Feedback Summary</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>Travel Type: $travel</p>";
        
        if ($journeyTime === 'less') {
            echo "<p>Journey Time: Less than 1/2 hour</p>";
        } elseif ($journeyTime === 'between') {
            echo "<p>Journey Time: Between 1/2 hour and an hour</p>";
        } elseif ($journeyTime === 'more') {
            echo "<p>Journey Time: More than an hour</p>";
        }

        echo "<p>Comments: $comments</p>";
    }
}
?>
</body>
</html>
