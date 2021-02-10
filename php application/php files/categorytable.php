<html>
    <head><title>category table</title>
    <link rel="stylesheet" type="text/css" href="../css files/categorytable.css">
    </head>
<body>

<div>
    <button type="button" name="manage_category"><a href="categorytable.php">Manage Category</a></button>
    <button type="button" name="my_profile">My Profile</button>
    <button type="button" name="log_out">Log Out</button>
</div>

<div>
    <h3>Blog Category</h3>
</div>

<div>
    <button type="button" name="add_category"><a href="addcategory.php">Add Category</a></button>
</div>

<table>
    <tr>
        <th>Category ID</th>
        <th>Category Image</th>
        <th>Category Name</th>
        <th>Created Date </th>
        <th>Actions</th>
    </tr>
    <?php
    $host='localhost';
    $user='root';
    $password_con='';
    $db='blog';
    $con=mysqli_connect($host, $user, $password_con, $db);
    $select="SELECT * FROM category";
        if($query=mysqli_query($con,$select)){
            if(mysqli_num_rows($query)>0){
                while($row = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>$row[id]</td>";
                    echo "<td>$row[image]</td>";
                    echo "<td>$row[title]</td>";
                    echo "<td>$row[created_at]</td>";
                    echo "<td>";
                    echo "<button type='button' id='$row[id]'  onclick='editcategory($row[id])'>edit</button>";
                    echo "<button type='button' id='$row[id]'  onclick='removecategory($row[id])'>delete</button>";
                    echo "</td></tr>";
                }
            }
        }
    ?>
    <script type="text/javascript" src="../js files/blog.js"></script>
</table>
</body>
</html>