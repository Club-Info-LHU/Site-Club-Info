<!DOCTYPE html>
<html>
    <?php include("../head.php"); ?>
    
    <body>
        <?php include("../header.php"); ?>
        
        <section>
            <article id="python">
               <h2>Python: le Mastermind</h2>
               
               <p>
                   Voici un exemple de code en python permettant de réaliser le MasterMind ci-dessous.
                   Le code étant plutôt long, nous n'affichons que la partie codant la gestion des évènements.
                   <!-- Pour voir le code entier, allez sur github.com/**** (en attente du mastermind sur github) -->
               </p>
               
               <p class="code">
                   <!-- code source de la gestion des events -->
               </p>
               
               <!-- mettre l'image -->
            </article>
            
            <article id="cpp">
                <h2>C++: le Morpion/TicTacToe</h2>
                
                <p>
                    Le Morpion ci-dessous a été réalisé en C++, voici une partie de son intelligence artificielle.
                    Pour voir le code complet, rendez-vous sur 
                    <a href="https://github.com/Vodak/Tic-tac-toe" target="_blank">Github</a>.
                </p>
                
                <p class="code">
                    <pre>
else
{
    /* Now the AI will play on the corners */<br/>
    bool corner = false;<br/>
    do<br/>
    {<br/>
        int choice = rand()%4+1;<br/>
        if(map[0][0] == '*' &amp;&amp; choice == 1)<br/>
        {<br/>
            map[0][0] = 'O';<br/>
            corner = true;<br/>
        }<br/>
        else if(map[2][0] == '*' &amp;&amp; choice == 2)<br/>
        {<br/>
            map[2][0] = 'O';<br/>
            corner = true;<br/>
        }<br/>
        else if(map[2][2] == '*' &amp;&amp; choice == 2)<br/>
        {<br/>
            map[2][2] = 'O';<br/>
            corner = true;<br/>
        }<br/>
        else if(map[0][2] == '*' &amp;&amp; choice == 2)<br/>
        {<br/>
            map[0][2] = 'O';<br/>
            corner = true;<br/>
        }<br/>
    }<br/>
    while(!corner);<br/>
}<br/>
                    </pre>
                </p>
                
                <!-- rajouter la capture d'écran -->
            </article>
        </section>
        
        <?php include("../footer.php"); ?>
    </head>
</html>
