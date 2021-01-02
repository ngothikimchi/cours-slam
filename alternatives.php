
<center>
<h1>Cours sur les alternatives</h1>
</center>

<!-- PARTIE ALTERNATIVE SIMPLE -->
<h2>1. L'alternative simple</h2>
<div class="definition">L'alternative simple permet d'exécuter une ou plusieurs instructions si 
une condition est vérifiée. Dans le cas contraire, le bloc d'instructions est simplement sauté. <br>
La condition peut être simple ou composée à l'aide des opérateurs logiques : et (&&) , ou (||) et non (!).  
</div>

<div class="bloc_syntaxe_simple">
    <div class="blocs">
        <div class="header_syntax">Syntaxe en Algorithme</div>
        <div class="content_syntaxe">
            Si <span class="italic">condition</span> <br>
            &nbsp;&nbsp;&nbsp;Alors <span class="italic">instruction</span> <br>
            Finsi <br>
        </div>  
        <div class="bloc_example">
            <div class="ex">Exemple:</div>
            <div class="content_syntaxe">
            Si note < 0 ou note > 20 <br> 
            &nbsp;&nbsp;&nbsp;Alors afficher ("Erreur de saisie ") <br>
            Finsi  <br>
            </div>            
        </div>
    </div>
    <div class="blocs">
        <div class="header_syntax">Syntaxe en C</div>
        <div class="content_syntaxe">
            If <span class="italic">(condition)</span> <br>
            &nbsp;&nbsp;{<br>
            &nbsp;&nbsp;&nbsp;Instruction;<br>
            &nbsp;&nbsp;}<br>
        </div>
        <div class="bloc_example">
            <div class="ex">Traduction en C:</div>
            <div class="content_syntaxe">
            if ( note < 0 || note > 20)  <br> 
            &nbsp;{<br>
            &nbsp;&nbsp;&nbsp;printf ("Erreur de saisie ");  <br>
            &nbsp;}<br>
            </div>
        </div>


    </div>
    <div class="blocs">
        <div class="header_syntax">Syntaxe en PHP</div>
        <div class="content_syntaxe">
            If <span class="italic">(condition)</span> <br>
            &nbsp;&nbsp;{<br>
            &nbsp;&nbsp;&nbsp;Instruction;<br>
            &nbsp;&nbsp;}<br>
        </div>
        <div class="bloc_example">
            <div class="ex">Traduction en PHP:</div>
            <div class="content_syntaxe">
            if ($note < 0 || $note > 20 )   <br> 
            &nbsp;{<br>
            &nbsp;&nbsp;&nbsp;echo " Erreur de saisie ";<br>
            &nbsp;}<br>
            </div>
    </div>       
    </div>   
