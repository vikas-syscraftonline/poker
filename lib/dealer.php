<?php

namespace Poker;

/**
 *  Dealer
 *
 * @author Jason Brown <jason.brown@jbfreelance.co.uk>
 */
class Dealer extends Player
{
    /**
     * @var Deck 
     */
    protected $deck;
    
    public function __construct(Deck $deck)
    {
        $this->deck = $deck;
    }
    
    public function deal()
    {
        
    }
}

?>
