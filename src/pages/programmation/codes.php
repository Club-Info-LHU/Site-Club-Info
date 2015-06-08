<!DOCTYPE html>
<html>
    <head>
        <?php include("../head.php"); ?>
        <title>Club Info LHU-Codes</title> 
    </head> 
    
    <body>
        <?php include("header2.php"); ?>
        
        <section>
            <article id="python">
               <h2>Python: le Mastermind</h2>
               
               <p>
                   Voici un exemple de code en python permettant de réaliser le MasterMind ci-dessous.
                   Le code étant plutôt long, nous n'affichons qu'une partie du code gérant les événements.
                   <!-- Pour voir le code entier, allez sur github.com/**** (en attente du mastermind sur github) -->
               </p>
               
               <p class="code">
                    <pre>
...<br/>
	<br/>
"""création d'une boucle infinie maintenant la fenetre ouverte"""<br/>
while continuer :<br/>
	for event in pygame.event.get() :<br/>
		"""Lecture de tous les évènements clavier et souris"""<br/>
<br/>
		"""Pour gérer la fermeture de la fenetre"""<br/>
		if event.type == QUIT :<br/>
			continuer = 0<br/>
			rejouez = 0<br/>
<br/>
		"""Pour gérer le placement des pions du code"""<br/>
		if event.type == MOUSEBUTTONDOWN and event.button == 1 :<br/>
			if event.pos[0] > 9 and event.pos[0] &lt; 30 and \<br/>
				event.pos[1] > 219 and event.pos[1] &lt; 240 :<br/>
					fenetre.blit(pionRouge,(abscisse,ordonnee))<br/>
					abscisse += 35<br/>
					proposition.pop(position)<br/>
					proposition.insert(position,1)<br/>
					position += 1<br/>
<br/>
		...<br/>
			<br/>
	"""Pour rafraichir la page"""<br/>
	pygame.display.flip()<br/>
                    </pre>
               </p>
               
               <img src="../../pictures/zMastermind_fond.bmp" alt="capture d'écran du mastermind"/>
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
    </body>
</html>
