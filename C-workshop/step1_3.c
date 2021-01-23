int principal()
{
    int nombre,somme = 0,in = 0;
 flotteur moyen;

 faire{
 printf (« Veuillez saisir un nombre : »);
 scanf (« %d », &nbr);

 si (nombre > -1){
            somme += nbr;
            in++;
        }
    }while(nbr > -1)
    moyen = (float)somme / in;

 printf (« le moyen est: %.2f » , moyen);

 retour 0;
}
