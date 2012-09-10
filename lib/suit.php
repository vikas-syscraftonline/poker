<?php

namespace Poker;

/**
 * Poker Card Suit - pseudo enumerated type
 *
 * @author Jason Brown <jason.brown@jbfreelance.co.uk>
 */
class Suit
{
    const SPADES = 'Spades';
    const DIAMONDS = 'Diamonds';
    const HEARTS = 'Hearts';
    const CLUBS = 'Clubs';
    
    /**
     * Gets array of all suits
     * @return array
     */
    public static function getSuits()
    {
        return array(self::SPADES, self::DIAMONDS, self::HEARTS, self::CLUBS);
    }
}

?>
