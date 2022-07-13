<?php
 $States_string = "Mississippi Alabama Texas Massachusetts Kansas";
 $States = explode(" ", $States_string);
 $patterns = array('/xas$/', '/^k.*s$/i', '/^M.*s$/', '/a$/');
 $StatesList = [];
 // function to return a found match for given pattern in the States list
 function getState ($pattern, $States) {
 foreach ($States as $state) {
 if (preg_match($pattern, $state)) {
 return $state;
 }
 }
 }
 // for each pattern, find a match from States and store it in StatesList
 for ($j = 0; $j < count($patterns); $j++) {
 $StatesList[$j] = getState($patterns[$j], $States);
 }
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>list of state</title>
</head>
<body>
 <p>Statement is : <b><?=$States_string;?></b></p>
 <p>Name that Ends With xas is : <b><?=$StatesList[0];?></b></p>
 <p>Name Starts With k And Ends With s is : <b><?=$StatesList[1];?></b></p>
 <p>Name Starts With M And Ends With s is : <b><?=$StatesList[2];?></b></p>
 <p>Name Ends With a Is : <b><?=$StatesList[3];?></b></p></body>
</html>