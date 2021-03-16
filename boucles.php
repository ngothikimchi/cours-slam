<center>    
    <h1 class="font_h1">Cours sur les Boucles</h1>
</center>

<!-- PARTIE LA BOUCLE TANT QUE -->
       
<div class="body_container">
<h2 class="font_h2">1.   La boucle tant que </h2>
<div class="definition">La boucle « tant que » exécute une ou plusieurs instructions jusqu'à ce
que la condition ne soit plus vérifiée. Si au départ la condition n'est pas vérifiée, aucune exécution 
du bloc d'instructions n'a lieu. Le nombre d'itérations peut ne pas être connu à l'avance.  <br>
Remarque :<br> 
Dans le corps de la boucle, il faut prévoir une instruction qui fera évoluer la condition sinon on aura une boucle infinie.    
</div>
<div class="bloc_syntaxe_simple1">
    <div class="blocs">
        <div class="header_syntax">Syntaxe en Algorithme</div>
        <div class="content_syntaxe">
            Tant que <span class="italic exemple_rouge"> condition</span> faire <br>
            &nbsp;&nbsp;&nbsp;<span class="italic exemple_rouge">instruction</span> <br>
            Fin tantque <br>
        </div>  
        <div class="bloc_example">
            <div class="ex">Exemple</div>
            <div class="content_syntaxe">
            Afficher les nombres pairs de 2 à 20. <br> 
            nb <-2&nbsp;&nbsp;<span class="exemple_rouge">[initialisation]</span><br>
            tant que nb <= 20 faire&nbsp;&nbsp; <span class="exemple_rouge">[condition]</span><br> 
            &nbsp;&nbsp;&nbsp;afficher(" nombre pair:",nb)&nbsp;&nbsp;<span class="exemple_rouge"> [instruction] </span><br>
            &nbsp;&nbsp;&nbsp;nb <- nb+2&nbsp;&nbsp; <span class="exemple_rouge"> [évolution] </span><br>
            fin tant que<br>
            </div>            
        </div>
    </div>

    <div class="blocs">
        <div class="header_syntax">Syntaxe en C</div>
        <div class="content_syntaxe">
            while <span class="italic exemple_rouge">(condition)</span><br>{<br>
            &nbsp;&nbsp;&nbsp;Instruction;<br>
            }<br>
        </div>
        <div class="bloc_example">
            <div class="ex">Traduction en C</div>
            <div class="content_syntaxe">
            nb=2; <br>
            while (nb <= 20)<br>{<br>
            &nbsp;&nbsp;&nbsp;printf("Nombre pair:%d", nb);<br>
            &nbsp;&nbsp;&nbsp;nb = nb + 2;<br>
            }<br>
            </div>
        </div>
    </div>

    <div class="blocs">
        <div class="header_syntax">Syntaxe en PHP</div>
        <div class="content_syntaxe">
            while <span class="italic exemple_rouge">(condition)</span><br>{<br>
            &nbsp;&nbsp;&nbsp;Instruction;<br>
            }<br>
        </div>
        <div class="bloc_example">
            <div class="ex">Traduction en PHP</div>
            <div class="content_syntaxe">
            nb=2; <br>
            while ($nb <= 20)<br>{<br>
            &nbsp;&nbsp;&nbsp;printf("Nombre pair:%d", $nb);<br>
            &nbsp;&nbsp;&nbsp;$nb = $nb + 2;<br>
            }<br>
            </div>
        </div>
    </div>
        </div>
<!-- PARTIE LA BOUCLE FAIRE TANT QUE -->
<h2 class="font_h2">2.   La boucle faire tant que </h2>

<div class="definition">Le nombre d'itérations peut ne pas être connu à l'avance.  <br>
 