</div>
<!-- PARTIE ALTERNATIVE double -->
<h2>2. L'alternative double</h2>
<div class="definition">L'alternative double exécute l'une des deux conditions selon la vérification de la condition. 
On dit qu'il y a une exclusion mutuelle : soit l'une qui est exécutée soit l'autre instruction qui est exécutée, 
jamais les deux à la fois, et elles ne seront pas sautées les deux à la fois.    
</div>
<div class="bloc_syntaxe_double">
    <div class="blocs">
        <div class="header_syntax">Syntaxe en Algorithme</div>
        <div class="content_syntaxe">
            Si <span class="italic">condition</span> <br>
            &nbsp;&nbsp;&nbsp;Alors <span class="italic">instruction 1</span> <br>
            &nbsp;&nbsp;&nbsp;Si non <span class="italic">instruction 2</span> <br>
            Finsi <br>
        </div>  
        <div class="bloc_example">
            <div class="ex">Exemple:</div>
            <div class="content_syntaxe">
            Si moyenne >= 10 <br> 
            &nbsp;&nbsp;&nbsp;Alors afficher ("Elève Admis ") <br>
            &nbsp;&nbsp;&nbsp;Sinon afficher ("Elève Recalé") <br>
            Finsi  <br>
            </div>
            
        </div>
    </div>
    <div class="blocs">
        <div class="header_syntax">Syntaxe en C</div>
        <div class="content_syntaxe">
            If <span class="italic">(condition)</span> <br>
            &nbsp;&nbsp;{<br>
            &nbsp;&nbsp;&nbsp;&nbsp;instruction 1;<br>
            &nbsp;&nbsp;}else <br>
            &nbsp;&nbsp;{<br>
            &nbsp;&nbsp;&nbsp;instruction 2;<br>    
            &nbsp;&nbsp;}
        </div>
        <div class="bloc_example">
            <div class="ex">Traduction en C:</div>
            <div class="content_syntaxe">
            if (moyenne >= 10)<br> 
            &nbsp;{<br>
            &nbsp;&nbsp;&nbsp;printf("Elève admis ");<br>
            &nbsp;}else<br>
            &nbsp;{<br>
            &nbsp;&nbsp;&nbsp;printf("Elève recalé ");<br>
            &nbsp;}
            </div>
        </div>


    </div>
    <div class="blocs">
        <div class="header_syntax">Syntaxe en PHP</div>
        <div class="content_syntaxe">
        If <span class="italic">(condition)</span> <br>
            &nbsp;&nbsp;{<br>
            &nbsp;&nbsp;&nbsp;&nbsp;instruction 1;<br>
            &nbsp;&nbsp;}else <br>
            &nbsp;&nbsp;{<br>
            &nbsp;&nbsp;&nbsp;instruction 2;<br>    
            &nbsp;&nbsp;}
        </div>
        <div class="bloc_example">
            <div class="ex">Traduction en PHP:</div>
            <div class="content_syntaxe">
            if ($moyenne >= 10)<br> 
            &nbsp;{<br>
            &nbsp;&nbsp;&nbsp;echo "Elève admis";<br>
            &nbsp;}else<br>
            &nbsp;{<br>
            &nbsp;&nbsp;&nbsp;echo "Elève recalé";<br>
            &nbsp;}
            </div>
        </div>       
    </div>   
</div>

<!-- LE CHOIX multiple -->
<h2>3. Le choix multi</h2>
<div class="definition">Le selon n'est autre la représentation d'une manière plus lisible et visible 
    d'une cascade (imbrication) des alternatives. Une meilleure présentation. <br>
