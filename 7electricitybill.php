<html>
<head><title>Electricity Bill </title></head>
<body>
<center>
     <h1>
        Electricity Bill 
    </h1>
     
    <form method="post">
       
              <input type="text" name="num1" placeholder="Enter previous reading" ><br><br>
                <input type="text" name="num2"  placeholder="Enter present reading"/><br><br>
               <input type="submit" name="submit"
                    value="Submit"/>
               
           
    </form>

 
<?php   
    if($_POST)  
    {   
        $prev = $_POST['num1']; 
        $cur = $_POST['num2'];
        $units = $cur - $prev;
        $total=0;  
        if ($units <= 100)
        {
            $total= $units * 3;
        }
        elseif ($units <= 200)
        {
            $total = (100 * 3) + ($units - 100) * 4;
        }
        elseif ($units <= 300)
        {
            $total = (100 * 3) + (100 * 4) + ($units - 200) * 5;
        }
        elseif ($units > 300)
        {
            $total = (100 * 3) + (100 * 4) + (100 * 5) + ($units - 300) * 6;
        }
        echo "The Previous Reading is $prev"; 
        echo "</br>";        
        echo "The Current Reading is $cur"; 
        echo "</br>";
        echo "The Units is $units"; 
        echo "</br>";
        echo "The total bill ofm " .$units.  " units is, " .$total; 
        echo "</br>";
    }     
?> 
</center>
</body>
</html>


 