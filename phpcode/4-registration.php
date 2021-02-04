<html>
    <head>
    <style>
    table{
        background-color:black;
        border:solid red 5px;
        border-radius:10px;
        padding:12px;
        height:20%;
        width:30%;
    }
    .red{
        background-color:red;
        border-radius:15px;
        color:black;
        font-size:20px;
    }
    td{
        padding:7px;
    }
    th{
        background-color:red;
        border-radius:10px;
        padding:10px;
        font-size:25px;
    }
    .error{
        position:absolute;
        padding:0px;
        font-size:12px;
        color:red;
        margin:0px;
    }
    .button{
        padding:8px 8px;
        text-align:center;
    }
    .black{
        background-color:black;
        color:red;
        font-size:15px;
        text-align:center;
        border-radius:10px;
        padding:5px;
    }
    </style>
    </head>
<form action="4-registration.php" method="POST">
<table>

<tr>
<th colspan="2"><center><p><strong>REGISTRATION</strong></p></center></th>
<tr>

<tr>
<td class="red">Name:</td>
<td><input type="text" name="name"><br>
        <?php 
        if(isset($_POST['submit'])){
            if(empty($_POST['name'])){
                echo '<p class="error color">*Please enter the NAME</p><br>';
            }else{
            $name=$_POST['name'];
            echo '<strong>Name: </strong>'.$name.'<br>';
        }}
        ?></td>
</tr>

<tr>
<td class="red">Surname:</td>
<td><input type="text" name="surname"><br>
        <?php 
        if(isset($_POST['submit'])){
            if(empty($_POST['surname'])){
                echo '<p class="error color">*Please enter the SURNAME</p><br>';  
            }else{
            $surname=$_POST['surname'];
            echo '<strong>Surame: </strong>'.$name.'<br>';
            }}
        ?></td>
</tr>

<tr>
<td class="red">E-mail:</td>
<td><input type="email" name="email"><br>
        <?php 
        if(isset($_POST['submit'])){
            if(empty($_POST['name'])){
                echo '<p class="error color">*Please enter the E-MAIL</p><br>';
            }else{
            $name=$_POST['name'];
            echo '<strong>Name: </strong>'.$name.'<br>';
        }}
        ?></td>
</tr>

<tr>
<td class="red">Password:</td>
<td><input type="password" name="password"><br>
        <?php 
        if(isset($_POST['submit'])){
            if(empty($_POST['name'])){
                echo '<p class="error color">*Please enter the PASSWORD</p><br>';
            }else{
            $name=$_POST['name'];
            echo '<strong>Name: </strong>'.$name.'<br>';
        }}
        ?></td>
</td>

<tr>
<td class="red">Phone no.:</td>
<td><input type="number" name="number"><br>
        <?php 
        if(isset($_POST['submit'])){
            if(empty($_POST['name'])){
                echo '<p class="error color">*Please enter the PHONE NO.</p><br>';
            }else{
            $name=$_POST['name'];
            echo '<strong>Name: </strong>'.$name.'<br>';
        }}
        ?></td>
</tr>

<tr>
<td colspan="2" class="red button"><input class="black" type="submit" name="submit" value="LOG IN"></td>
</tr>

<tr>
<td colspan="2" class="red button"><input  class="black" type="submit" name="registration" value="REGISTER"></td>
</tr>

</form>
</html>