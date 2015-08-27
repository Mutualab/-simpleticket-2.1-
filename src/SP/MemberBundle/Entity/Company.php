<?php

namespace SP\MemberBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="SP\MemberBundle\Repository\CompanyRepository")
 */
class Company
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cpy_name", type="string", length=255)
     */
    private $cpyName;

     /**
     * @ORM\ManyToMany(targetEntity="Member", mappedBy="companies")
     **/
    private $members;

    public function __construct() {
        $this->members = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cpyName
     *
     * @param string $cpyName
     * @return Company
     */
    public function setCpyName($cpyName)
    {
        $this->cpyName = $cpyName;

        return $this;
    }

    /**
     * Get cpyName
     *
     * @return string
     */
    public function getCpyName()
    {
        return $this->cpyName;
    }
}