L'expression doit être en C de type énuméré : int , char.  
</div>
<div class="bloc_syntaxe_multi">
    <div class="blocs">
        <div class="header_syntax">Syntaxe en Algorithme</div>
        <div class="content_syntaxe">
            Selon <span class="italic">expression</span> faire <br>
            &nbsp;&nbsp;&nbsp;Cas valeur 1:<span class="italic">instruction 1</span> <br>
            &nbsp;&nbsp;&nbsp;Cas valeur 2:<span class="italic">instruction 2</span> <br>
            &nbsp;&nbsp;&nbsp;....<br>
            &nbsp;&nbsp;&nbsp;Si non: <span class="italic">instruction _ par_ defaut</span> <br>
            Fin selon <br>
        </div>  
        <div class="bloc_example">
            <div class="ex">Exemple:</div>
            <div class="content_syntaxe">
            Selon jour faire  <br> 
            Cas 1: cas 2: cas 3: cas 4: cas 5:  <br>
            &nbsp;&nbsp;&nbsp;Afficher ("C'est un jour de travail")<br>
            Cas 6: cas 7: <br>
            &nbsp;&nbsp;&nbsp;Afficher ("C'est un jour de repos")<br>
            Sinon : Afficher ("Erreur de saisie ") <br>
            Finsi <br>
            </div>
        </div>
    </div>
    <div class="blocs">
        <div class="header_syntax">Syntaxe en C</div>
        <div class="content_syntaxe">
            switch <span class="italic">(expression)</span><br>
            &nbsp;{<br>
            &nbsp;&nbsp;case valeur1: instruction 1; break;<br>
            &nbsp;&nbsp;case valeur2: instruction 2; break;<br>
            &nbsp;&nbsp;....<br>
            &nbsp;default: instruction_par_défaut; break;<br>   
            &nbsp;}
        </div>
        <div class="bloc_example">
            <div class="ex">Traduction en C:</div>
            <div class="content_syntaxe">
            switch (jour) <br> 
            &nbsp;{<br>
            &nbsp;&nbsp;case 1: case 2: case 3: case 4: case 5:<br>
            &nbsp;&nbsp;printf("C'est un jour de travail");<br>
            &nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;case 6: case 7:<br>
            &nbsp;&nbsp;printf ("C'est un jour de repos");<br>
            &nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;printf ("Erreur de saisie");<br>
            &nbsp;&nbsp;break;<br>
            &nbsp;}
            </div>
        </div>


    </div>
    <div class="blocs">
        <div class="header_syntax">Syntaxe en PHP</div>
        <div class="content_syntaxe">
            switch <span class="italic">(expression)</span><br>
            &nbsp;{<br>
            &nbsp;&nbsp;case valeur1: instruction 1; break;<br>
            &nbsp;&nbsp;case valeur2: instruction 2; break;<br>
            &nbsp;&nbsp;....<br>
            &nbsp;default: instruction_par_défaut; break;<br>   
            &nbsp;}
        </div>
        <div class="bloc_example">
            <div class="ex">Traduction en PHP:</div>
            <div class="content_syntaxe">
            switch ($jour) <br> 
            &nbsp;{<br>
            &nbsp;&nbsp;case 1: case 2: case 3: case 4: case 5:<br>
            &nbsp;&nbsp;echo "C'est un jour de travail" ;<br>
            &nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;case 6: case 7:<br>
            &nbsp;&nbsp;echo "C'est un jour de repos" ;<br>
            &nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;echo "Erreur de saisie" ;<br>
            &nbsp;&nbsp;break;<br>
            &nbsp;}                
            </div>   
        </div>
    </div>
</div>
<!-- EXAMPLES -->

<!-- BLOC EXAMPLE 1 -->
<div class="illustration">
<div class="sujet">
    <span class="italic">Exercice 1:</span> Ecrire un algo et un programme PHP qui saisie un nombre entier et affiche s'il est pair ou impair.  
</div>
<!-- BLOC ALGO EXO 1 -->
<div class="sujet">Algorithme</div>
<div class="sujet_algo">
    <pre>
        <code class="prettyprint">
Algo: exo1 
Déclaration  
    nb : entier 
Début  
    Afficher("Donner un nombre entier:") 
    Saisir (nb) 
    Si nb % 2 = 0  
    Alors afficher (nb, "est un nombre pair") 
    Sinon afficher (nb, "est un nombre impair") 
Finsi  
Fin Exo1  
        </code>
    </pre>
</div>
<!-- BLOC LANGAGE C EXO1 -->
<div class="sujet">Traduction en langage C</div>

<div class="sujet_algo">
    <pre>
        <code class="prettyprint">
#include &lt;stdio.h&gt; 
int main () 
{ 
int nb ;  
printf("Donner un nombre :");  
scanf ("%d", &nb);  
if (nb % 2 == 0) 
{ 
    printf ("%d est un nombre pair ", nb);  
} else {  
    printf(" %d est un nombre impair ", nb);  
} 
return 0;  
}
        </code>
    </pre>
</div>


<!-- BLOC CODE PHP EXO 1 -->
<div class="sujet">Demo en PHP</div>
<form method="post">
<label  for="nb">Nombre</label>
<input type="text" name="nb" value="<?php if (isset($_POST['nb'])) echo $_POST['nb']; ?>"> 
<br/> 
<input type="reset" name="Annuler" value="Annuler"> 
<input type="submit" name="calculer_pair_impaire" value="Calculer"> 
</form> 
<?php 
if (isset($_POST["calculer_pair_impaire"])) 
{  
    $nb = $_POST["nb"]; 
    if ($nb%2 == 0)
        echo "Nombre pair"; 
    else 
        echo "Nombre impair"; 
}  
?> 
</div>

