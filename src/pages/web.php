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
                
                <pre>
&lt;!DOCTYPE html&gt;</br>
&lt;html&gt;</br>
    &lt;head&gt;</br>
        &lt;?php include("head.php"); ?&gt; &#135;cette ligne est en php pour faciliter les modifications</br>
        &lt;title&gt;Club Info LHU-Web&lt;/title&gt;</br>
    &lt;/head&gt;</br>
    </br>
    &lt;body&gt;</br>
        &lt;?php include("header.php"); ?&gt;</br>
        </br>
        &lt;section&gt;</br>
            &lt;article&gt;</br>
                &lt;h2&gt;Langages Web&lt;/h2&gt;</br>
                &lt;h3&gt;Diviser pour mieux coder...&lt;/h3&gt;</br>
                </br>
                &lt;p&gt;</br>
                    Nous verrons aussi comment concevoir des sites internet simples. 
                    Pour cela, nous apprendrons à utiliser le HTML qui est un langage de balisage permettant de structurer le site ,
                    un peu de PHP pour l'insertion de codes qui se répète de pages en pages 
                    et le CSS qui gère la feuille de style de notre site, l'aspect esthétique.
                &lt;/p&gt;</br>
            &lt;/article&gt;</br>
            </br>
            &lt;article&gt;</br>
                &lt;h4&gt;HTML et PHP&lt;/h4&gt;</br>
                &lt;p&gt;
                    Voici par exemple les premières lignes de codes HTML et PHP correspondant à cette page.
                &lt;/p&gt;
                </br>
                </pre>
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
