<html>
<head><title>arithmetic operation</title></head>
<body style="background-color: black;color: green;">
<center>
    <h1>
        ARITHMETIC OPERATIONS USING SWITCH CASE 
    </h1>
     
    <form method="post">
        <table > 
            <tr>
                <td> <input type="text" name="num1" placeholder="Enter first number"/>
                </td>
            </tr>
            <tr>
            <td> <input type="text" name="num2"  placeholder="Enter second number"/>
                </td>
            </tr>
            <tr>
                <td> <input type="text" name="opt" placeholder="Enter the arithmetic operator"/>
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit"
                    value="Submit"/>
                </td>
            </tr>
        </table>
    </form>
 
<?php
 
if(isset($_POST['submit'])) {
 
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $ch = $_POST['opt'];
 
    echo "The first number is $a"; 
    echo "<br>";
    echo "The second number is $b"; 
    echo "<br>";

    switch($ch) {
        case '+':
            $c = $a + $b;
            echo " Addition of two numbers = " . $c ;
            break;
 
        case '-':
            $c = $a - $b;
            echo " Subtraction  of two numbers= " . $c ;
            break;
 
        case '*':
            $c = $a * $b;
            echo " Multiplication of two numbers = " . $c ;
            break;
 
        case '/':
            $c = $a / $b;
            echo " Division of two numbers = " . $c ;
            break;
 
        default:
            echo ("invalid option\n");
    }
}
?>

</center>
</body>
</html>