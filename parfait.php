<!DOCTYPE html> 
<html> 
<head> 
    <title>Parfait</title> 
</head> 
<body> 
    <center> 
        <h1> Test d'un nombre parfait</h1> 
        <form method ="post" action =""> 
            Nombre entier : <input type="text" name="nb"> 
            <input type="submit" name="tester" value ="Tester"> 
        </form> 

        <?php 
        if (isset($_POST['tester'])) 
        { 
            $nb = $_POST['nb'];  
            $div=1;  
            $s=0; 
            while ($div < $nb)  
            {   
                if(($nb%$div)==0)  
                {           
                        $s=$s+$div;  
                }   
                $div++;  
            }   
            if($s==$nb)  
            {   
                    echo ("Le nombre ".$nb." est parfait");  
            }   
            else  
            {   
                    echo ("Le nombre ".$nb." n'est pas parfait");  
            }   
        } 
        ?> 
    </center> 
</body> 

</html> 

