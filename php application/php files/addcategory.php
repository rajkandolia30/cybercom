<?php
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $content=$_POST['content'];
    $url=$_POST['url'];
    $meta_title=$_POST['meta_title'];
    $parent_category=$_POST['parent_category'];
    @$image=$_POST['file'];
    @$type=$_FILES['file']['type'];
    echo $type;
    
    if(empty($title)
    || empty($content)
    || empty($url)
    || empty($meta_title)
    || empty($parent_category)
    || empty($image)){
        if(empty($title)
        && empty($content)
        && empty($url)
        && empty($meta_title)
        && empty($parent_category)
        && empty($image)){
            echo 'Please enter all fields';
        } else {
            if(empty($title)){
                echo 'please enter title'.'<br>';
            }
            if(empty($content)){
                echo 'please enter content'.'<br>';
            }
            if(empty($url)){
                echo 'please enter url'.'<br>';
            }
            if(empty($meta_title)){
                echo 'please enter meta title'.'<br>';
            }
            if(empty($parent_category)){
                echo 'please enter parent category id'.'<br>';
            }
            if(empty($image)){
                echo 'please select image'.'<br>';
            }
            if(!empty($image) && $type=='image/jpeg' && ($extention=='jpeg' || $extention=='jpg')){
                echo 'please select image only having jpeg/jpg extension';            }

        }

    }
        if(!empty($title)
        && !empty($content)
        && !empty($url)
        && !empty($meta_title)
        && !empty($parent_category)
        && !empty($image)){
            $host='localhost';
            $user='root';
            $password_con='';
            $database='blog';
            $last_login="";
            $date=date("Y-m-d @ h:i:sa");
            $con=mysqli_connect($host, $user, $password_con ,$database);
                if($con){
                    echo 'connected to '.$database.'<br>';
                    $insert="INSERT INTO `category`(`id`,`image`, `title`, `content`, `url`, `meta_title`, `parent_category_id`, `created_at`, `updated_at`) VALUES ('','$image','$title','$content','$url','$meta_title','$parent_category','$date','$date')";
                        if(mysqli_query($con,$insert)){
                           echo '<strong>Inserted data succesfully.</strong><br>';
                        } else {
                            echo '<strong>There was an error inserting data<br>';
                        }
                }
            }
}
?>
<html>
    <head>
    <title>Add category</title>
    </head>
<table>
<form method="POST">
    <tr>
    <th>Add New Category</th>
    </tr>

    <tr>
    <td>Title</td>
    <td><input type="text" name="title" >
    </tr>

    <tr>
    <td>Content</td>
    <td><textarea rows="4" cols="22" name="content"></textarea></td>
    </tr>

    <tr>
    <td>URL</td>
    <td><input type="text" name="url"></td>
    </tr>

    <tr>
    <td>Meta Title</td>
    <td><input type="text" name="meta_title"></td>
    </tr>

    <tr>
    <td>Parent Category</td>
    <td><input type="text" name="parent_category"></td>
    </tr>

    <tr>
    <td>Image</td>
    <td><input type="file" name="file"></td>
    </tr>

    <tr>
    <td colspan="2"><input type="submit" name="submit" value="SUBMIT">
    <tr>
</form>
</table>
</html>