Dans le corps de la boucle, il faut prévoir une instruction qui fera évoluer la condition sinon on aura une boucle infinie.  <br>
remarque <br>
Cette boucle est un schéma inverse de la boucle tantque, le test de la condition est postérieur à l'exécution de l'instruction. Donc la particularité est que pour tester la condition on doit exécuter au moins une fois l'instruction. Comme la boucle tantque, le nombre d'itérations peut ne pas être connu à l'avance. 
Et il faut insérer dans le corps de la boucle une instruction d'évolution de la condition.    
</div>
<div class="bloc_syntaxe_simple1">
    <div class="blocs">
        <div class="header_syntax">Syntaxe en Algorithme</div>
        <div class="content_syntaxe">
            faire<br>
            &nbsp;&nbsp;&nbsp;<span class="italic exemple_rouge" >instructions</span><br>
            tant que&nbsp;<span class="italic exemple_rouge">condition</span> <br>
        </div>  
        <div class="bloc_example">
            <div class="ex">Exemple:</div>
            <div class="content_syntaxe">
            Afficher les nombres pairs de 2 à 20. <br> 
            nb<-2&nbsp;&nbsp;<span class="exemple_rouge">[initialisation]</span> <br>
            faire<br>
            &nbsp;&nbsp;&nbsp;afficher("nombre pair :",nb)&nbsp;&nbsp;<span class="exemple_rouge">[instruction]</span><br>
            &nbsp;&nbsp;&nbsp;nb<-nb+2&nbsp;&nbsp;<span class="exemple_rouge">[evolution]</span><br>
            tant que&nbsp;&nbsp;<span class="exemple_rouge">[condition]</span><br>
            </div>            
        </div>
    </div>

    <div class="blocs">
        <div class="header_syntax">Syntaxe en C</div>
        <div class="content_syntaxe">
            do { <br>
            &nbsp;&nbsp;&nbsp;<span class="exemple_rouge">[instruction]</span><br>
            }
            while <span class="italic exemple_rouge">(condition)</span><br>;
        </div>
        <div class="bloc_example">
            <div class="ex">Traduction en C:</div>
            <div class="content_syntaxe">
            nb=2; <br>
            do {<br>
            &nbsp;&nbsp;&nbsp;printf("Nombre pair :%d", nb);<br>
            &nbsp;&nbsp;&nbsp;nb = nb + 2;<br>
            }<br>
            while (nb <= 20);
            </div>
        </div>
    </div>

    <div class="blocs">
        <div class="header_syntax">Syntaxe en php</div>
        <div class="content_syntaxe">
            do { <br>
            &nbsp;&nbsp;&nbsp;<span class="exemple_rouge">[instruction]</span><br>
            }
            while <span class="italic exemple_rouge">(condition)</span><br>;
        </div>
        <div class="bloc_example">
            <div class="ex">Traduction en php:</div>
            <div class="content_syntaxe">
            $nb=2; <br>
            do {<br>
            &nbsp;&nbsp;&nbsp;printf("Nombre pair :%d", $nb);<br>
            &nbsp;&nbsp;&nbsp;$nb = $nb + 2;<br>
            }<br>
            while ($nb <= 20);
            </div>
        </div>
    </div>
</div>
<!-- PARTIE LA BOUCLE POUR -->
<h2 class="font_h2">3. La boucle pour </h2>

<div class="definition">La boucle pour est une boucle déterministe qui permet d'exécuter un bloc d'instruction un nombre de fois connu à l'avance calculé par les valeurs VD et VF et le PAS.  <br>
remarque<br>
VD : valeur de début <br> 
VF : valeur de fin  <br>
PAS : incrémentation ou décrémentation (par défaut, le pas est égal à 1 ou –1).  <br> 
</div>

