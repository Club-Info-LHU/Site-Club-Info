<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
        <title>Club Info LHU-Web</title> 
    </head> 
    
    <body>
        <?php include("header.php"); ?>
        
        <section>
            <article>
                <h2>Langages Web</h2>
                <h3>Diviser pour mieux coder...</h3>
                
                <p>
                    Nous verrons aussi comment concevoir des sites internet simples. 
                    Pour cela, nous apprendrons à utiliser le HTML qui est un langage de balisage permettant de structurer le site, 
                    un peu de PHP pour l'insertion de codes qui se répète de pages en pages 
                    et le CSS qui gère la feuille de style de notre site, l'aspect esthétique.
                </p>
            </article>
            
            <article>
                <h4>HTML et PHP</h4>
                <p>
                    Voici par exemple les premières lignes de codes HTML et PHP correspondant à cette page.
                </p>
                
                <p>
&lt;!DOCTYPE html&gt;</br>
&lt;html&gt;</br>
    &nbsp;&lt;head&gt;</br>
        &nbsp;&nbsp;&lt;?php include("head.php"); ?&gt; &#135;cette ligne est en php pour faciliter les modifications</br>
        &nbsp;&nbsp;&lt;title&gt;Club Info LHU-Web&lt;/title&gt;</br>
    &nbsp;&lt;/head&gt;</br>
    </br>
    &nbsp;&lt;body&gt;</br>
        &nbsp;&nbsp;&lt;?php include("header.php"); ?&gt;</br>
        </br>
        &nbsp;&nbsp;&lt;section&gt;</br>
            &nbsp;&nbsp;&nbsp;&lt;article&gt;</br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;h2&gt;Langages Web&lt;/h2&gt;</br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;h3&gt;Diviser pour mieux coder...&lt;/h3&gt;</br>
                </br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;</br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nous verrons aussi comment concevoir des sites internet simples. 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pour cela, nous apprendrons à utiliser le HTML qui est un langage de balisage permettant de structurer le site ,
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;un peu de PHP pour l'insertion de codes qui se répète de pages en pages 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;et le CSS qui gère la feuille de style de notre site, l'aspect esthétique.
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;</br>
            &nbsp;&nbsp;&nbsp;&lt;/article&gt;</br>
            </br>
            &nbsp;&nbsp;&nbsp;&lt;article&gt;</br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;h4&gt;HTML et PHP&lt;/h4&gt;</br>
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Voici par exemple les premières lignes de codes HTML et PHP correspondant à cette page.
                &nbsp;&nbsp;&nbsp;&nbsp;&lt;/p&gt;
                </br>
                </p>
            </article>
            
            <article>
                <h4>CSS</h4>
                
                <p>
                    <img src="../img/css.jpg" alt="CSS" />
                </p>
            </article>
        </section>
        
        <?php include("footer.php"); ?>
    </body>
</html>