<!-- BLOC EXEMPLE 2 -->

<div class="illustration">
    <div class="sujet">
        <span class="italic">Exercice 2:</span> Ecrire un algo, C, et PHP qui permet de résoudre dans R l'équation du premier  
    degré a*x + b = 0  
    </div>
<!-- BLOC ALGO EXO2 -->
    <div class="sujet">Algorithme</div>
    <div class="sujet_algo">
        <pre>
            <code class="prettyprint">
Algo : equation1  
Déclaration  
a, b , x : réel  
Début  
    Afficher ("Donner le premier coef ") 
    Saisir (a) 
    Afficher ("Donner le deuxième coef :") 
    Saisir (b) 
    Si a = 0  
    Alors si b = 0  
    Alors afficher ("Tout x dans R est solution de l'équation") 
    Sinon afficher ("Pas de solutions dans R") 
    Finsi  
    Sinon  
    x <- (-b) / a 
    Afficher(" la solution de l'équation  est : ", x ) 
Finsi  
            </code>
        </pre>
    </div>

<!-- BLOC LANGAGE C EXO2 -->
<div class="sujet">Traduction en langage C</div>
    <div class="sujet_algo">
    <pre>
        <code class="prettyprint">
#include &lt;stdio.h&gt; 
int main () { 
float a, b, x ;  
printf("Donner le premier coef :");  
scanf ("%f", &a);  
printf("Donner le deuxième coef :");  
scanf ("%f", &b);  
if (a==0)
    { 
        if (b == 0){  
        printf ("Tout x dans R est solution de l'équation"); 
    } else 
    { 
        printf ("Pas de solutions dans R") ; 
    } 
    } else  
    { 
        x  = -b /a ;  
        printf (" La solution de l'équation est de : %f", x);  
    } 
return 0;  
}</code>
    </pre>
</div>


<!-- BLOC CODE PHP EXO2 -->
<div class="sujet">Demo en PHP</div>
<form method ="post">
    <label for="a">Le premier coef</label>
    <input type="text" name ="a" value="<?php if (isset($_POST['a'])) echo $_POST['a']; ?>"/>
    <label for="a">Le deuxieme coef</label>
    <input type="text" name ="b" value="<?php if (isset($_POST['b'])) echo $_POST['b']; ?>"/>
    <input type="reset" name="annuler" value="Annuler"/> 
    <input type="submit" name="calculer_exo2" value="Calculer"/> 
</form> 
    <?php 
    if (isset($_POST["calculer_exo2"])) 
    {  
        $a = $_POST["a"]; 
        $b = $_POST["b"]; 
    
            if ($a==0 ) 
            {  
        if ($b ==0) 
        { 
                echo" <br/>vrai, tous x dans R solution de l'equation"; 
            }  
        else  
            {  
                echo "pas de resolution dans R"; 
            }  
    } 
    else  
    {  
        $x=(-$b/$a); 
        echo "La solution est  : " . $x; 
    }  
    } 
    ?> 
</div>

<!-- BLOC EXEMPLE 3 -->
<div class="illustration">
    <div class="sujet">
        <span class="italic">Exercice 3:</span> Ecrire un algo / C /PHP qui permet de résoudre dans R l'équation du second degré : a*x2 + b*x +c = 0  
    </div>
<!-- BLOC ALGO EXEMPLE 3 -->
    <div class="sujet">Algorithme</div>
    <div class="sujet_algo">
        <pre>
            <code class="prettyprint">
