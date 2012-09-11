<?php

namespace Poker;

/**
 *  Poker Player
 *
 * @author Jason Brown <jason.brown@jbfreelance.co.uk>
 */
class Player
{
    /**
     * Player's name
     * @var string 
     */
    protected $name;
    
    /**
     * Players Poker Hand
     * @var Hand 
     */
    protected $hand;
    
    /**
     * @var Blind 
     */
    protected $blind;
    
    /**
     * States whether the player has folded/mucked their hand
     * @var boolean 
     */
    protected $folded = false;
    
    /**
     * Constructor
     * @param string $name 
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Matches the last bet/raise 
     */
    public function call()
    {
        
    }
    
    /**
     * Indicates a player wishes to pass
     * latest round of betting, but retain their hand 
     */
    public function check()
    {
        
    }
    
    /**
     * Raise players bet 
     */
    public function raise($value)
    {
        // Get Pots current bet, and raise it by the value provided
    }
    
    /**
     *  Player wishes to forfeit interest in current pot
     */
    public function fold()
    {
        
    }
    
    /**
     * Calculates players hand
     */
    public function showHand()
    {
        
    }
    
    
}

?>
