<html>
<head>
    <title>clock</title>
    <style type="text/css">
        p {
color:white;
font-size:50px;
position: absolute;
top: 20%;
left: 40%;
transform: translate(-50%, -50%);
}
    </style>
</head>
<body style="background-color: black;color: yellow;">
<p>
    The Current Date And Time is :
    <?php    
        date_default_timezone_set("Asia/Kolkata");
        echo date(' d-m-y h:i:s A');
    ?>
</p>
</body>
</html>