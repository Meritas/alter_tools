<?php

namespace Alterd\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="skills")
 */
class Skill
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=104)
     */
    private $skillName;

    /**
     * @var string
     * @ORM\Column(type="string", length=52)
     */
    private $skillExpertise;

    /**
     * @var string
     * @ORM\Column(type="string", length=520)
     */
    private $skillDescription;


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
     * Set skillName
     *
     * @param string $skillName
     * @return Skill
     */
    public function setSkillName($skillName)
    {
        $this->skillName = $skillName;

        return $this;
    }

    /**
     * Get skillName
     *
     * @return string 
     */
    public function getSkillName()
    {
        return $this->skillName;
    }

    /**
     * Set skillExpertise
     *
     * @param string $skillExpertise
     * @return Skill
     */
    public function setSkillExpertise($skillExpertise)
    {
        $this->skillExpertise = $skillExpertise;

        return $this;
    }

    /**
     * Get skillExpertise
     *
     * @return string 
     */
    public function getSkillExpertise()
    {
        return $this->skillExpertise;
    }

    /**
     * Set skillDescription
     *
     * @param string $skillDescription
     * @return Skill
     */
    public function setSkillDescription($skillDescription)
    {
        $this->skillDescription = $skillDescription;

        return $this;
    }

    /**
     * Get skillDescription
     *
     * @return string 
     */
    public function getSkillDescription()
    {
        return $this->skillDescription;
    }
}
