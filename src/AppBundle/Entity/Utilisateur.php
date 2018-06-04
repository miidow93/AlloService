<?php
/**
 * Created by PhpStorm.
 * User: Mohammed
 * Date: 03/05/2018
 * Time: 13:29
 */

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class Utilisateur
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 * @ORM\HasLifecycleCallbacks
 */
class Utilisateur extends BaseUser
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="nom", type="string", nullable=false)
     *
     */
    protected $nom;

    /**
     * @var string
     * @ORM\Column(name="prenom", type="string", nullable=false)
     *
     */
    protected $prenom;

    /**
     * @var string
     * @ORM\Column(name="cin", type="string", nullable=false)
     *
     */
    protected $cin;

    /**
     * @var string
     * @ORM\Column(name="sexe", type="string", nullable=false)
     *
     */
    protected $sexe;

    /**
     * @var string
     * @ORM\Column(name="telephone", type="string", nullable=false)
     *
     */
    protected $telephone;

    /**
     * @var string
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=true)
     *
     */
    protected $facebook_id;


    /** @ORM\Column(name="facebook_access_token", type="string", length=255, nullable=true) */
    protected $facebook_access_token;

    /** @ORM\Column(name="google_id", type="string", length=255, nullable=true) */
    protected $google_id;

    /** @ORM\Column(name="google_access_token", type="string", length=255, nullable=true) */
    protected $google_access_token;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $image_url;

    /**
     * @var datetime
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @var datetime
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updated_at;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Gets triggered only on insert

     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->created = new \DateTime("now");
    }

    /**
     * Gets triggered every time on update

     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updated = new \DateTime("now");
    }


    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set cin.
     *
     * @param string $cin
     *
     * @return Utilisateur
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin.
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set sexe.
     *
     * @param string $sexe
     *
     * @return Utilisateur
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe.
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set telephone.
     *
     * @param string $telephone
     *
     * @return Utilisateur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone.
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set facebookId.
     *
     * @param string|null $facebookId
     *
     * @return Utilisateur
     */
    public function setFacebookId($facebookId = null)
    {
        $this->facebook_id = $facebookId;

        return $this;
    }

    /**
     * Get facebookId.
     *
     * @return string|null
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Set googleId.
     *
     * @param string|null $googleId
     *
     * @return Utilisateur
     */
    public function setGoogleId($googleId = null)
    {
        $this->google_id = $googleId;

        return $this;
    }

    /**
     * Get googleId.
     *
     * @return string|null
     */
    public function getGoogleId()
    {
        return $this->google_id;
    }

    /**
     * Set googleAccessToken.
     *
     * @param string|null $googleAccessToken
     *
     * @return Utilisateur
     */
    public function setGoogleAccessToken($googleAccessToken = null)
    {
        $this->google_access_token = $googleAccessToken;

        return $this;
    }

    /**
     * Get googleAccessToken.
     *
     * @return string|null
     */
    public function getGoogleAccessToken()
    {
        return $this->google_access_token;
    }

    /**
     * Set imageUrl.
     *
     * @param string|null $imageUrl
     *
     * @return Utilisateur
     */
    public function setImageUrl($imageUrl = null)
    {
        $this->image_url = $imageUrl;

        return $this;
    }

    /**
     * Get imageUrl.
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Utilisateur
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return Utilisateur
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
