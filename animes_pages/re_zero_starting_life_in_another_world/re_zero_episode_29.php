<link href="../../css/styles.css" rel="stylesheet" />

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    $connection = mysqli_connect("localhost", "root", "", "download");
    
    $query = "SELECT * from table4";
    $select_video = mysqli_query($connection, $query);
    
    echo "<table class='table table-hover table-dark'>";
    
    while($row = mysqli_fetch_array($select_video)) {
    
    echo "<tr>";
    
    echo "<td>"; 
        
    echo $row['name']; 
        
    echo "</td>";
        
    echo "<td>"; 
        
    echo $row['quality']; 
        
    echo "</td>";
    
    echo "<td>";
    
    ?> 
    
    <a href="<?php echo $row['path'] ?>">Download</a> 
    
    <?php 
    
    echo "</tr>";
    
    }
    
    echo "</table>";
    
    ?>
    
</body>
</html>