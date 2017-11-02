<!DOCTYPE html>
<html>
<head>
</head>
<body>

<p>This is Andrew Doyle's PHP Calculator.</p>
<?php
echo "Hello World!";
?>

<form id="calculator">
	Output: <input type="text" id="output" value="0.0" readonly>
	<br>
	<input type="button" id="+" value="+" onclick="add()">
	<input type="button" id="-" value="-">
	<input type="button" id="*" value="*">
	<input type="button" id="/" value="/">
	<input type="button" id="=" value="=">
	<br>
	Input: <input type="text" id="input">
</body>
<?php
function add(){
	
}
?>
</html>

<!-- 
Write a PHP program to create an online calculator which has the following fields and buttons:

-A read only output field showing the current value of the calculator (starting with 0.0) DONE
-An input field to accept a new value. DONE
 + : to add the new value to the current value
 - : to subtract the new value from the current value
 *: to multiply the current value by the new value
 /: to divide the current value by the new value
 =: to assign the new value to the current value
-->