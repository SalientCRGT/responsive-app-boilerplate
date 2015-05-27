<html>
<body>

<h1>REST API</h1>

<a href="/rest/findEmployees.php">findEmployees - mysql query returning JSON</a>
<br>
<a href="/rest/jsontest.php">jsontest using https://github.com/AlexisTM/Simple-Json-PHP</a>

<pre>
<?php

$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
echo $actual_link;

?>
</pre>


</body>
</html>