Algo : equation2	
DEBUT
Déclaration  
a, b , c, delta, x1, x2 : réel  
Début  
    Afficher ("Donner le premier coef ") 
    Saisir (a) 
    Afficher ("Donner le deuxième coef :") 
    Saisir (b) 
    Afficher ("Donner le troixième coef :") 
    Saisir (c) 
    delta <- b*b – 4ac
    Si a=0
    Alors si b=0 
    Si c=0
    Afficher (“tous x dans R est possible”)
    Sinon afficher(« pas de solution »)
    Sinon 
    Alors x <- -c/b
    delta <- b*b – 4ac
    Si delta < 0  
    Alors afficher (« pas de solution dans R »)
    Sinon si delta =0
    x1 <- - b/2a
    Alors afficher (" l'équation admet une racine double :",x1) 
    Sinon 
    x1 <-   - b + sqrt(delta)/2a
    x2 <-  - b - sqrt(delta)/2°
    Alors afficher (" l'équation admet deux solutions :",x1, x2) 
Finsi  
Finsi  
Finsi  
Finsi  
FIN
        </code>
    </pre>
</div>



    <!-- BLOC LANGAGE EXEMPLE 3 -->
    <div class="sujet">Traduction en C</div>
    <div class="sujet_algo">
    <pre>
        <code class="prettyprint">
#include &lt;stdio.h&gt; 
#include &lt;math.h&gt;
int main () { 
    float a, b, c, delta, x1, x2 ;

    printf("Donner le premier coef :");  
    scanf ("%f", &a);

    printf("Donner le deuxiÃ¨me coef :");  
    scanf ("%f", &b);

    printf("Donner le troixieme coef :");  
    scanf ("%f", &c);

    if (a==0)
    {
        if(b==0)
    {
        if(c==0)
            {
                printf ("tous x est possible dans R");	
            }
            else
            {
                printf ("pas de solution");
            }
        }
        else
        {
            x1=(-c/b);
            printf("l'equation a une racine:%f",x1);
        }
            
        }
        else 
        {
        delta = b*b- 4*a*c;

        if (delta <0) 
        {
            printf (" Pas de solutions dans R"); 
        }
        else if (delta ==0) 
        {
            x1 = -b/2*a;
            printf ("l'equation admet une racine double : %f", x1) ;
        }     
        else  
        {
            x1  = (-b + sqrt(delta))/(2*a) ;  
            x2  = (-b - sqrt(delta))/(2*a) ;  
            printf (" l'equation admet deux solution  :%f  %f", x1,x2);  
        }
        }
    return 0;  
} 
        </code>
    </pre>
</div>


<!-- BLOC PHP EXEMPLE 3 -->
<div class="sujet">Demo en PHP</div>
<form method ="post">  
    <label for="a">Le premier coef</label>
    <input type="text" name ="a" value="<?php if (isset($_POST['a'])) echo $_POST['a']; ?>" />  
    <label for="b">Le deuxieme coef</label>
    <input type="text" name ="b" value="<?php if (isset($_POST['b'])) echo $_POST['b']; ?>" />  
    <label for="c">Le troisieme coef</label>
    <input type="text" name ="c" value="<?php if (isset($_POST['c'])) echo $_POST['c']; ?>" />
    <input type="reset" name="annuler" value="Annuler"/>
    <input type="submit" name="calculer1" value="Calculer"/>
</form>  

<?php  

