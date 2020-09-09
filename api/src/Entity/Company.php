<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * A company.
 *
 * @ORM\Entity
 * @ApiResource
 */
class Company
{
    /**
     * @var int The id of this company.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Official name.
     *
     * @ORM\Column
     */
    public $name;

    /**
     * @var Employee[] All employees of this company.
     *
     * @ORM\OneToMany(targetEntity="Employee", mappedBy="company", cascade={"persist", "remove"})
     */
    public $employees;

    public function __construct()
    {
        $this->employees = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
?>