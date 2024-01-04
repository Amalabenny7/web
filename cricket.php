<html>
<center>
<body bgcolor="lightyellow">
<h4></h4>
 <?php
$name=["ROHIT SHARMA","MS DHONI","VIRAT KOHLI","BUMRAH","DINESH","RISHAB"];
    echo "<h4>Cricket players name</h4>
    <table border='2px'>
    <tr><th> sl no.</th>
    <th>player</th>";
     
    for ($i=0;$i<6;$i++)
    {
    $sl=$i+1;
    echo "<tr><th>$sl</th><th>$name[$i]</th></tr>";
    }
    echo "</table>"
    ?>
    </body>
    </html>