<div class="bloc_syntaxe_simple1">

    <div class="blocs">
        <div class="header_syntax">Syntaxe en Algorithme</div>
        <div class="content_syntaxe">
            Pour variable allant de VD à VF pas de PAS faire<br>
            &nbsp;&nbsp;&nbsp;<span class="exemple_rouge">[instruction]</span><br>
            Fin pour&nbsp;<span class="italic exemple_rouge">condition</span> <br>
        </div>  
        <div class="bloc_example">
            <div class="ex">Exemple</div>
            <div class="content_syntaxe">
            Afficher les nombres pairs de 2 à 20. <br> 
            pour nb allant de 2 à 20 pas de 2 faire&nbsp;&nbsp;<span class="exemple_rouge">[init,cond,evol]</span><br>
            &nbsp;&nbsp;&nbsp;afficher("nombre pair :",nb)&nbsp;&nbsp;<span class="exemple_rouge">[instruction]</span><br>
            Fin pour<br>
            </div>            
        </div>
    </div>

    <div class="blocs">
        <div class="header_syntax">Syntaxe en C</div>
        <div class="content_syntaxe">
            for ( <span class="">initialisation; condition; évolution</span> ) { <br>
            &nbsp;&nbsp;&nbsp;<span class="exemple_rouge">instruction;</span><br>
            }
            while <span class="italic exemple_rouge">(condition)</span><br>;
        </div>
        <div class="bloc_example">
            <div class="ex">Traduction en C</div>
            <div class="content_syntaxe">
            for(nb=2; nb<=20; nb=nb+2)<br>{<br>
            &nbsp;&nbsp;&nbsp;printf("Nombre pair :%d", nb);<br>
            }<br>
            </div>
        </div>
    </div>

    <div class="blocs">
        <div class="header_syntax">Syntaxe en PHP</div>
        <div class="content_syntaxe">
            for ( <span class="example_rouge">initialisation; condition; évolution</span> ) { <br>
            &nbsp;&nbsp;&nbsp;<span class="exemple_rouge">instruction;</span><br>
            }
            while <span class="italic exemple_rouge">(condition)</span><br>;
        </div>
        <div class="bloc_example">
            <div class="ex">Traduction en PHP</div>
            <div class="content_syntaxe">
            for($nb=2; $nb<=20; $nb=$nb+2)<br>{<br>
            &nbsp;&nbsp;&nbsp;printf("Nombre pair :%d", $nb);<br>
            }<br>
            </div>
        </div>
    </div>
</div>

<!-- EXEMPLES -->
<!-- BLOC EXEMPLE 1 -->
<div class="illustration">
<div class="sujet font3">
    <span class="italic font_h1">Exercice 1:&nbsp;</span> Ecrire un algo qui permet d’additionner tous les nombres compris entre deux limites entières. Le traduire en C et en PHP 
</div>
<!-- BLOC ALGO EXO 1 -->
<div class="sujet font3">Algorithme</div>
<div class="sujet_algo">
    <pre>
        <code class="prettyprint">
Algo : exo1  
Déclaration  
Lim1, lim2, somme, nb : entier  
Début  
Afficher ("Donner la limite inférieure :") 
Saisir (lim1) 
Afficher ("Donner la limite supérieure :") 
Saisir (lim2) 
somme <- 0  
Pour nb allant de lim1 à lim 2  faire 
                somme <- somme+nb 
Fin pour 
Afficher (" la somme est de : ", somme ) 
Fin exo1  
 
        </code>
    </pre>
</div>
<!-- BLOC LANGAGE C EXO1 -->
<div class="sujet font3">Traduction en langage C</div>

<div class="sujet_algo">
    <pre>
        <code class="prettyprint">
#include &lt;stdio.h&gt; 
int main () { 
    int lim1, lim2, somme, nb ; 
 
    printf("Donner la limite inferieur:\n "); 
    scanf ("%d", &lim1); 
 
    printf("Donner la limite superieur:\n "); 
    scanf ("%d", &lim2); 
    somme =0; 
 
    for (nb= lim1; nb <= lim2; nb = nb+1) 
    {  
        somme = somme + nb; 
    }  
    printf("La somme est de : %d", somme); 
    return 0; 
} 

        </code>
    </pre>
