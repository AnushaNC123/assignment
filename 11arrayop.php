<html>
<head><title>Bill</title></head>
<body >
<center>
     <h2>
        Bill
    </h2>
     
    <form method="post" >
        Enter the item names:<input type="text" name="names" placeholder="Enter the item names" required /><br><br>
        Enter the item price:<input type="text" name="price" placeholder="Enter the item price" required />
        <br><br>
        <input type="submit" name="submit" value="Store"/>
       <input type="reset" name="reset" value="Reset"/>
    </form>

     
     <?php
     if($_POST)  
    {   
        $names = $_POST['names']; 
        $price = $_POST['price'];

        $name = explode(',',$names);
        $x= count($name);

        $pric = explode(',',$price);

        echo '<body style="color:green;"><table border="4">
            <tr>
                <th>Item Name</th><th>Item Price</th>
            </tr>';
            for($i=0;$i<$x;$i++){
    echo "<tr>";
        echo "<td>{$name[$i]}</td><td>{$pric[$i]}</td>";
    }
    echo "<tr>";
echo "</table>";

        echo '<br>';
        $total = 0;
        for($i=0; $i<$x;$i++)
        {
            $total = $total + $pric[$i];
        }

        echo 'Total Amount Is: '.$total;

        $maxi= max($pric);
        $ky = array_search($maxi, $pric);
        echo '<br>';
        echo 'Costliest item Is: '.$name[$ky];

        $mini= min($pric);
        $key = array_search($mini, $pric);
        echo '<br>';
        echo 'Cheapest item Is: '.$name[$key];
}     
?>
<br>
   
</body>
</html>
