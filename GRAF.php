<!DOCTYPE html>
<html>
 <head>
 <title>Graf</title>
 <meta charset="utf-8">
 <body style="background-color:#DCDCDC;">
 <style>
* {box-sizing: border-box}
.container {
  width: 100%;
  background-color: #F0FFFF;
}

.styl {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}

.P {width:  80%; background-color: #4CAF50;}
.D {width: 20%; background-color: #2196F3;}
.T {width: 100%; background-color: #f44336;}
 </style>
 </head>
 <body>
 
    <form action="index.php" method="GET">
     <input type="text" name="data" value="<?php echo $data ?>" placeholder="vložte tři čísla">
     <input type="submit" value="Go">
    </form>
   
    <?php
    $data=filter_input(INPUT_GET, "data");
    $pole=explode(",", $data);
    for($i=0;$i<count($pole);$i++) {
        $pole[$i]=intval($pole[$i]);
    } 
    $max=$pole[0];
    foreach($pole as $val){
        if($val>$max){
            $max=$val;
        }
    }
    foreach($pole as $val) {
      echo "$val";
      echo "\n";
  }  
  echo "<br>";
    if($max>100){
        for($i=0;$i<count($pole);$i++){
            $pole[$i]=100*$pole[$i]/$max;
        }
    }
    foreach($pole as $val) {
        echo "$val";
        echo "\n";
    }  

    
    foreach($pole as $val) {
        echo "<p>";
        for($i=0;$i<$val;$i++){
            echo "#";
        }
        echo "</p>\n";
    }
    ?>
    <p><u><strong>Řádkový Graf</strong></u></p>
    <p>1.</p>
<div class="container">
  <div class="styl P"></div>
</div>
<p>2.</p>
<div class="container">
  <div class="styl D"></div>
</div>
<p>3.</p>
<div class="container">
  <div class="styl T">
  </div>
</div>
 </body>
</html>