</div>
<!-- BLOC CODE PHP EXO 1 -->
<div class="sujet font3">Demo en PHP</div>
<form method="post"> 
<span class="font_label">Limite 1 :</span> <input type="text" name="lim1">  
 
  
<span class="font_label">Limite 2 :</span><input type="text" name="lim2">  
    <br/>  
    <input type="reset" name="Annuler" value="Annuler">  
    <input type="submit" name="calculer" value="Calculer">  
</form>  
  
<?php  
    if (isset($_POST["calculer"]))  
    {   
         $lim1 = $_POST["lim1"];  
         $lim2 = $_POST["lim2"];  
          $somme =0;  
  
          for ($nb= $lim1; $nb <= $lim2; $nb = $nb+1)  
              {   
                $somme = $somme + $nb;  
              }   
          printf("<br/> La somme des nombres est de : %d", $somme);  
  
    }   
?>  
</div>

<!-- BLOC EXEMPLE 2 -->

<div class="illustration">
    <div class="sujet font3">
        <span class="italic font_h1">Exercice 2:</span> Ecrire un algo, prog C et dev PHP qui permet de saisir un nombre entier et d'afficher ses diviseurs.  <br>
        Exemple : nb = 10 les diviseurs de 10 sont : 1, 2, 5, 10.  <br>
        Utilisez l'opérateur modulo : % 

    degré a*x + b = 0  
    </div>
<!-- BLOC ALGO EXO2 -->
    <div class="sujet font3">Algorithme</div>
    <div class="sujet_algo">
        <pre>
            <code class="prettyprint">
Algo : exo2 
Déclaration 
nb, div : entier  
Début 
    Affichier (" donner le nombre : ") 
    Saisir (nb)     
    Pour div allant de 1 à nb faire 
        Si nb % div = 0 
        alors Afficher(div, "est diviseur de ", nb) 
        Finsi  
    Fin pour 
Fin exo2 

            </code>
        </pre>
    </div>
<!-- BLOC LANGAGE C EXO2 -->
    <div class="sujet font3 ">Traduction en langage C</div>
    <div class="sujet_algo">
    <pre>
        <code class="prettyprint">
#include &lt;stdio.h&gt; 
int main() 
{  
int n, i ; 
printf("Entrer un nombre : "); 
scanf("%d",''&n''); 
printf ("Les diviseurs de %d sont : ",n); 
i  = 1;  
while(i <= n) 
{  
    if((n%i)==0) 
    {  
        printf(", %d ",i); 
    } 
    i = i+1; 
}  
return 0; 
}  
</code>
    </pre>
</div>
<!-- BLOC CODE PHP EXO2 -->
<div class="sujet font3">Demo en PHP</div>

    <form method ="post"> 
    <span class="font_label">Nombre :</span><input type="text" name="nb">  
      
    <input type="submit" name="rechercher" value="Rechercher">  
    </form>  
  
<?php  
    if (isset($_POST["rechercher"]))  
    {   
        $nb = $_POST["nb"];  
        $i  = 1;   
        echo "<br> Les diviseurs de ".$nb. " sont : <br/>"; 
        while($i <= $nb)  
        {   
            if(($nb % $i)==0)  
            {   
                printf(" %d ; ",$i);  
            }  
            $i = $i+1;  
        }   
    }   
?>  

</div>

<!-- BLOC EXEMPLE 3 -->
<div class="illustration">
    <div class="sujet font3">
        <span class="italic font_h1">Exercice 3:</span> Ecrire un algo / C / PHP qui permet de saisir un nombre entier et une limite et affiche la table de multiplication d’un nombre jusqu'à la limite fixée par l'utilisateur 
    </div>
<!-- BLOC ALGO EXO3 -->
    <div class="sujet font3">Algorithme</div>
    <div class="sujet_algo">
        <pre>
            <code class="prettyprint">
