<?php
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $content=$_POST['content'];
    $url=$_POST['url'];
    $published=$_POST['published'];
    $category=$_POST['category'];
    @$image=$_POST['file'];
    @$type=$_FILES['file']['type'];    
        if(empty($title)
        || empty($content)
        || empty($url)
        || empty($published)
        || empty($category)
        || empty($image)){
            if(empty($title)
            && empty($content)
            && empty($url)
            && empty($published)
            && empty($category)
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
                if(empty($published)){
                    echo 'please enter date'.'<br>';
                }
                if(empty($category)){
                    echo 'please select category'.'<br>';
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
        && !empty($published)
        && !empty($category)
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
                    $insert="INSERT INTO `blog_post`(`id`, `user_id`, `title`, `url`, `content`,`category`, `image`, `publidhed_at`, `created_at`, `updated_at`) VALUES ('','','$title','$url','$content','$category','$image','$published','$date','$date')";
                        if(mysqli_query($con,$insert)){
                           echo '<strong>Inserted data succesfully.</strong><br>';
                        } else {
                            echo '<strong>There was an error inserting data<br>';
                        }
                } else {
                    echo 'connection not established'.'<br>';
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
    <th>Add New Blog Post</th>
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
    <td>Published At</td>
    <td><input type="date" name="published"></td>
    </tr>

    <tr>
    <td>Category</td>
    <td><select name="category" id="category" size="4">
    <option value="lifestyle">Lifestyle</option>
    <option value="health">Health</option>
    <option value="education">Education</option>
    <option value="music">Music</option>
    </select></td>
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