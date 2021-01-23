#include <stdio.h>
#include <stdlib.h>

int principal()
{
    int nombre1,nombre2;
    int somme,sous,prod,module;
 quot flotteur;

 printf (« veuillez saisir le premier nombre : \n »);
 scanf (« %d », &nombre1);

 printf (« veuillez saisir le deuxieme nombre : \n »);
 scanf (« %d »,&nombre2);

    somme = nombre1 + nombre2;
    sous = nombre1 - nombre2;
    prod = nombre1 * nombre2;
    module = nombre1 % nombre2;
    quot = (float)nombre1 / nombre2;

 printf (« somme est %d\n », somme);
 printf (« soustraction est %d\n », sous);
 printf (« produit est %d\n », prod);
 printf (« reste est %d\n », module);
 printf (« quotien est .2f », quot);

 retour 0;
}