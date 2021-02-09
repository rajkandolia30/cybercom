<?php  include '../php files/showcontact.php'; ?>
<html>
    <head>
    <title>Contact</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css files/contact.css">
    </head>
<body>
    <div class="title container" >
            Website title
            <i class="fa fa-home home"><a href="home page.php">Home</a></i>
            <i class="far fa-address-book contact"><a href="contact.php">Contact</a></i>
    </div>
    
    <div>
        <h3>Contact</h3>
    </div>
        <hr>
    
    <div>
        <button type="button" class="green"><a href="create.php">Create Contact</a></button>
    </div>
    <br>
    <div>
        <table id="contact_table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Title</th>
                <th>Created</th>
                <th></th>
            </tr>
            <?php echo $result;?>
        </table>
    </div>
    <script type="text/javascript" src="../js files/application.js"></script>
</body>
</html>