<?php

namespace Poker;

/**
 * Poker Hand
 *
 * @author Jason Brown <jason.brown@jbfreelance.co.uk>
 */
class Hand
{
    protected $cards;
    
    public function __construct()
    {
        $this->cards = array();
    }
    
    /**
     * @param Card $Card
     * @throws Exception
     */
    public function add(Card $Card)
    {
        if (in_array($Card, $this->cards)) {
            throw new \Exception('Cannot contain the same card twice!');
        } else {
            //@todo num cards in hand against a set of rules
            if(count($this->cards) < 5)
            {
                $this->cards[] = $Card;
            }else{
                throw new \Exception('Too many cards for this hand, do you have an one up your sleeve?');
            }
        }
    }
    
    /**
     * Returns Array of Cards
     * @return array 
     */
    public function getCards()
    {
        return $this->cards;
    }
}

?>
