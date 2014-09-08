<!DOCTYPE html>
<html>
<head>
    <title>WordMapping</title>
</head>
<body>
<form method="POST">
    Categories:
    <input type="text" name="categories"><br>

    Tags:
    <input type="text" name="tags"><br>

    Months:
    <input type="text" name="months"><br>
    <input type="submit" value="Generate">
</form>
<?php
    if (isset($_POST['categories']) and isset($_POST['tags']) and isset($_POST['months']) and !empty($_POST['months']) and !empty($_POST['tags']) and !empty($_POST['categories'])){
         $categorie = $_POST['categories'];
        $categorie = preg_split('/[, ]+/',$categorie);
        $tag = $_POST['tags'];
        $tag = preg_split('/[, ]+/',$tag);
        $month = $_POST['categories'];
        $month = preg_split('/[, ]+/',$month);
        $headings = ['Categories','Tags','Months'];

?>
<?php for($i=0;$i<3;$i++){ ?>
    <div style="border: 1px solid black;width: 150px; padding: 20px;margin-bottom: 10px;border-radius: 10px;">
    <h4><?=$headings[$i]?></h4>
<ul type="circle">
    <?php if($i==0){
            foreach($categorie as $cat){ ?>
            <li><?=$cat?></li>
            <?php }
         }
         if($i==1){
            foreach($tag as $ta){ ?>
            <li><?=$ta?></li>
            <?php }
         }
         if($i==2){
            foreach($month as $mon){ ?>
            <li><?=$mon?></li>
            <?php }
         } ?>
</ul>
</div>
<?php } ?>
    <?php } ?>
</body>
</html>