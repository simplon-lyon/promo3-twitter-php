<?php
/*
Les classes sont un moyen de représenter nos données en programmation
en regroupant dans une même classe des propriétés et des function
liées de manière logique.
Ici, nous définissons une classe Tweet qui représente le
modèle/concept de tweet. Nous y définissons ce qui constituera
un tweet.
Pour être utilisée, il faudra faire ce qu'on appel une instance
de cette classe.
*/
class Tweet{
    public $pseudo;
    public $message;
    public $date;
    public $retweets;
    public $likes;
    public $avatar;
}