Algo : exo3  
Déclaration  
nb, lim, mult, res : entier 
Début 
    Afficher ("donner un nombre entier : ") 
    Saisir (nb) 
    Afficher ("donner une limite : ") 
    Saisir (lim) 
    Pour mult allant de 1 à lim faire 
        Res <-  nb * mult 
        Afficher  ( mult , " *  ", nb, "=" , res) 
    Fin pour 
Fin exo3 

            </code>
        </pre>
    </div>

    <!-- BLOC LANGAGE C EXO3 -->
    <div class="sujet font3">Traduction en C</div>
    <div class="sujet_algo">
    <pre>
        <code class="prettyprint">
#include &lt;stdio.h&gt; 
#include &lt;math.h&gt;
int main() 
{  
int nb1,nb2,i,t; 
 
printf("Entrer un nombre a multiplier : "); 
scanf("%d",&nb1); 
 
printf("Entrer la limite jusqu'a laquelle on va multiplier le nombre 1 : "); 
scanf("%d",&nb2); 
 
for(i=1;i<=nb2;i++) 
{  
    t=i*nb1; 
    printf("%d * %d = %d \n",nb1,i,t); 
}  
return 0; 
}  

        </code>
    </pre>
</div>


<!-- BLOC PHP EXEMPLE 3 -->
<div class="sujet font3">Demo en PHP</div>

    <form method ="post"> 
    <span class="font_label">Le premier nombre: </span><input type="text" name ="nb1"/> <br>
    <span class="font_label">Le deuxieme nombre:  </span><input type="text" name ="nb2"/><br>

    
    <input type="reset" name="annuler" value="Annuler"/> 
    <input type="submit" name="calculer" value="Calculer"/> 
    </form> 
    <?php 
    if (isset($_POST["calculer"])) 
    {  
$nb1 =$_POST["nb1"];
 
$nb2 =$_POST["nb2"];
 
for($i=1;$i<=$nb2;$i++) 
{  
    $t=$i*$nb1; 
    printf("%d * %d = %d \n",$nb1,$i,$t); 
}  
}  
    ?> 


</div>

<!-- BLOC EXEMPLE 4 -->
<div class="illustration">
    <div class="sujet font3">
        <span class="italic font_h1">Exercice 4:</span>&nbsp;Ecrire un algo / C /PHP qui permet de saisir un nombre et de vérifier si celui-ci est un nombre parfait. Un nombre est dit parfait s'il est égal à la somme de ses diviseurs sauf lui-même.  <br>
Le nombre 28 est parfait : 1+ 2+4+7+14 = 28  <br>
Le nombre 6 : 1+2+3 =  6  

    </div>
    <!-- BLOC ALGO EXEMPLE 4 -->
    <div class="sujet font3">Algorithme</div>
    <div class="sujet_algo">
        <pre>
            <code class="prettyprint">
Algo : parfait  
Déclaration  
Nb : entier  
Div, somme : entier  
Début  
    Afficher("Donner un nombre :") 
    Saisir (nb)  
    Pour div allant de 1 à (nb-1) faire 
        Si nb%div = 0  
            Alors s <- s+div 
        finsi 
    FinPour 
    Si s=nb 
        Alors afficher(‘le nombre est parfait’) 
        Sinon afficher(‘le nombre n’est pas parfait’) 
    Finsi 
IFIn  
FIn parfait  

            </code>
        </pre>
    </div>  
    <!-- BLOC LANGAGE C EXEMPLE 4 -->
    <div class="sujet font3">Traduction en C</div>
    <div class="sujet_algo">
        <pre>
            <code class="prettyprint">
#include &lt;stdio.h&gt; 
int main() 
    {  
    int nb,div,s; 
    printf("Entrer un nombre : "); 
    scanf("%d",&nb); 
    div=1; 
    s=0; 
    while (div < nb) 
    {  
        if((nb%div)==0) 
        {          
                s=s+div; 
        }  
        div++; 
    }  
    if(s==nb) 
    {  
        printf("Le nombre est parfait"); 
    }  
    else 
    {  
        printf("Le nombre n'est pas parfait"); 
    }  
return 0; 
}

            </code>
        </pre>
    </div>
    
