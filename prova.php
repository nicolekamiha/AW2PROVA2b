<form method = "post"> 




 Equipamento: <input type = "text" name = "aparelho" value = "">


Watt: <input type = "number" name = "watt" value = "">


Hora: <input type = "number" name = "hora" value = "">






 <input type = "submit" name = "submit" value = "Submit"> 


</form>


<? php







   if (! empty ($ _ POST ['aparelho'])) {


      


       $ n = $ _POST ['watt'];


       $ k = $ _POST ['hora'];


       $ r = $ n * $ k / 1000;


       $ cons = $ r * 31;


  


       session_start ();


       $ _SESSION ['soma'] = $ _SESSION ['soma'] + $ cons;


       echo "<hr>";


       echo "Consumo total:";







        echo $ _SESSION ['soma']; echo "Kw / H";


       echo "<hr>";


       echo "Consumo:";


       print_r ($ r); echo "Kw / H";


       echo "<hr>";


       echo "Consumo mensal:"; print_r ($ cons); echo "Kw / H";


       echo "<hr>";







       $ equipa = $ _POST ['aparelho'];


       print_r ($ equipa);







  







       $ fp = fopen ('m.txt', 'a +');







       fwrite ($ fp, var_export ("Eletrodomestico:", true));


       fwrite ($ fp, var_export ($ equipa, true));


       fwrite ($ fp, var_export ("Consumo:", true));


  


       fwrite ($ fp, var_export ($ r, true));


       fwrite ($ fp, var_export ("Consumo mensal:", true));


    







       fwrite ($ fp, var_export ($ cons, true));


  


      


    







       fwrite ($ fp, var_export ("Consumo total:", verdadeiro));


       fwrite ($ fp, $ _SESSION ['soma'], true);


    


fclose ($ fp);


}


outro{


       echo 'preencha os campos';


   }







 


?>


