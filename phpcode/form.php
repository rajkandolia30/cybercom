<?php 
    if(isset($_POST['name'])
   || isset($_POST['email'])
   || isset($_POST['time']) 
   || isset($_POST['classes'])
   || isset($_POST['gender'])
   || isset($_POST['checkbox'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $checkbox=$_POST['checkbox'];
        $time=$_POST['time'];
        $classes=$_POST['classes'];
            if(!empty($name) 
            || !empty($email) 
            || !empty($checkbox) 
            || !empty($gender) 
            || !empty($subject) 
            || !empty($time) 
            || !empty($classes)){
                if(!empty($name) 
                    && !empty($email) 
                    && !empty($gender) 
                    && !empty($checkbox)){
                        if(empty($_POST['subject'])){
                            echo 'Select atleast 1 game';
                        }else{
                              foreach($_POST['subject'] as $value){
                                      echo '<strong>Game selected:</strong> '.$value.'<br>';
                                }
                echo '<strong>Name: </strong>'.$name.'<br>';
                echo '<strong>Email: </strong>'.$email.'<br>';
                echo '<strong>Time: </strong>'.$time.'<br>';
                echo '<strong>Any information: </strong>'.$classes.'<br>';
                echo '<strong>Gender: </strong>'.$gender.'<br>';
                }
        }else{
                echo '<strong>*Please enter MANDATORY fields</strong>';
            }
        }else{
            echo '<strong>Please enter all fields</strong>';
        } 

}
        
?>

<html>
    <head><title>form</title>
    <style>
    .err{
        color:red;
    }
    </style>
    </head>
<h1>Absolute classes registration</h1>
<form action="form.php" method="POST">
<p class="err">*required field.</p>
<p class="err">*You must agree to terms</p>
<table>
<tr><td>Name:</td>
    <td><input type="text" name="name"><label class="err">*</label></td>
    </tr>
<tr><td>E-mail:</td>
    <td><input type="text" name="email"><label class="err">*</label></td>
    </tr>
<tr><td>Time:</td>
    <td><input type="text" name="time"></td>
    </tr>
<tr><td>Classes:</td>
    <td colspan="3"><textarea name="classes" rows=5 cols=30></textarea></td>
    </tr>
<tr><td>Gender:</td>
    <td><input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <label class="err">*</label>
    </tr>
<tr><td>Select:</td>
    <td><select name="subject[]" size="4" multiple>
        <option value = "Android">Android</option>
        <option value = "Java">Java</option>
        <option value = "C#">C#</option>
        <option value = "Data Base">Data Base</option>
        <option value = "Hadoop">Hadoop</option>
        <option value = "VB script">VB script</option>
        </select></td>
    </tr>
<tr><td>Agree</td>
    <td><input type="checkbox" name="checkbox" value="1"></td>
    </tr>
<tr><td><input type="submit" value="Submit"></td>
    </tr>
</table>
</form>
</html>

