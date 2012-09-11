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
     * Calculates players hand
     */
    public function showHand()
    {
        
    }
}

?>
