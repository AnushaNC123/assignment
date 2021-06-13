<html>
<head><title>FIB AND PRIME</title></head>
<body style="background-color: black;color: yellow;">
<center>
     <h1>
        Fibonacci Series and Prime Numbers
    </h1>
     
    <form method="post">
        <table border="0">
            <tr>
                <td> <input type="text" name="num1" placeholder="Enter the number"/>
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
    if($_POST)  
    {   
        $num = $_POST['num1'];
        $i = 3;
        $num1 = 0;  
        $num2 = 1;  
        $last = $num2;
        echo "<h3>Fibonacci series for first $num numbers: </h3>";  
        echo "\n";  
        echo $num1.' '.$num2.' ';  
        while ($i <= $num )  
        {  
            $num3 = $num2 + $num1;  
            echo $num3.' ';  
            $num1 = $num2;  
            $num2 = $num3;  
            $i = $i + 1;  
            $last = $num2;

        } 

        //prime
        $count = 0; 
        $num1 = $_POST['num1']; 
        $num = 2;   
        $num1 = 1;
        $num2 = 1;  
        $num3 = 2;    
        echo "<h3>Prime Numbers in the given fibonnaci series: </h3>";  
        echo "\n"; 
while ($count < $last )  
{  
$cnt=0;  
while($num == $num3)
{
    if($last > 2){
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$cnt++;  
}  
} 
if ($cnt<3)  
{  
echo $num." , ";
} 
}
$num1=$num2;
$num2=$num3;
$num3 = $num1 + $num2;
} 
$num=$num+1;
$count =$count+1;
}  
    }    
?> 
</center>
</body>
</html>