<!-- BLOC LANGAGE PHP EXEMPLE 4 -->
<div class="sujet font3">Demo en PHP</div>
<form method="post">
<span class="font_label">Nombre entier : </span>        <input type="text" name="nb"> 
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



</div>

<!-- BLOC EXEMPLE 5 -->
<div class="illustration">
    <div class="sujet font3">
        <span class="italic font_h1">Exercice 5:</span> &nbsp;Modifier l'exo 4 en ajoutant la recherche des nombres parfaits compris entre deux limites entières saisies par l'utilisateur.  

    </div>
    <!-- BLOC ALGO EXEMPLE 5 -->
    <div class="sujet font3">Algorithme</div>
    <div class="sujet_algo">
        <pre>
            <code class="prettyprint">
Algo : parfait  
Déclaration  
Nb : entier  
Div, somme : entier  
Début  
    Afficher("Donner un nombre :") 
    Saisir (nb)  
    Pour div allant de 1 à (nb-1) faire 
        Si nb%div = 0  
            Alors s <- s+div 
        finsi 
    FinPour 
    Si s=nb 
        Alors afficher(‘le nombre est parfait’) 
        Sinon afficher(‘le nombre n’est pas parfait’) 
    Finsi 
IFIn  
FIn parfait  

            </code>
        </pre>
    </div>  
    <!-- BLOC LANGAGE C EXEMPLE 5 -->
    <div class="sujet font3">Traduction en C</div>
    <div class="sujet_algo">
        <pre>
            <code class="prettyprint">
#include &lt;stdio.h&gt; 
int main() 
{  
int nb1,nb2,div,s,nb; 
printf("Entre limite 1 : "); 
scanf("%d",&nb1); 
printf("Entre limite 2 : "); 
scanf("%d",&nb2); 
printf("Nombres parfaits : "); 
for(nb=nb1;nb<=nb2;nb++) 
{  
    div=1; 
    s=0; 
    while (div < nb) 
    {  
        if((nb%div)==0) 
        {  
            s=s+div; 
        }  
        div++; 
    }  
    if(s==nb) 
    {  
        printf("%d ; ",nb); 
    }  
}  
return 0; 
} 


            </code>
        </pre>
    </div>
    
<!-- BLOC LANGAGE PHP EXEMPLE 5 -->
<div class="sujet font3">Demo en PHP</div>
<form method="post">
<span class="font_label">Limite 1 : </span> <input type="text" name="nb1"> <br/> 
<span class="font_label">Limite 2 : </span> <input type="text" name="nb2"> <br/> 
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




</div>

<!-- BLOC EXEMPLE 6 -->
<div class="illustration">
    <div class="sujet font3">
        <span class="italic font_h1">Exercice 6:</span> Ecrire un algo / C / PHP qui permet de saisir dix notes des étudiants et affiche la moyenne des notes, la note max et la note min des notes saisies.

    </div>
    <!-- BLOC ALGO EXEMPLE 6 -->
    <div class="sujet font3 ">Algorithme</div>
    <div class="sujet_algo">
        <pre>
            <code class="prettyprint">
Algo : notes 
Déclaration 
note, moyenne, s, noteh, noteb : réel 
i : entier 
Début 
    noteh<-0 
    noteb<-20 
    s<-0 
    Pour i allant de 1 à 10 faire 
        Afficher ("saisir la note de l’étudiant", i ) 
        Saisir (note) 
        s<-s+note  
        Si note > noteh 
            Alors noteh<-note 
        finsi 
        Si note < noteb 
            Alors noteb<-note 
        finsi 
    Finpour 
    moyenne <- s / 10 
    Afficher ("la moyenne est de:",moyenne) 
    Afficher("la note la plus haute est :", noteh) 
    Afficher("la note la plus basse est :", noteb) 
