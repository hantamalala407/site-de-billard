@extends('layouts.application')

@section('title', 'Afebas -  Informations')

@section('content')

<h2 class="accordion-title">Règles du Jeu</h2>
<div class="accordion">
    <button class="accordion-button">1 : <span>LE JEU</span></button>
    <div class="accordion-content">
        <p>Le jeu doit être connu sous le nom de «Blackball». Jouez le jeu avec un esprit sportif. L’arbitre est seul juge de ce qui est régulier ou irrégulier et peut prendre toutes les mesures nécessaires afin d’assurer que les règles sont respectées.</p>
    </div>
    
    <button class="accordion-button">2 : <span>ÉQUIPEMENT ET SURFACE DE JEU</span></button>
    <div class="accordion-content">
        <p>Le jeu se joue sur une table rectangulaire à six poches et six bandes. Équipement autorisé…</p>
        <h3>(a) Une bille blanche appelée «bille de choc».</h3>
        <h3>(b) Deux groupes de billes de couleur constitués de sept billes rouges (ou bleues) et sept jaunes. A défaut, utiliser des billes numérotées de 1 à 7 et de 9 à 15.</h3>
        <h3>(c) Une bille noire (bille n°8).</h3>
        <h3>(d) Une extension avec reposoir araignée, 3 positions ou X.</h3>
        <h3>(e) Les queues autorisées.</h3>
        <p>Aucun autre équipement n’est autorisé à moins d’avoir été ratifié par la W.P.A. La surface de jeu est composée de l’ardoise et des bandes recouvertes de tapis. La surface devra être marquée d’un spot noir (emplacement de la bille n°8) situé à l’intersection des deux diagonales imaginaires joignant les poches du centre et du coin. Le tapis est marqué d’une ligne de zone (ou ligne de tir). Cf. Schéma. Une ligne droite tracée à 1/5 de la longueur de la table de bande à bande, parallèle à la bande la plus éloignée du spot noir. La zone de tir est la surface rectangulaire bordée par la ligne de zone et les trois bandes.</p>
    </div>
    
    <button class="accordion-button">3 : <span>OBJECTIF DU JEU</span></button>
    <div class="accordion-content">
        <p>Le joueur ou l’équipe devra empocher tout d’abord son groupe de billes, dans n’importe quel ordre, puis empocher légalement la noire pour remporter la partie.</p>
    </div>
    
    <button class="accordion-button">4 : <span>DÉPART DU JEU (ou Recommencement)</span></button>
    <div class="accordion-content">
        <p>Le coup d’ouverture (casse) sera déterminé par tirage à la bande.</p>
        <br>
        <p>PROCÉDURE DE TIRAGE : Les billes devront être de même taille et poids. Avec «bille en main» derrière la ligne de zone, un joueur à droite et un à gauche de la table, les billes sont frappées simultanément vers la bande du haut pour revenir aussi près que possible de la bande de zone. Le joueur dont la bille s’arrête le plus près de la bande de zone gagne (avant ou après contact avec la bande). Le tirage est automatiquement perdu si une bille…</p>
        <p>(a) Traverse sur la moitié de table de l’adversaire.</p>
        <p>(b) Ne touche pas la bande du haut.</p>
        <p>(c) Tombe dans une poche.</p>
        <p>(d) Sort de la table.</p>
        <p>(e) Touche une bande latérale.</p>
        <p>(f) S’arrête devant une poche en ayant dépassé le bord de la bande de zone.</p>
        <p>Un retirage sera fait si les deux joueurs échouent ou si l’arbitre est incapable de déterminer lequel est le plus près. Le joueur gagnant le tirage choisit qui casse en premier. Les casses sont ensuite alternées au fil du jeu.</p>
        <br>
        <h3>4a LE TRIANGLE :</h3>
        <p>Placé tel que montré sur le dessin ci-dessous avec la bille noire sur son spot.</p>
        <br>
        <h3>4b LA CASSE :</h3>
        <p>Le premier coup d’une partie est la casse. Pour casser, la blanche est jouée depuis la zone en direction du triangle. La partie commence quand le procédé d’un joueur touche la bille blanche.</p>
        <p>(a) La casse est valable si une bille est empochée, OU si au moins deux billes de couleur traversent complètement la ligne imaginaire joignant le milieu des poches centrales (cf. schéma n°1).</p>
        <p>(b) Si la casse est non valable, l’adversaire bénéficie d’un tir libre suivi d’une visite. La bille blanche peut être jouée d’où elle est OU depuis la zone OU le triangle peut être refait.</p>
        <br>
        <h3>4c JOUER DEPUIS LA ZONE :</h3>
        <p>(a) La blanche doit être dans la zone quand elle est jouée. Si le centre de la blanche est sur la ligne de zone, elle est considérée comme étant dans la zone.</p>
        <p>(b) La blanche ne doit être déplacée qu’à la main, pas avec la virole de la queue. Le joueur peut continuer à ajuster la position de la blanche jusqu’à ce que le coup soit joué. Si le procédé de la queue touche la blanche, le coup est considéré comme étant joué, il y a faute si le coup ne répond pas aux exigences d’un coup légal.</p>
        <br>
        <h3>DÉFINITION D’UN COUP LÉGAL (cf. schéma n°3) :</h3>
        <p>Pour faire un coup légal, le joueur doit faire en sorte de toucher une bille» on» (bille “on” = bille autorisée) ET ensuite…</p>
        <p>(1) D’empocher une ou plusieurs billes «on» (voir règle 6b) OU</p>
        <p>(2) De toucher une bande avec la blanche ou une autre bille (voir l’exception, règle 5g, snook).</p>
        <p>(c) La blanche peut être jouée dans n’importe quelle direction.</p>
        <p>Après une faute, si le joueur décide de jouer depuis la zone, la blanche doit être positionnée de façon à ne toucher aucune autre bille.</p>
        <p>Il y a faute, si pendant le placement, la blanche touche une autre bille.</p>
        <br>
        <h3>4d BILLE NOIRE EMPOCHÉE A LA CASSE ou sur une recasse…</h3>
        <p>Le triangle est refait et le même joueur casse à nouveau. Aucune pénalité n’est infligée même si une faute est commise lors du tir.</p>
        <br>
        <h3>4e DÉTERMINATION DES GROUPES SUR UNE TABLE LIBRE</h3>
        <p>Les groupes NE SONT PAS DÉTERMINÉS et la table reste libre…</p>
        <p>(a) A la casse.</p>
        <p>(b) Lors d’une faute</p>
        <p>(c) Sur un tir «libre» après une faute.</p>
        <p>(d) Sur une combinaison lorsqu’une bille de chaque groupe est empochée.</p>
        <p>La noire ne peut pas servir de bille «on» afin d’empocher une bille de couleur, à moins qu’une faute n’ait été commise et que le joueur bénéficie d’un tir libre.</p>
        <p>Si un joueur empoche une ou plusieurs billes d’un même groupe, ce groupe lui est attribué pour la durée de la partie. L’autre groupe est attribué à son adversaire.</p>
        <br>
        <h3>4f DÉTERMINATION DES GROUPES APRÈS UNE FAUTE :</h3>
        <p>Si une faute est commise sur une table libre et qu’une ou plusieurs billes ont été empochées, alors ces billes ne déterminent pas les groupes. Le joueur suivant joue donc une table libre et bénéficie d’un tir libre qui peut être joué depuis la position de la blanche OU depuis la zone. Un joueur peut jouer n’importe quelle bille sur un tir libre et la table reste libre.</p>
        <br>
        <h3>4g DÉROULEMENT DU JEU :</h3>
        <p>Durant le jeu, si des billes sont empochées et que le coup est légal alors les joueurs ont le droit de rejouer.</p>
        <p>Cela continue jusqu’à ce que le joueur…</p>
        <p>(a) N’empoche pas de bille de son groupe OU</p>
        <p>(b) Commette une faute.</p>
        <br>
        <h3>4h BILLE EN MAIN :</h3>
        <p>Avec une «bille en main» on peut jouer de n’importe où dans la zone et dans n’importe quelle direction. Le placement légal est décrit à la règle 4c.</p>
        <br>
        <h3>4i BILLES TOUCHANTES :</h3>
        <p>Une bille en contact ne doit pas bouger au départ du coup.</p>
        <p>Si la bille est de son propre groupe. La bille est considérée comme ayant été jouée. Pour faire un coup légal, le joueur a seulement besoin d’empocher une bille de son groupe OU de faire en sorte que n’importe quelle bille, blanche inclue, touche une bande.</p>
        <p>Si la bille n’est pas de son groupe. Le joueur doit faire en sorte de répondre aux exigences d’un coup légal. Voir règle 4c(b).</p>
        <p>Si deux billes ou plus sont touchantes. Le coup doit répondre à toutes les exigences d’un coup légal. Si c’est impossible, la partie est nulle. Voir 4p.</p>
        <p>Si la bille touchante bouge au départ du coup, alors il y a faute.</p>
        <br>
        <h3>4j COMBINAISONS :</h3>
        <p>Deux billes ou plus peuvent être empochées au cours du même tir. Sur une combinaison, vous pouvez…</p>
        <br>
        <p>(a) Toucher en premier une bille de votre groupe et empocher des billes de chaque groupe.</p>
        <p>(b) empocher votre (vos) dernière(s) bille(s) et la noire pour gagner la partie, en vous assurant de toucher en premier une bille de votre groupe et que toutes les billes soient empochées (cf. schéma n°6).</p>
        <p>(c) Jouer la noire (si la noire est «on») sur une bille adverse et empocher les deux pour gagner la partie.</p>
        <br>
        <p>Sur une combinaison après une faute, le tir libre peut servir à toucher n’importe quelle bille. Par exemple, vous pouvez jouer une bille adverse sur la noire pour gagner la partie, si la noire est «on». Dans ce cas, il n’est pas nécessaire d’empocher la bille adverse (règle 6b). Dans ces 3 cas les billes peuvent être empochées dans n’importe quel ordre.</p>
        <br>
        <h3>4k BILLES EN DEHORS DE LA TABLE :</h3>
        <p>(a) Il n’y a pas faute si une bille quitte la surface de jeu, roule le long d’une bande avant de retomber sur la table ou dans une poche, et que toutes les exigences d’un coup légal sont remplies</p>
        <p>(b) Il y a faute si la bille sort de la surface du jeu et touche une personne, ou un objet ne faisant pas parti de la table (comme un bleu) et retombe ensuite sur la table.</p>
        <br>
        <h3>4l REPLACEMENT DES BILLES SUR LA TABLE :</h3>
        <p>Après 4k(b), Les billes sont remises en jeu comme suit…</p>
        <p>(a) Si c’est la blanche, elle est jouée depuis la zone.</p>
        <p>(b) Si c’est la bille n°8 ou une bille de couleur, celle-ci doit être replacée sur l’emplacement du spot de la noire ou au plus près, sans toucher une autre bille, sur l’axe reliant ce point au centre de la ligne de zone.</p>
        <br>
        <p>Les billes sont replacées dans l’ordre suivant…</p>
        <p>(a) La bille noire.</p>
        <p>(b) Les billes rouges (ou bleues ou numérotées de 1 à 7).</p>
        <p>(c) Les billes jaunes (ou numérotées de 9 à 15).</p>
        <p>Replacer les billes le plus près possible les unes des autres sans se toucher</p>
        <br>
        <h3>4m INTERFÉRENCES ET MARQUAGE DE LA TABLE</h3>
        <p>Il n’y a PAS faute si les billes sont bougées dans ces circonstances…</p>
        <p>(a) Par des personnes autres que les joueurs prenant part à la partie OU</p>
        <p>(b) Si un des joueurs a été bousculé OU</p>
        <p>(c) Si un événement en dehors du contrôle du joueur se produit.</p>
        <p>L’arbitre devra replacer les billes au plus près de leurs positions d’origine.</p>
        <p>Un joueur ne doit pas utiliser un bleu ou un autre objet comme marqueur.</p>
        <p>Ce n’est pas une faute de poser un bleu sur la table lorsque le joueur est en contrôle, mais il doit être enlevé à la fin de son tour.</p>
        <p>Le marquage intentionnel destiné à aider la visée est une faute.</p>
        <br>
        <h3>4n BILLE TOMBANT DANS UNE POCHE SANS AVOIR ÉTÉ TOUCHÉE</h3>
        <p>(a) Si une bille tombe dans une poche sans avoir été touchée par une autre bille, après avoir été statique durant 5 secondes ou plus, ni pris aucune part au coup en cours, alors la bille est replacée et le jeu continu.</p>
        <p>(b) Si une bille tombe «d’elle-même» durant un coup, alors qu’elle aurait du être touchée par une autre bille en mouvement (blanche et/ou bille “on”), alors elle sera replacée et toutes les billes ayant bougées durant le coup seront remises à leurs positions initiales précédant le coup.</p>
        <p>Le joueur peut alors rejouer le même coup OU choisir un coup différent.</p>
        <p>(c) Si plusieurs billes ayant bougées et qu’il serait impossible de les replacer à leurs positions initiales, dans ce cas le triangle serait reformé sans qu’aucune pénalité ne soit infligée et la casse serait effectuée par le même joueur ayant cassé.</p>
        <p>(d) Si une bille oscille momentanément sur le bord de la poche avant de tomber, elle est alors considérée comme empochée et n’est pas replacée.</p>
        <br>
        <h3>4o BILLE DE COULEUR COLLÉE A UNE BANDE :</h3>
        <p>Quand la blanche, lors d’un tir, touche en premier une bille collée à une bande, il n’y a pas faute si…</p>
        <p>(a) Une bille est empochée OU</p>
        <p>(b) La blanche touche une bande OU</p>
        <p>(c) La bille collée touche une bande différente de celle où elle était OU</p>
        <p>(d) N’importe quelle autre bille touche une bande sur laquelle elle n’était pas en contact avant que le coup soit joué.</p>
        <p>Par contre, il y a faute si aucune des figures décrites ci-dessus n’est respectée. Une bille n’est pas considérée comme collée avant d’être annoncée comme telle par un arbitre ou un joueur, avant de jouer le coup.</p>
        <br>
        <h3>4p PAT Situation très rare où la ou les billes restant à jouer par l’un des joueurs ne sont plus accessibles en «TIR» direct ou indirect, la bille blanche ne disposant plus d’un passage suffisant pour atteindre la ou les billes concernées. Dans ce cas, la partie sera rejouée sans qu’aucune pénalité ne soit infligée.</h3>
        <p>(a) Si le PAT est accidentel, le joueur ayant cassé, casse à nouveau.</p>
        <p>(b) Si le PAT est par choix, un tirage à la bande sera refait pour la casse.</p>
        <p>De même après plusieurs tirs ne faisant pas évoluer la partie, l’arbitre devra avertir les joueurs qu’ils leur restent 3 coups chacun pour faire évoluer le jeu de manière significative. Si la configuration de la partie n’a toujours pas changée, celle-ci est à rejouer.</p>
        <p>Refaire le triangle implique de réduire le nombre de billes. Règle 8g.</p>
        <br>
        <h3>4q ACHÈVEMENT D’UNE PARTIE OU D’UN MATCH :</h3>
        <p>Une partie est terminée lorsque la noire est empochée légalement et que toutes les billes se sont arrêtées OU dans une situation de «perte de partie» (règle 7).</p>
        <p>L’arbitre attend que toutes les billes se soient arrêtées et annonce partie, manche ou match en faveur du joueur ou de l’équipe.</p>
        <p>Si l’arbitre n’a rien annoncé et que les billes sont toujours en mouvement, alors le joueur sera pénalisé d’une perte de partie si un autre coup est joué OU s’il interfère avec le mouvement des billes restantes.</p>
    </div>

    <button class="accordion-button">5 : <span>FAUTES</span></button>
    <div class="accordion-content">
        <h3>5a Empocher la bille blanche. Ceci inclue la casse.</h3>
        <h3>5b Jouer en dehors de la zone lorsqu’on est obligé de jouer à l’intérieur.</h3>
        <h3>5c Empocher une bille adverse sans avoir empoché une bille de son propre groupe (ou la noire si elle est «on»), excepté lorsque la table est libre</h3>
        <h3>5d Ne pas faire un coup légal. Règle 4c(b).</h3>
        <br>
        <h3>5e SAUTER PAR DESSUS UNE BILLE :</h3>
        <p>Si la blanche saute par-dessus une bille ou une partie d’une bille sans avoir au préalable touché une bille, alors il y a faute.</p>
        <br>
        <h3>5f POUSSETTE :</h3>
        <p>C’est lorsque le procédé reste en contact avec la blanche après qu’elle a commencé son mouvement.</p>
        <br>
        <h3>5g Ne pas toucher une bille «on» au sortir d’une position de snook.</h3>
        <p>Un joueur est considéré comme snooké lorsqu’il lui est impossible de toucher une bille «on» par un tir direct droit. Lorsqu’un joueur est snooké, il a seulement besoin de faire un contact sur une bille «on». Il ne lui est pas nécessaire d’empocher une bille OU de faire en sorte qu’une bille touche une bande (cf. schéma n°5). Les joueurs doivent demander confirmation du snook à un joueur, un arbitre ou un officiel avant de jouer le coup.</p>
        <br>
        <h3>5h Frapper la blanche avec une partie de la queue autre que le procédé.</h3>
        <h3>5i Jouer avant que toutes les billes ne se soient arrêtées.</h3>
        <h3>5j Jouer avant que toutes les billes n’aient été repositionnées.</h3>
        <h3>5k Jouer quand ce n’est pas son tour.</h3>
        <br>
        <h3>5l DOUBLE CONTACT :</h3>
        <p>Le procédé frappe la blanche plus d’une fois sur le même coup. Si le procédé frappe la blanche deux fois et que l’arbitre voit ou entend clairement chaque contact, alors il y a faute.</p>
        <h3>5m Jouer sans avoir au moins un pied en contact avec le sol. Sauf en cas de handicap physique ou autres problèmes particuliers.</h3>
        <h3>5n Toucher une bille.</h3>
        <p>Le corps d’un joueur, un vêtement, bijou ou accessoire, ou une partie de la queue, à l’exception du procédé lors d’un tir légal, touche une bille. Un procédé qui se détache ou un bleu qui tombe, est de la responsabilité du joueur. Si cela touche une bille en jeu, il y a faute. Un joueur est responsable de l’équipement qu’il apporte mais non de celui fourni pendant un tournoi. Si le bout d’un râteau fourni par les organisateurs tombe et touche une bille, il n’y a pas faute. Il y a faute seulement s’il s’agit de l’équipement propre au joueur.</p>
        <h3>5o Faire sortir une bille de la surface de jeu (cf. 4k(b))</h3>
        <h3>5p Faire bouger une bille de couleur ou la n°8 lorsque celle-ci est collée à la blanche (cf. 4i)</h3>
        <h3>5q Faire une faute à la casse (cf. 4b)</h3>
    </div>

    <button class="accordion-button">6 : <span>PÉNALITÉ APRÈS UNE FAUTE</span></button>
    <div class="accordion-content">
        <h3>6a Perte du contrôle de la table. Après une faute, le joueur perd sa prochaine visite et son adversaire bénéficie d’un tir libre suivi d’une visite.</h3>
        <p>Paragraphe associé au sous-titre 1.1</p>
        <h3>6b SUR UN TIR LIBRE APRÈS UNE PÉNALITÉ :</h3>
        <p>La table est libre. Sur le premier coup seulement (tir libre), le joueur peut toucher n’importe quelle bille sans pénalité (cf. schéma n°4)</p>
        <br>
        <p>Sur un tir libre, un joueur peut…</p>
        <p>(a) Toucher ou empocher une bille adverse.</p>
        <p>(b) Faire une combinaison en jouant directement une bille adverse et ainsi empocher ses propres billes OU :</p>
        <p>jouer ses propres billes et empocher n’importe quelle bille adverse. (c) Jouer la noire et empocher une bille adverse OU jouer la noire et empocher une de ses propres billes.</p>
        <p>(d) Jouer la noire, mais sans l’empocher, jusqu’à ce qu’elle soit «on». La noire peut être empochée en</p>
        <p>combinaison comme décrit règle 4j.</p>
        <br>
        <h3>6c Après une faute la bille blanche peut être…</h3>
        <p>Replacée dans la zone OU jouée d’où elle s’est arrêtée. Jouer selon les règles 6a et 6b.</p>
    </div>

    <button class="accordion-button">7 : <span>PERTE DE LA PARTIE</span></button>
    <div class="accordion-content">
        <h3>7a Faire une faute lorsque la noire est empochée.</h3>
        <h3>7b Empocher la noire alors qu’il reste des billes de son groupe sur la table après que le coup a été joué.</h3>
        <h3>7c Un joueur qui joue intentionnellement une bille non «on» commet une faute volontaire et perd la partie.</h3>
        <p>Un joueur qui, intentionnellement, ne tente pas de toucher une de ses billes ou qui rejoue une bille juste après l’annonce d’une faute, perd la partie. Ne pas essayer, de bonne foi, de jouer un coup légal est une faute volontaire, il en résulte une perte de partie.</p>
        <br>
        <h3>7d Toucher ou prendre délibérément une bille sur la surface de jeu est une perte de partie.</h3>
        <p>Excepté lors du repositionnement de la blanche dans la zone (règle 4c) seul l’arbitre peut toucher une bille. Si aucun arbitre n’est disponible, demandez à l’adversaire de prendre la blanche.</p>
        <br>
        <h3>7e Attraper ou éviter à une bille de tomber.</h3>
        <p>Si une bille (y compris la blanche) part pour être empochée, lui éviter de tomber et ainsi d’entrer dans la poche, fait perdre la partie.</p>
        <br>
        <h3>7f Perturber intentionnellement le jeu adverse par des paroles ou des gestes.</h3>
    </div>
    
    <button class="accordion-button">8 : <span>INSTRUCTIONS GÉNÉRALES DE TOURNOIS</span></button>
    <div class="accordion-content">
        <h3>8a COUPS CHRONOMÈTRES ET FAUTES</h3>
        <p>Les joueurs ont 60 secondes pour jouer un coup, y compris la casse ou un coup avec bille en main. L’arbitre commence à compter lorsque toutes les billes du coup précédant se sont arrêtées (voir ci-dessous, récupérer une blanche empochée). Si un joueur n’a pas joué dans les 60 secondes, il y a faute. Lorsque 30 secondes se sont écoulées, l’arbitre annonce «30 secondes». L’annonce doit être faite à l’instant même et ne doit pas être différée même si le joueur s’apprête à jouer son coup. L’arbitre peut reprendre la blanche empochée si un joueur met trop de temps à le faire. L’arbitre apportera la blanche au joueur en contrôle. Dès que le joueur a la bille en main, l’arbitre commence à compter. Le joueur a alors 60 secondes pour jouer le coup.</p>
        <br>
        <p>Une suspension de temps est demandée pour les raisons suivantes…</p>
        <p>(a) Le joueur demande un râteau.</p>
        <p>(b) Quelqu’un ou quelque chose gêne le joueur.</p>
        <p>(c) Il doit y avoir décision sur des billes touchantes.</p>
        <br>
        <h3>8b CONDUITE ANTI-SPORTIVE</h3>
        <p>Un manquement à «l’esprit du jeu» gratifie l’adversaire d’une partie ou du match.</p>
        <p>Une conduite anti-sportive peut être définie comme…</p>
        <p>(a) Un écart de langage.</p>
        <p>(b) Jeter sa queue ou la dévisser comme pour un abandon.</p>
        <p>(c) Se disputer avec un adversaire, l’arbitre ou un spectateur.</p>
        <p>(d) Etre constamment en désaccord avec les décisions de l’arbitre.</p>
        <p>(e) Interférer pendant qu’un adversaire joue un coup.</p>
        <p>(f) Ne pas quitter la table ou rester dans le champ de visée de l’adversaire.</p>
        <br>
        <h3>8c COACHING</h3>
        <p>Jouer sans aides extérieures.</p>
        <br>
        <p>Si, selon l’arbitre, le résultat a été faussé de quelque façon que ce soit, il peut être décidé de donner la partie à l’adversaire.</p>
        <br>
        <h3>8d QUITTER L’AIRE DE JEU :</h3>
        <p>Si un joueur doit quitter l’aire de jeu durant le match, il doit en avoir l’autorisation par l’arbitre. Cela ne doit arriver qu’en d’exceptionnelles circonstances. Sans arbitre, les joueurs devront faire en sorte de prendre les pauses entre les parties.</p>
        <br>
        <h3>8e Un arbitre peut, sur demande, informer un joueur sur les règles.</h3>
        <p>L’arbitre expliquera la règle au mieux de ses compétences. L’arbitre ne doit donner aucune opinion propre qui pourrait influencer le jeu, telle que la légalité d’un coup à jouer. Les arbitres ne peuvent être tenus responsables d’avoir donné de mauvaises informations. Il est de la responsabilité du joueur de connaître les règles.</p>
        <br>
        <h3>8f L’arbitre s’assure que trop de temps ne sera pas pris lors d’un coup.</h3>
        <p>Ce sera en accord avec les règles locales de compétition et est nécessaire lorsque la règle du chronomètre n’est pas appliquée telle que décrite dans la règle 8a.</p>
        <br>
        <h3>8g Partie à neuf billes après un jeu lent ou qui n’évolue plus.</h3>
        <p>Faire un triangle normal de quinze billes. Enlever la bille de tête et les cinq billes du bas. Les joueurs doivent faire un tirage pour déterminer la casse (sauf PAT accidentel,cf. 4p(a))</p>
        <br>
        <h3>8h EN DOUBLE :</h3>
        <p>Quand un joueur s’approche de la table, discuter avec d’autres personnes, partenaire inclus, est considéré comme anti-sportif.</p>
        <br>
        <h3>8i AUTO-ARBITRAGE :</h3>
        <p>Les désaccords entre les joueurs doivent être rapportés aux officiels du tournoi. Le jeu s’arrête afin de permettre d’aller chercher un officiel, car toute doléance doit être faite avant que le coup soit joué, sinon elle ne peut pas être prise en compte. Si un joueur ne fait pas ça, aucune faute ne peut être considérée comme avoir eu lieu. Un joueur doit accepter la requête d’un adversaire de suspendre le jeu afin d’aller chercher un officiel. S’il ne le fait pas, il en résulte une perte de partie ou du match.</p>

    </div>

</div>


@endsection
