<form method="post">  
  Equipamento: <input type="text" name="aparelho" value="">
 Watt: <input type="number" name="watt" value="">
 Hora: <input type="number" name="hora" value="">
  
  <input type="submit" name="submit" value="Submit">  
</form>
<?php

    if(!empty($_POST['aparelho'])){
        
        $n= $_POST['watt'];
        $k = $_POST['hora'];
        $r= $n*$k;
        $cons= $r*30;
    
        echo "<hr>";
        echo "consumo: ";
        print_r( $r); echo " Kw/H";
        echo "<hr>";
        echo "consumo mensal: ";  print_r( $cons); " Kw/H";
        echo "<hr>";

        $equipa = $_POST['aparelho'];
        print_r( $equipa);

    

        $fp = fopen('m.txt', 'a+');

        fwrite($fp, var_export("Eletrodomestico: ", true));
        fwrite($fp, var_export($equipa, true));
        fwrite($fp, var_export("Consumo: ", true));
    
        fwrite($fp, var_export($r, true));
        fwrite($fp, var_export("Consumo mensal:", true));
      

        fwrite($fp, var_export($cons, true));
    
        
        fclose($fp);
    
        
}
 else{
        echo 'preencha os campos';
    }

   
?>
