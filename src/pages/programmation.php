<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
        <title>Club Info LHU-Programmation</title> 
    </head> 
    
    <body>
        <?php include("header.php"); ?>
        
        <section>
            <article>
                <h2>Programmation</h2>
                <h3>Ou l'art de créer des bugs</h3>
                
                <p>
                    L'un des objectifs premiers du Club Info est d'apprendre à programmer, quel que soit le niveau de l'élève. 
                    Le langage favori sera, comme en cours d'ISN, le python, bien que chacun soit libre de choisir avec 
                    quel langage il désire coder.
                </p>
            </article>
            
            <article>
                <h4>Python</h4>
                
                <p>
                    Le langage python est un langage très facile d'approche avec lequel de nombreux débutants s'initient 
                    à la programmation, et c'est également le langage enseigné en spécialité ISN. 
                    Python permet de réaliser des projets de complexité très variées, allant d'un simple Mastermind
                    à un logiciel élaboré tel que Blender. <br/>
                    
                    <!-- lien d'installation -->
                    Si vous avez besoin d'aide pour l'installation de ******, cliquez 
                    <a href="programmation/installation.php#python">ici</a>. <br/>
                    
                    Pour voir un exemple de jeu créé à l'aide de python, cliquez <a href="programmation/codes.php#python">ici</a>. <br/>
                    
                    Si vous êtes intéressés par l'apprentissage du python, vous pouvez vous rendre sur 
                    <a href="http://openclassrooms.com/courses/apprenez-a-programmer-en-python" target="_blank">OpenClassrooms</a> 
                    ou bien sur <a href="http://www.france-ioi.org" target="_blank">France IOI</a>.
                </p>
            </article>
            
            <article>
                <h4>C++</h4>
                
                <p>
                    Le langage C++ est plus complexe que Python mais est cependant plus utilisé en milieu professionnel, 
                    grâce à ses performances, sa portabilité et son grand nombre de fonctionnalités. 
                    Cependant, il ne sera que peu utilisé au Club Info et ne sera pas étudié en ISN. <br/>
                    
                    Il existe de nombreux moyens de créer des programmes en C++, mais le plus simple est d'utiliser 
                    un EDI (environnement de développement intégré). 
                    Parmi ces EDI, <a href="http://www.codeblocks.org/" target="_blank">Code Blocks</a> est simple à utiliser et il 
                    est portable sur Windows, Mac et Linux. <br/>
                    Pour installer correctement Code Blocks, allez voir notre <a href="programmation/installation.php#cpp">aide</a>. <br/>
                    
                    Pour voir un exemple de jeu créé en C++, cliquez <a href="programmation/codes.php#cpp">ici</a>. <br/>
                    
                    Si vous souhaitez apprendre le C++, vous pouvez, comme pour Python, vous initier à l'aide de 
                    <a href="http://www.france-ioi.org" target="_blank">France IOI</a>.
                    Pour un tutoriel, rendez-vous sur <a href="http://cpp.developpez.com/cours/cpp/" target="_blank">Developpez.com</a> 
                    ou, pour ceux qui n'ont pas de mal avec l'anglais,
                    sur <a href="http://www.cplusplus.com/" target="_blank">la documentation du C++</a>.
                    
                </p>
            </article>
            
            <article>
                <h4>Github</h4>
                
                <p>
                    Github est un site utilisant Git, qui est un logiciel de gestion de versions de logiciels. 
                    Grâce à celui-ci, il est plus simple de collaborer sur des projets en groupe, et il devient 
                    possible de conserver des versions antérieures d'un code source afin de le récupérer en cas d'erreurs.
                    Git est donc un outil nécessaire pour tout programmeur. <br/>
                    
                    Si vous êtes convaincus de son utilité, rendez-vous sur <a href="https://github.com/" target="_blank">Github</a> 
                    pour utiliser Git de manière très intuitive. <br/>
                    
                    Vous pouvez également retrouver tous les projets lancés par le <a href="https://github.com/Club-Info-LHU" target="_blank">Club Info LHU</a>.
                </p>
            </article>
            
            <article>
                <h4>Les Perles de la programmation</h4>
                
                <p>
                    Le programmation n'est pas toujours une tâche structurée, mais peut parfois se transformer en vrais casse-têtes, 
                    ce qui est le cas de deux langages: le BASIC et le brainfuck, que nous pourrions aborder au Club Info.
                </p>
                
                <article>
                    <h5>Le BASIC</h5>
                    
                    <p>
                        Le BASIC est un langage de haut niveau, ce qui lui donne une syntaxe très simple. 
                        Cependant, le BASIC est aussi un fidèle représentant du "spaghetti programming", 
                        se caractérisant par une incompréhension du code source lors de sa lecture à cause 
                        des sauts inconditionnels (GOTO). <br/>
                        
                        Par exemple, essayez de comprendre le code suivant:
                        <p>
                            <pre>
10 i = 0<br/>
20 i = i + 1<br/>
30 IF i &lt;&gt; 11 THEN GOTO 80<br/>
40 IF i = 11 THEN GOTO 60<br/>
50 GOTO 20<br/>
60 PRINT "Programme terminé."<br/>
70 END<br/>
80 PRINT i &amp; " au carré = " &amp; i * i<br/>
90 GOTO 20<br/>
                            </pre>
                        </p>
                        
                        Qui peut en réalité être remplacé par:
                        <p>
                            <pre>
10 FOR i = 1 TO 10<br/>
20   PRINT i &amp; " au carré = " &amp; i * i<br/>
30 NEXT i<br/>
40 PRINT "Programme terminé."<br/>
50 END<br/>
                            </pre>
                        </p>
                    </p>
                </article>
                
                <article>
                    <h5>Le Brainfuck</h5>
                    
                    <p>
                        Ce langage, malgré le fait qu'il ne possède que 8 commandes, est un langage Turing-Complet
                        (il peut réaliser toutes les tâches). Ces 8 commandes sont: &lt; &gt; + - , . [ ]<br/>
                        
                        Il est très complexe de créer un programme avec ce langage inventé pour complexifier des 
                        tâches très simples. <br/>
                        
                        Voici un exemple de code en brainfuck (celui-ci affiche "Hello world !" à l'écran):
                    </p
                    
                    <p>
                        <pre>
++++++++++<br/>
[<br/>
&gt;+++++++<br/>
&gt;++++++++++<br/>
&gt;+++++++++++<br/>
&gt;+++++++++++<br/>
&gt;+++++++++++<br/>
&gt;+++<br/>
&gt;+++++++++<br/>
&gt;+++++++++++<br/>
&gt;+++++++++++<br/>
&gt;+++++++++++<br/>
&gt;++++++++++<br/>
&gt;+++<br/>
&gt;+++<br/>
&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;-<br/>
]<br/>
&gt;++<br/>
&gt;+<br/>
&gt;--<br/>
&gt;--<br/>
&gt;+<br/>
&gt;++<br/>
&gt;---<br/>
&gt;+<br/>
&gt;++++<br/>
&gt;--<br/>
&gt;<br/>
&gt;++<br/>
&gt;+++<br/>
&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;<br/>
&gt;.&gt;.&gt;.&gt;.&gt;.&gt;.&gt;.&gt;.&gt;.&gt;.&gt;.&gt;.&gt;.<br/>
                        </pre>
                    </p>
                    
                    <p>
                        <a href="http://openclassrooms.com/courses/apprenez-a-programmer-en-brainfuck" target="_blank">Apprendre le brainfuck</a>
                    </p>
                </article>
            </article>
        </section>
        
        <?php include("footer.php"); ?>
    </body>
</html>
