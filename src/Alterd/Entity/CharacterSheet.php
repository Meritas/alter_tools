<?php

namespace Alterd\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="character_sheets")
 */
class CharacterSheet
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     * @ORM\Column(type="integer", options={"default" = 0})
     */
    private $uid;

    /**
     * @var string
     * @ORM\Column(type="string", length=52)
     */
    private $characterName;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $characterHp;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $characterEn;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $characterStr;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $characterAgi;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $characterSpd;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $characterWp;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $characterMoney;

    /**
     * @var string
     * @ORM\Column(type="string", length=52)
     */
    private $characterInventory;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $characterInfo;


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
     * Set characterName
     *
     * @param string $characterName
     * @return CharacterSheet
     */
    public function setCharacterName($characterName)
    {
        $this->characterName = $characterName;

        return $this;
    }

    /**
     * Get characterName
     *
     * @return string 
     */
    public function getCharacterName()
    {
        return $this->characterName;
    }

    /**
     * Set characterHp
     *
     * @param integer $characterHp
     * @return CharacterSheet
     */
    public function setCharacterHp($characterHp)
    {
        $this->characterHp = $characterHp;

        return $this;
    }

    /**
     * Get characterHp
     *
     * @return integer 
     */
    public function getCharacterHp()
    {
        return $this->characterHp;
    }

    /**
     * Set characterEn
     *
     * @param integer $characterEn
     * @return CharacterSheet
     */
    public function setCharacterEn($characterEn)
    {
        $this->characterEn = $characterEn;

        return $this;
    }

    /**
     * Get characterEn
     *
     * @return integer 
     */
    public function getCharacterEn()
    {
        return $this->characterEn;
    }

    /**
     * Set characterStr
     *
     * @param integer $characterStr
     * @return CharacterSheet
     */
    public function setCharacterStr($characterStr)
    {
        $this->characterStr = $characterStr;

        return $this;
    }

    /**
     * Get characterStr
     *
     * @return integer 
     */
    public function getCharacterStr()
    {
        return $this->characterStr;
    }

    /**
     * Set characterAgi
     *
     * @param integer $characterAgi
     * @return CharacterSheet
     */
    public function setCharacterAgi($characterAgi)
    {
        $this->characterAgi = $characterAgi;

        return $this;
    }

    /**
     * Get characterAgi
     *
     * @return integer 
     */
    public function getCharacterAgi()
    {
        return $this->characterAgi;
    }

    /**
     * Set characterSpd
     *
     * @param integer $characterSpd
     * @return CharacterSheet
     */
    public function setCharacterSpd($characterSpd)
    {
        $this->characterSpd = $characterSpd;

        return $this;
    }

    /**
     * Get characterSpd
     *
     * @return integer 
     */
    public function getCharacterSpd()
    {
        return $this->characterSpd;
    }

    /**
     * Set characterWp
     *
     * @param integer $characterWp
     * @return CharacterSheet
     */
    public function setCharacterWp($characterWp)
    {
        $this->characterWp = $characterWp;

        return $this;
    }

    /**
     * Get characterWp
     *
     * @return integer 
     */
    public function getCharacterWp()
    {
        return $this->characterWp;
    }

    /**
     * Set characterMoney
     *
     * @param integer $characterMoney
     * @return CharacterSheet
     */
    public function setCharacterMoney($characterMoney)
    {
        $this->characterMoney = $characterMoney;

        return $this;
    }

    /**
     * Get characterMoney
     *
     * @return integer 
     */
    public function getCharacterMoney()
    {
        return $this->characterMoney;
    }

    /**
     * Set characterInventory
     *
     * @param string $characterInventory
     * @return CharacterSheet
     */
    public function setCharacterInventory($characterInventory)
    {
        $this->characterInventory = $characterInventory;

        return $this;
    }

    /**
     * Get characterInventory
     *
     * @return string 
     */
    public function getCharacterInventory()
    {
        return $this->characterInventory;
    }

    /**
     * Set characterInfo
     *
     * @param string $characterInfo
     * @return CharacterSheet
     */
    public function setCharacterInfo($characterInfo)
    {
        $this->characterInfo = $characterInfo;

        return $this;
    }

    /**
     * Get characterInfo
     *
     * @return string 
     */
    public function getCharacterInfo()
    {
        return $this->characterInfo;
    }

    public function getFields(){
        return(array(
            'uid'=>                 $this->uid,
            'character_name'=>      $this->characterName,
            'character_hp'=>        $this->characterHp,
            'character_en'=>        $this->characterEn,
            'character_str'=>       $this->characterStr,
            'character_agi'=>       $this->characterAgi,
            'character_spd'=>       $this->characterSpd,
            'character_wp'=>        $this->characterWp,
            'character_money'=>     $this->characterMoney,
            'character_inventory'=> $this->characterInventory,
            'character_info'=>      $this->characterInfo,
        ));
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return CharacterSheet
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }
}
