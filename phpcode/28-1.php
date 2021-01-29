<?php
//sensoring
$find=array('is','the','a');
$replace=array('IS','THE','A');
    if(isset($_POST["user"]) 
        && !empty($_POST["user"])){
        $user=$_POST["user"];
        $user1=str_ireplace($find, $replace, $user);
        echo 'Hello..Welcome to our page '.strtolower($user);
        }
?>

<form action="28-1.php" method="POST">
<textarea name="user" rows=6 cols=30></textarea><br><br>
<input type="submit" name="submit">
</form>

<?php
//find and replace application
$offset=0;
            if(isset($_POST["user1"])
                && isset($_POST["searchfor"])
                && isset($_POST["replacewith"])){
                $usertext=$_POST["user1"];
                $searchfor=$_POST["searchfor"];
                $replacewith=$_POST["replacewith"];
                $searchlength=strlen($searchfor);
                    if(!empty($usertext)
                        && !empty($searchfor)
                        && !empty($replacewith)){
                            while($strpos=strpos($usertext, $searchfor, $offset)){
                                $offset=$strpos + $searchlength;
                                $usertext= substr_replace($usertext, $replacewith, $strpos, $searchlength);
                                }
                            echo $usertext;
                        }else{
                        echo 'Please enter all fields';
                        }
                }
?>

<form action="28-1.php" method="POST">
<textarea type="text" rows=6 cols=30 name="user1"></textarea><br><br>
Search for:<input type="text" name="searchfor"><br><br>
Replace with:<input type="text" name="replacewith"><br><br>
<input type="submit" value="Find and replace" name="findandreplace"><br>
</form>
