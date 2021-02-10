<html>
    <head><title>category table</title>
    </head>
<body>
<div>
    <button type="button" name="manage_category"><a href="categorytable.php">Manage Category</a></button>
    <button type="button" name="my_profile">My Profile</button>
    <button type="button" name="log_out">Log Out</button>
</div>

<div>
    <h3>Blog Post</h3>
</div>

<div>
    <button type="button" name="add_category"><a href="addblog.php">Add Blog Post</a></button>
</div>
<table>
    <tr>
        <th>Post ID</th>
        <th>Category name</th>
        <th>Title</th>
        <th>Published Date</th>
        <th>Actions</th>
    </tr>
    <?php
    $host='localhost';
    $user='root';
    $password_con='';
    $db='blog';
    $con=mysqli_connect($host, $user, $password_con, $db);
    $select="SELECT * FROM blog_post";
        if($query=mysqli_query($con,$select)){
            if(mysqli_num_rows($query)>0){
                while($row = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>$row[id]</td>";
                    echo "<td>$row[category]</td>";
                    echo "<td>$row[title]</td>";
                    echo "<td>$row[published_at]</td>";
                    echo "<td>";
                    echo "<button type='button' id='$row[id]'  onclick='editblog($row[id])'>edit</button>";
                    echo "<button type='button' id='$row[id]'  onclick='removeblog($row[id])'>delete</button>";
                    echo "</td></tr>";
                }
            }
        }
    ?>
    <script type="text/javascript" src="../js files/blog.js"></script>
</table>
</body>
</html>