<?php

namespace MediaBundle\Entity;

/**
 * Commentaire
 */
class Commentaire
{


    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $utilisateur;

    /**
     * @var string
     */
    private $commentaires;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set utilisateur
     *
     * @param string $utilisateur
     *
     * @return Commentaire
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return string
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set commentaires
     *
     * @param string $commentaires
     *
     * @return Commentaire
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Get commentaires
     *
     * @return string
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }
    /**
     * @var \MediaBundle\Entity\Album
     */
    private $album;


    /**
     * Set album
     *
     * @param \MediaBundle\Entity\Album $album
     *
     * @return Commentaire
     */
    public function setAlbum(\MediaBundle\Entity\Album $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \MediaBundle\Entity\Album
     */
    public function getAlbum()
    {
        return $this->album;
    }
}
