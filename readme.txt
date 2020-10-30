CONVERT:

La méthode convert de la classe BerlinClock donne une représentation de
l'horloge de berlin à partir d'une heure conventionnelle.

On passe trois entiers en paramètres, pour les heures, minutes et secondes

La méthode renvoie un array à deux dimentions de strings, chaque ligne correspond à une ligne de l'horloge de berlin
et chaque string dans cette ligne correspond à une lampe

Les valeurs possibles pour les strings sont:
""  :  éteint
"Y" :  jaune
"R" :  rouge

Si les paramètres donnés à l'appel de la méthode ne représentent pas une heure valide,
la méthode renvoie NULL.