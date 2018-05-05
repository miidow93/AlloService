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

}