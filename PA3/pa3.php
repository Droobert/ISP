<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h4>Andrew Doyle's PHP Calculator.</h4>

<form id="calculator" method ="post">
	Output: <input type="text" name="out" id="output" 
                       value="<?php 
            if(isset($_POST['operator']) && ($_POST['in']) != 0)
                switch ($_POST['operator']):
                    case '+':
                        echo $_POST['out'] + $_POST['in'];
                        break;
                    case '-':
                        echo $_POST['out'] - $_POST['in'];
                        break;
                    case '*':
                        echo $_POST['out'] * $_POST['in'];
                        break;
                    case '/':
                        echo $_POST['out'] / $_POST['in'];
                        break;
                    case '=':
                        echo $_POST['out'] = $_POST['in'];
                        break;
                endswitch;
            else
                echo "0.0";
    ?>" readonly>
	<br>
	<input type="submit" name="operator" id="add" value="+">
	<input type="submit" name="operator" id="subtract" value="-">
	<input type="submit" name="operator" id="multiply" value="*">
	<input type="submit" name="operator" id="divide" value="/">
	<input type="submit" name="operator" id="equals" value="=">
	<br>
	Input: <input type="text" name="in" id="input">
</form>
</body>
</html>

<!-- 
Write a PHP program to create an online calculator which has the following fields and buttons:

-A read only output field showing the current value of the calculator (starting with 0.0) DONE
-An input field to accept a new value. DONE
 + : to add the new value to the current value DONE
 - : to subtract the new value from the current value DONE
 *: to multiply the current value by the new value DONE
 /: to divide the current value by the new value DONE
 =: to assign the new value to the current value DONE
-->