<html>
<head>
    <title>SumOfNumbers</title>
</head>
<body>
<form action="" method="GET">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="age" placeholder="Age"><br>
    <input type="radio" name="gender" value="Male">
    <label>Male</label><br>
    <input type="radio" name="gender">
    <label>Female</label><br>
    <input type="submit" name="submit" value="Result">
</form>
<?php
if(isset($_GET['submit'])){
        echo "My name is {$_GET['name']}.I am {$_GET['age']} years old.I am {$_GET['gender']}.";


}
?>
</body>
</html>