<?php

namespace AppBundle\PageNumber;


class PageNumber
{
    private $nb_per_pages;

    public function __construct($nbPerPage)
    {
        $this->nb_per_pages = $nbPerPage;
    }

    public function numberOfPages($nbComments)
    {
        // Ici je fixe le nombre d'annonces par page à 10
        // Mais bien sûr il faudrait utiliser un paramètre, et y accéder via $this->container->getParameter('nb_per_page')
        // On calcule le nombre total de pages grâce au count($listComment) qui retourne le nombre total d'annonces
        $nbPages = ceil(count($nbComments) / $this->nb_per_pages);
        $nbPages === 0.0 ? $nbPages = 1 :$nbPages;
        return $nbPages;
    }

}
