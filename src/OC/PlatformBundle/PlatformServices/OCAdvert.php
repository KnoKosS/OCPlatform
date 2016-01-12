<?php

namespace OC\PlatformBundle\PlatformServices;

class OCAdvert
{
    private $length;

    public function __construct($length)
    {
        $this->length = (int) $length;
    }
    /**
     * Renvoie les dernières annonces
    **/
    public function lastAdvert()
    {
        // Ici, on récupérera la liste des dernière annonces
        $listAdverts = array(
          array(
            'title'   => 'Recherche développpeur Symfony2',
            'id'      => 1,
            'author'  => 'Alexandre',
            'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
            'date'    => new \Datetime()),
          array(
            'title'   => 'Mission de webmaster',
            'id'      => 2,
            'author'  => 'Hugo',
            'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
            'date'    => new \Datetime()),
          array(
            'title'   => 'Offre de stage webdesigner',
            'id'      => 3,
            'author'  => 'Mathieu',
            'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
            'date'    => new \Datetime())
        );

        return $listAdverts;
    }
}
