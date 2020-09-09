<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * An employee.
 *
 * @ORM\Entity
 * @ApiResource
 */
class Employee
{
    /**
     * @var int The id of this employee.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Job title.
     *
     * @ORM\Column
     */
    public $title;

    /**
     * @var string Legal name.
     *
     * @ORM\Column
     */
    public $name;

     /**
     * @var Company The company this employee is employed by.
     *
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="employees")
     */
    public $company;

    public function __construct()
    {
        
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
?>