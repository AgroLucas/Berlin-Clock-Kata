-- CONVERT: --

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


-- TESTS: --

Convention de nommage des méthodes de test:
toutes les méthodes de test de convert commencent par
    test_convert_

La partie given respecte le format:
    givenXXHXXMXXS_
Exemple partie GIVEN:
    given12H40M00S_

La partie shouldReturn donne une représentation textuelle de l'horloge
où les lignes sont séparées par le charactère 'V',
'x' représente une lampe éteinte,
'y' une lampe allumée en jaune
et 'r' une lampe allumée en rouge

L'ordre des lignes est secondes, 5heures, 1heure, 5minutes, 1minute

Le premier charactère de la représentation (lampe des secondes) est en majuscule pour respecter le cammelcase
et rendre plus visible la séparation entre le mot return et le début de l'horloge.

Exemple partie shouldReturn:
    shouldReturnXVxxxxVxxxxVyyrxxxxxxxxVyxxx


Exemple de nom complet de méthode de test:
    test_convert_given00H59M00S_shouldReturnXVxxxxVxxxxVyyryyryyryyVyyyy