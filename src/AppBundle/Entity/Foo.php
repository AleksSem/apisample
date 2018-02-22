<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 *
 * @ApiResource
 * @ORM\Entity
 */
class Foo
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Something else
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $bar = '';

    /**
     * @var string Test string
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    private $test = '';

    public function getId()
    {
        return $this->id;
    }

    public function getBar() : string
    {
        return $this->bar;
    }

    public function setBar(string $bar)
    {
        $this->bar = $bar;
    }

    /**
     * @return string
     */
    public function getTest(): string
    {
        return $this->test;
    }

    /**
     * @param string $test
     */
    public function setTest(string $test)
    {
        $this->test = $test;
    }
}
