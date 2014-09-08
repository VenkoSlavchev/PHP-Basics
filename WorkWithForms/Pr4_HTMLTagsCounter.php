<?php
    session_start();
    echo"<form action='' method='GET'>";
    echo "<label>Enter HTML tags:</label> <br>";
    echo"<input type='text' name='textField'> ";
    echo"<input type='submit' value='Submit' name='submitButton'>";
    echo"</form>";

    if(isset($_GET['submitButton'])){
        $allTags = array('a','abbr','acronym','address','applet','area','article','aside','audio','b','base','basefont','bdi','bdo','bgsound','big','blink','blockquote','body','br','button','canvas','caption','center','cite','code','col','colgroup','content','data','datalist','dd','decorator','del','details','dfn','dialog','dir','div','dl','dt','element','em','embed','fieldset','figcaption','figure','font','footer','form','frame','frameset','h1','h2','h3','h4','h5','h6','head','header','hgroup','hr','html','i','iframe','img','input','ins','isindex','kbd','keygen','label','legend','li','link','listing','main','map','mark','marquee','menu','menuitem','meta','meter','nav','nobr','noframes','noscript','object','ol','optgroup','option','output','p','param','picture','plaintext','pre','progress','q','rp','rt','ruby','s','samp','script','section','select','shadow','small','source','spacer','span','strike','strong','style','sub','summary','sup','table','tbody','td','template','textarea','tfoot','th','thead','time','title','tr','track','tt','u','ul','var','video','wbr','xmp');
        if (!isset($_SESSION["score"])){
            $_SESSION["score"]=0;
        }
        $textInfo = $_GET['textField'];
        $count=0;
        if(in_array($textInfo,$allTags)){
            echo"<p style='font-size:35px'>Valid HTML tag!</p> <br>";
            $_SESSION["score"]++;
        }else{
            echo"<p style='font-size:35px'>Invalid HTML tag!</p> <br>";
        }
    }

    echo "<div class='info' style='font-size:25px'>Score: " . $_SESSION["score"] . "</div>";
?> 