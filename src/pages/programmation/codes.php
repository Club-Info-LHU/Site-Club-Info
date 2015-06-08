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
                   Le code étant plutôt long, nous n'affichons que la partie codant la gestion des évènements.
                   <!-- Pour voir le code entier, allez sur github.com/**** (en attente du mastermind sur github) -->
               </p>
               
               <p class="code">
                    <pre>
...
	
"""création d'une boucle infinie maintenant la fenetre ouverte"""
while continuer :
	for event in pygame.event.get() :
		"""Lecture de tous les évènements clavier et souris"""

		"""Pour gérer la fermeture de la fenetre"""
		if event.type == QUIT :
			continuer = 0
			rejouez = 0

		"""Pour gérer le placement des pions du code"""
		if event.type == MOUSEBUTTONDOWN and event.button == 1 :
			if event.pos[0] > 9 and event.pos[0] < 30 and \
				event.pos[1] > 219 and event.pos[1] < 240 :
					fenetre.blit(pionRouge,(abscisse,ordonnee))
					abscisse += 35
					proposition.pop(position)
					proposition.insert(position,1)
					position += 1

		...
			
	"""Pour rafraichir la page"""
	pygame.display.flip()
                    </pre>
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
    </body>
</html>
