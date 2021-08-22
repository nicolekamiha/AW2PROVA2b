<form method="post">  
  Equipamento: <input type="text" name="aparelho[]" value="">
 Watt: <input type="text" name="watt" value="">
 Hora: <input type="text" name="hora" value="">
 <br>
 Equipamento: <input type="text" name="aparelho[]" value="">
 Watt: <input type="text" name="w" value="">
 Hora: <input type="text" name="h" value="">
 <br>
 Equipamento: <input type="text" name="aparelho[]" value="">
 Watt: <input type="text" name="t" value="">
 Hora: <input type="text" name="a" value="">
 <br>
  
  <input type="submit" name="submit" value="Submit">  
</form>
<?php

    if(!empty($_POST['aparelho'])){
        
        $n= $_POST['watt'];
        $k = $_POST['hora'];
        $x= $_POST['w'];
        $y = $_POST['h'];
        $t= $_POST['t'];
        $a = $_POST['a'];
        $r= $n*$k;
        $z= $x*$y;
        $b= $a*$t;
        $h= $r+$z+$b;
       
       echo"equipamento:"; echo " ";print_r( $r); 
       echo " Kw/H";
          echo "<hr>";
          echo"equipamento:"; echo " "; print_r( $z); 
          echo " Kw/H";
        echo "<hr>";
        echo"equipamento:"; echo " ";   print_r( $b); 
        echo " Kw/H";
        echo "<hr>";
        echo"Total:" ; echo " ";  print_r( $h); 
        echo " Kw/H";
        echo "<hr>";

        $equipa = $_POST['aparelho'];
        print_r( $equipa);
        $fp = fopen('m.txt', 'a+');
        fwrite($fp, var_export($equipa, true));
    
        fwrite($fp, var_export($r, true));
        fwrite($fp, var_export("", true));
        fwrite($fp, var_export($z, true));
        fwrite($fp, var_export("", true));
        fwrite($fp, var_export($z, true));
        fwrite($fp, var_export("", true));
        fwrite($fp, var_export($b, true));
        fwrite($fp, var_export("", true));
        fwrite($fp, var_export($h, true));

}

 else{
        echo 'preencha os campos';
    }
 ?>
