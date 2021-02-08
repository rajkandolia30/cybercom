<?php?>

<html>
    <head>
    <title>Create</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css files/create.css">
    </head>
<body>
    <div class="title container" >
            Website title
            <i class="fa fa-home home"><a href="home page.php">Home</a></i>
            <i class="far fa-address-book contact">Contact</i>
    </div>
    
    <div>
        <h3>Create Contact</h3>
    </div>
        <hr>
    <br>
    <div>
        <form>
        <table>
            <tr>
                <td>Name</td>
            </tr>

            <tr>
                
                <td><input type="text" placeholder="John doe" id="name" name="name"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td>Phone</td>
            </tr>

            <tr>
                <td><input type="email" placeholder="johndoe@example.com" id="email" name="email"></td>
                <td><input type="number" placeholder="2025550143" id="phone" name="phone"></td>
            </tr>

            <tr>
                <td>Title</td>
                <td>Created</td>
            </tr>

            <tr>
                <td><input type="text" placeholder="Employee" id="employee" name="employee"></td>
                <td><input type="text" placeholder="16/19/2020 23:00" id="created" name="created"></td>
            </tr>
            
            <tr>
                <td><button type="button" class="green" name="submit" onclick="insert()">Create</button></td>
            </tr>
        </table>
        </form>
    </div>
        <script type="text/javascript" src="../js files/application.js"></script>
        <p id="table"></p>
</body>
</html>