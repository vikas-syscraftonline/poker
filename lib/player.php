<?php

namespace Poker;

/**
 *  Poker Player
 *
 * @author Jason Brown <jason.brown@jbfreelance.co.uk>
 */
class Player
{
    protected $name;
    protected $hand;
    
    public function __construct($name, $hand)
    {
        $this->name = $name;
        $this->hand = $hand;
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