if (isset($_POST["calculer1"]))  
{    
        $a =$_POST["a"];  
        $b =$_POST["b"];  
        $c =$_POST["c"]; 
        if ($a==0) 
        {  
            if($b==0) 
            {  
                if($c==0) 
                {  
                    echo "Tout x dans R est possible"; 
                }  
                else 
                {  
                    echo "Pas de solution dans R"; 
                }  
            }  
            else  
            {  
                $x =(-$c/$b); 
                echo "l'equation a une racine : ".$x; 
            }     
        }  
        else 
        {  
            $delta = $b*$b - 4*$a*$c; 
            if ($delta<0)  
            {  
                echo " <br> pas de solution dans R"; 
            }  
            else if ($delta ==0)  
            {   
                $x = -$b/(2*$a);   
                echo " <br/> l'equation admet une racine double : ". $x;  
            }    
            else   
            {    
                $x1 = (-$b + sqrt($delta))/2*$a; 
                $x2 = (-$b - sqrt($delta))/2*$a; 
                echo "l'equation admet deux solution: <br>" ;  
                echo "x1: ".$x1."<br>"; 
                echo "x2: ".$x2."<br>"; 
            }    
        }  
}   
?>
</div>



<!-- BLOC EXEMPLE 4 -->
<div class="illustration">
    <div class="sujet">
        <span class="italic">Exercice 4:</span> L'entrée au cinéma est calculée selon un tarif de base, auquel on applique une remise selon les jours et l'âge de la personne.<br> 
 Tous les mercredis et samedis, on applique 20 % pour les jeunes de moins de 35 ans, et 10 % pour les personnes entre 35 et 50 ans et aucune remise pour les autres.  
 Les dimanches c'est gratuit aux enfants de moins de 15 ans et 40 % pour les personnes entre 15 et 18 ans. Et le tarif de base pour les autres.<br>
 Les mardis et lundis: on applique  une remise de 25 % pour les personnes de plus de 60 ans. <br>
 Les autres jours, le tarif de base est appliqué. <br>
 Ecrire un algo / C / PHP qui permet de saisir le tarif de base, le numéro du jour et l'âge de la personne et affiche le tarif à payer.<br>
    </div>
    <!-- BLOC ALGO EXEMPLE 4 -->
    <div class="sujet">Algorithme</div>
    <div class="sujet_algo">
        <pre>
            <code class="prettyprint">
Algo : tarif de ticket cinema 
Déclaration  
j, a:entier 
P,t: reel 
Debut  
    Afficher (“Le tarif de base”) 
    Saisir (t) 
    Afficher (« Consider que le lundi est numero 1, le mardi est numero 2, le mercredi est numero 3, 
    le jeudi est numero 4, le vendredi est numero 5, le samedi est numero 6, le dimanche est numero 7” ) 
    Afficher (“donner le numero de jour”) 
    Saisir (j) 
    Afficher (“Donner l’age”) 
    Saisir (a) 
    Selon j faire  
    Cas 3 : cas 6 :  
    Si a < 35  
        Alors p <- t *0.80    
        Sinon si a < 50  
        Alors p <- t* 0.90  
        Sinon p <- t  
        Finsi  
    Finsi  
    Cas 2 : cas 1 :  
    Si age > 60  
        Alors p <- t * 0.75  
        Sinon p <- t  
    Finsi  
    Cas 7 : 
    Si a < 15  
        Alors p <- 0  
        Sinon si a < 18  
        Alors p <- t *0.60  
    Sinon p <- t 
    Finsi  
    Cas 4 : cas 5 : 
    P <- t  
    Finsi  
    Finselon  
    Afficher ("le tarif reel à payer est de :", p) 
Fin cinema  
            </code>
        </pre>
    </div>  


    <!-- BLOC LANGAGE C EXEMPLE 4 -->
    <div class="sujet">Traduction en C</div>
    <div class="sujet_algo">
        <pre>
            <code class="prettyprint">
