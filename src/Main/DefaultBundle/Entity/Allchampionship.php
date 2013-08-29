<?php

namespace Main\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Allchampionship
 */
class Allchampionship
{
    /**
     * @var string
     */
    private $season;

    /**
     * @var string
     */
    private $homeTeam;

    /**
     * @var string
     */
    private $awayTeam;

    /**
     * @var integer
     */
    private $halfTimeHomeGoals;

    /**
     * @var integer
     */
    private $halfTimeAwayGoals;

    /**
     * @var string
     */
    private $halfTimeResult;

    /**
     * @var integer
     */
    private $fullTimeHomeGoals;

    /**
     * @var integer
     */
    private $fullTimeAwayGoals;

    /**
     * @var string
     */
    private $fullTimeResult;

    /**
     * @var integer
     */
    private $fullTimeHomeCorners;

    /**
     * @var integer
     */
    private $fullTimeAwayCorners;

    /**
     * @var integer
     */
    private $totalCorners;

    /**
     * @var integer
     */
    private $homeYellow;

    /**
     * @var integer
     */
    private $awayYellow;

    /**
     * @var integer
     */
    private $homeRed;

    /**
     * @var integer
     */
    private $awayRed;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set season
     *
     * @param string $season
     * @return Allchampionship
     */
    public function setSeason($season)
    {
        $this->season = $season;
    
        return $this;
    }

    /**
     * Get season
     *
     * @return string 
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set homeTeam
     *
     * @param string $homeTeam
     * @return Allchampionship
     */
    public function setHomeTeam($homeTeam)
    {
        $this->homeTeam = $homeTeam;
    
        return $this;
    }

    /**
     * Get homeTeam
     *
     * @return string 
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * Set awayTeam
     *
     * @param string $awayTeam
     * @return Allchampionship
     */
    public function setAwayTeam($awayTeam)
    {
        $this->awayTeam = $awayTeam;
    
        return $this;
    }

    /**
     * Get awayTeam
     *
     * @return string 
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * Set halfTimeHomeGoals
     *
     * @param integer $halfTimeHomeGoals
     * @return Allchampionship
     */
    public function setHalfTimeHomeGoals($halfTimeHomeGoals)
    {
        $this->halfTimeHomeGoals = $halfTimeHomeGoals;
    
        return $this;
    }

    /**
     * Get halfTimeHomeGoals
     *
     * @return integer 
     */
    public function getHalfTimeHomeGoals()
    {
        return $this->halfTimeHomeGoals;
    }

    /**
     * Set halfTimeAwayGoals
     *
     * @param integer $halfTimeAwayGoals
     * @return Allchampionship
     */
    public function setHalfTimeAwayGoals($halfTimeAwayGoals)
    {
        $this->halfTimeAwayGoals = $halfTimeAwayGoals;
    
        return $this;
    }

    /**
     * Get halfTimeAwayGoals
     *
     * @return integer 
     */
    public function getHalfTimeAwayGoals()
    {
        return $this->halfTimeAwayGoals;
    }

    /**
     * Set halfTimeResult
     *
     * @param string $halfTimeResult
     * @return Allchampionship
     */
    public function setHalfTimeResult($halfTimeResult)
    {
        $this->halfTimeResult = $halfTimeResult;
    
        return $this;
    }

    /**
     * Get halfTimeResult
     *
     * @return string 
     */
    public function getHalfTimeResult()
    {
        return $this->halfTimeResult;
    }

    /**
     * Set fullTimeHomeGoals
     *
     * @param integer $fullTimeHomeGoals
     * @return Allchampionship
     */
    public function setFullTimeHomeGoals($fullTimeHomeGoals)
    {
        $this->fullTimeHomeGoals = $fullTimeHomeGoals;
    
        return $this;
    }

    /**
     * Get fullTimeHomeGoals
     *
     * @return integer 
     */
    public function getFullTimeHomeGoals()
    {
        return $this->fullTimeHomeGoals;
    }