Fin notes 


            </code>
        </pre>
    </div>  
    <!-- BLOC LANGAGE C EXEMPLE 6 -->
    <div class="sujet font3">Traduction en C</div>
    <div class="sujet_algo">
        <pre>
            <code class="prettyprint">
#include &lt;stdio.h&gt; 
int main()  
{    
float note,moyenne,s,noteh,noteb; 
int i ; 
noteh=0; 
noteb=20; 
s=0; 
for(i=1 ; i<=10 ; i=i+1){  
    printf("saisir la note de l’étudiant : ");  
    scanf("%f",&note);  
    s=s+note; 
    if (note>noteh) 
    {  
        noteh=note;  
    }  
    if(note< noteb) 
    {  
        noteb=note; 
    }  
}  
moyenne=s/10; 
printf("la moyenne est de : %f",moyenne );  
printf("la note la plus haute est de: %f", noteh);  
printf("la note la plus basse est de: %f", noteb);  
return 0; 
} 
 


            </code>
        </pre>
    </div>
    
<!-- BLOC LANGAGE PHP EXEMPLE 6 -->
<div class="sujet font3">Demo en PHP</div>
<form method="post">
<span class="font_label">Note 1 : </span><input type="text" name="note_1"> <br/>
<span class="font_label">Note 2 : </span><input type="text" name="note_2"> <br/> 
<span class="font_label">Note 3 : </span><input type="text" name="note_3"> <br/> 
<span class="font_label">Note 4 : </span><input type="text" name="note_4"> <br/> 
<span class="font_label">Note 5 : </span><input type="text" name="note_5"> <br/> 
<span class="font_label">Note 6 : </span><input type="text" name="note_6"> <br/> 
<span class="font_label">Note 7 : </span><input type="text" name="note_7"> <br/> 
<span class="font_label">Note 8 : </span><input type="text" name="note_8"> <br/> 
<span class="font_label">Note 9 : </span><input type="text" name="note_9"> <br/> 
<span class="font_label">Note 10 : </span><input type="text" name="note_10"> <br/>  

<input type="submit" name="calculer_note" value ="Calculer"> 
</form> 
<?php 
if (isset($_POST['calculer_note'])) 
{    
    $noteh=0; 
    $noteb=20;   
    $s=0;
    $note_1 = $_POST['note_1'];
    $note_2 = $_POST['note_2'];  
    $note_3 = $_POST['note_3'];    
    $note_4 = $_POST['note_4'];  
    $note_5 = $_POST['note_5'];  
    $note_6 = $_POST['note_6'];  
    $note_7 = $_POST['note_7'];  
    $note_8 = $_POST['note_8'];  
    $note_9 = $_POST['note_9'];  
    $note_10 = $_POST['note_10'];  
    
    // Mettre les notes dans une array
    $arr_note = array($note_1, $note_2, $note_3, $note_4,$note_5,$note_6,$note_7, $note_8, $note_9, $note_10);

    // Boucler tous les éléments de l'array pour trouver les notes min, max
    for($i = 0; $i < count($arr_note); ++$i) 
    {
        $s = $s + $arr_note[$i];
        if ($arr_note[$i]>$noteh) 
        {  
            $noteh=$arr_note[$i];  
        }  
        if($arr_note[$i]< $noteb) 
        {  
            $noteb=$arr_note[$i]; 
        }  
    }
    
    $moyenne = $s/10; 
    printf("la moyenne est de : %f <br>",$moyenne );  
    printf("la note la plus haute est de: %f <br>", $noteh);  
    printf("la note la plus basse est de: %f <br>", $noteb);
} 

?>
</div>
</div>


<center>
    <button class="click_haut " onclick="scrollToTop()"> 
    Cliquez pour faire défiler vers le haut
    </button> 
</center>