#include &lt;stdio.h&gt; 
int main () { 
    float p,t ; 
    int  j, a ;
    printf("Consider que le lundi est le numero 1, 
    le mardi est le numero 2, le mercredi est numero 3, 
    le jeudi est numero 4, le vendredi est numero 5, 
    le samedi est numero 6, le dimanche est numero 7 \n ");  
    printf("Entrer le tarif de base: \n");  
    scanf ("%f", &t);  
    printf("Entrer le numero du jour:\n ");  
    scanf ("%d", &j);  
    printf("Entrer l_age :\n ");  
    scanf ("%d", &a);   
    switch (j)
    {
        case 3 :
        case 6:		
            if (a < 35)
            {
                p=t*0.8;
            }
            else if (a < 50)
            {
                p=t*0.9;
            }
            else 
            {
                p=t;
            }
            break;
        case 2:
        case 1:
            if (a > 60)
            {
                p=t*0.75;
            }
            else
            {
                p=t;
            }
        break;
        case 7:
            if (a < 15)
            {
                p=0;
            }
            else if (a <18)
            {
                p=t*0.6;
            }
            else 
            {
                p=t;
            }
        break;
        case 4:
        case 5:
            p=t;	
        break;
        default:
            printf("Merci d'entrer un numero du jour valid");
        break;		
    }	
    printf("Le tarif reel a payer est de : %f", p);
    return 0;
} 
            </code>
        </pre>
    </div>
 <!-- BLOC LANGAGE PHP EXEMPLE 4 -->
<div class="sujet">Demo en PHP</div>
<form method="post">
    <label for="age">Age de la personne</label>
    <input type="text" name="age" value="<?php if (isset($_POST['age'])) echo $_POST['age']; ?>">
    <br/>
    <label for="jour">Jour</label>
    <select name ="jour" id="jour">
        <option value ="1" <?php echo (isset($_POST['jour']) && $_POST['jour'] == '1') ? 'selected="selected"' : ''; ?>> lundi </option>
        <option value ="2" <?php echo (isset($_POST['jour']) && $_POST['jour'] == '2') ? 'selected="selected"' : ''; ?>> mardi </option>
        <option value ="3" <?php echo (isset($_POST['jour']) && $_POST['jour'] == '3') ? 'selected="selected"' : ''; ?>> mercredi </option>
        <option value ="4" <?php echo (isset($_POST['jour']) && $_POST['jour'] == '4') ? 'selected="selected"' : ''; ?>> jeudi </option>
        <option value ="5" <?php echo (isset($_POST['jour']) && $_POST['jour'] == '5') ? 'selected="selected"' : ''; ?>> vendredi </option>
        <option value ="6" <?php echo (isset($_POST['jour']) && $_POST['jour'] == '6') ? 'selected="selected"' : ''; ?>> samedi </option>
        <option value ="7" <?php echo (isset($_POST['jour']) && $_POST['jour'] == '7') ? 'selected="selected"' : ''; ?>> dimanche </option>
    </select>
    <br/>
    <label for="tarif">Tarif de base </label>
    <input type="text" name="tarif" value="<?php if (isset($_POST['tarif'])) echo $_POST['tarif']; ?>"><br/>
    <input type="reset" name="Annuler" value="Annuler">
    <input type="submit" name="calculer_ex4" value="Calculer">
</form>


<?php
if (isset($_POST["calculer_ex4"])) {
    $age = $_POST["age"];
    $jour = $_POST["jour"];
    $tarif = $_POST["tarif"];

    switch ($jour) {
        case 3:
        case 6:
            if ($age < 35)             
                $p=$tarif*0.8;            
            else if ($age < 50)             
                $p = $tarif*0.9;            
            else             
                $p=$tarif;        
            break;
        case 2:
        case 1:
            if ($age > 60) 
                $p = $tarif*0.75;            
            else
                $p= $tarif;
            break;
        case 7:
            if ($age < 15) 
                $p=0;
            else if ($age <18) 
                $p=$tarif*0.6;
            else
                $p=$tarif;
            break;
        case 4: 
        case 5:
            $p= $tarif;
            break;
        default:
            printf("Merci d'entrer un numero du jour valide");
            break;
    }
    printf("Le tarif reel a payer est de : %.2f euros ", $p);    
}    
?>
</div>

<center>
    <button class="click_haut" onclick="scrollToTop()"> 
    Cliquez pour faire défiler vers le haut
    </button> 
</center>









