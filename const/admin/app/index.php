<?php
    include 'config.php';
    $admin=new admin()
<html>
    <head>
        <title>php page</title>
</head>
<body>
    <h1>this is php page<h1>
       <?php 
       $name="Raj";
       $age=20;
       ?>
       <h1>my name is<?php echo $name;?> and i am <?php echo $age;?>years old</h1>
</body>
<table border="2px">
<tr>
    <th>id</th>
    <th>name</th>
    <th>age</th>
    <th>phone number</th>
</tr>
<tr>
    <th>1</th>
    <th>tina</th>
    <th>20</th>
    <th>9087654321</th>
</tr>
  

</html>