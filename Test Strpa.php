<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тест Струпа</title>
    <link rel="stylesheet" href="style.css">
    <link rel="php" href="Test Strpa.php">
</head>
<body>
<?php
$spread = 25;
for ($row = 0; $row < 100; ++$row) {
        for($c=0;$c<3;++$c) {
        $color[$c] = rand(0+$spread,255-$spread);
    }
    echo "<div style='float:left; background-color:rgb($color[0],$color[1],$color[2]);'>&nbsp;Base Color&nbsp;</div><br/>";
    for($i=0;$i<92;++$i) {
    $r = rand($color[0]-$spread, $color[0]+$spread);
    $g = rand($color[1]-$spread, $color[1]+$spread);
    $b = rand($color[2]-$spread, $color[2]+$spread);    
    echo "<div style='background-color:rgb($r,$g,$b); width:10px; height:10px; float:left;'></div>";
    }    
    echo "<br/>";
}
?>
    <div class="first_line"> 
        <div class="fl_fc">Lime</div>
        <div class="fl_sc">Red2</div>
        <div class="fl_tc">Red</div>
        <div class="fl_foc">Pink</div>
        <div class="fl_fic">Green</div>
    </div>
    <div class="second_line"> 
        <div class="sl_fc">Coral</div>
        <div class="sl_sc">Teal2</div>
        <div class="sl_tc">Teal</div>
        <div class="sl_foc">Moccasin</div>
        <div class="sl_fic">Tomato</div>       
    </div>
    <div class="third_line"> 
        <div class="tl_fc">Cyan</div>
        <div class="tl_sc">Violet2</div>
        <div class="tl_tc">Violet</div>
        <div class="tl_foc">Blue</div>
        <div class="tl_fic">Indigo</div>               
    </div>
    <div class="fourth_line"> 
        <div class="fol_fc">Navy</div>
        <div class="fol_sc">Tan2</div>
        <div class="fol_tc">Tan</div>
        <div class="fol_foc">Fuchsia</div>
        <div class="fol_fic">Olive</div>               
    </div>
    <div class="five_line"> 
        <div class="fil_fc">Plum</div>
        <div class="fil_sc">Lavender2</div>
        <div class="fil_tc">Lavender</div>
        <div class="fil_foc">Bisque</div>
        <div class="fil_fic">Maroon</div>              
    </div>
</body>
</html>