    /**
     * Set fullTimeAwayGoals
     *
     * @param integer $fullTimeAwayGoals
     * @return Allchampionship
     */
    public function setFullTimeAwayGoals($fullTimeAwayGoals)
    {
        $this->fullTimeAwayGoals = $fullTimeAwayGoals;
    
        return $this;
    }

    /**
     * Get fullTimeAwayGoals
     *
     * @return integer 
     */
    public function getFullTimeAwayGoals()
    {
        return $this->fullTimeAwayGoals;
    }

    /**
     * Set fullTimeResult
     *
     * @param string $fullTimeResult
     * @return Allchampionship
     */
    public function setFullTimeResult($fullTimeResult)
    {
        $this->fullTimeResult = $fullTimeResult;
    
        return $this;
    }

    /**
     * Get fullTimeResult
     *
     * @return string 
     */
    public function getFullTimeResult()
    {
        return $this->fullTimeResult;
    }

    /**
     * Set fullTimeHomeCorners
     *
     * @param integer $fullTimeHomeCorners
     * @return Allchampionship
     */
    public function setFullTimeHomeCorners($fullTimeHomeCorners)
    {
        $this->fullTimeHomeCorners = $fullTimeHomeCorners;
    
        return $this;
    }

    /**
     * Get fullTimeHomeCorners
     *
     * @return integer 
     */
    public function getFullTimeHomeCorners()
    {
        return $this->fullTimeHomeCorners;
    }

    /**
     * Set fullTimeAwayCorners
     *
     * @param integer $fullTimeAwayCorners
     * @return Allchampionship
     */
    public function setFullTimeAwayCorners($fullTimeAwayCorners)
    {
        $this->fullTimeAwayCorners = $fullTimeAwayCorners;
    
        return $this;
    }

    /**
     * Get fullTimeAwayCorners
     *
     * @return integer 
     */
    public function getFullTimeAwayCorners()
    {
        return $this->fullTimeAwayCorners;
    }

    /**
     * Set totalCorners
     *
     * @param integer $totalCorners
     * @return Allchampionship
     */
    public function setTotalCorners($totalCorners)
    {
        $this->totalCorners = $totalCorners;
    
        return $this;
    }

    /**
     * Get totalCorners
     *
     * @return integer 
     */
    public function getTotalCorners()
    {
        return $this->totalCorners;
    }

    /**
     * Set homeYellow
     *
     * @param integer $homeYellow
     * @return Allchampionship
     */
    public function setHomeYellow($homeYellow)
    {
        $this->homeYellow = $homeYellow;
    
        return $this;
    }

    /**
     * Get homeYellow
     *
     * @return integer 
     */
    public function getHomeYellow()
    {
        return $this->homeYellow;
    }

    /**
     * Set awayYellow
     *
     * @param integer $awayYellow
     * @return Allchampionship
     */
    public function setAwayYellow($awayYellow)
    {
        $this->awayYellow = $awayYellow;
    
        return $this;
    }

    /**
     * Get awayYellow
     *
     * @return integer 
     */
    public function getAwayYellow()
    {
        return $this->awayYellow;
    }

    /**
     * Set homeRed
     *
     * @param integer $homeRed
     * @return Allchampionship
     */
    public function setHomeRed($homeRed)
    {
        $this->homeRed = $homeRed;
    
        return $this;
    }

    /**
     * Get homeRed
     *
     * @return integer 
     */
    public function getHomeRed()
    {
        return $this->homeRed;
    }

    /**
     * Set awayRed
     *
     * @param integer $awayRed
     * @return Allchampionship
     */
    public function setAwayRed($awayRed)
    {
        $this->awayRed = $awayRed;
    
        return $this;
    }

    /**
     * Get awayRed
     *
     * @return integer 
     */
    public function getAwayRed()
    {
        return $this->awayRed;
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
}
