<!DOCTYPE html> 
<html> 
<head> 
    <title>Parfaits</title> 
</head> 

<body> 
    <center> 
        <h1> Afficher une liste de nombres parfaits</h1> 

        <form method ="post" action =""> 

            Limite 1 : <input type="text" name="nb1"> <br/> 

            Limite 2 : <input type="text" name="nb2"> <br/> 

            <input type="submit" name="rechercher" value ="Rechercher"> 

        </form> 

        <?php 

        if (isset($_POST['rechercher'])) 
        { 
            $nb1 = $_POST['nb1'];  
            $nb2 = $_POST['nb2'];  
            for ($nb = $nb1; $nb <= $nb2 ; $nb++) 
            { 
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
                        echo ("<br/>Le nombre ".$nb." est parfait");  
                }   
            } 
        } 
        ?> 
    </center> 
</body> 

</html> 
