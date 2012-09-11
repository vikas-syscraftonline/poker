<?php

namespace Poker;

/**
 * Poker Blind - pseudo enumerated type
 *
 * @author Jason Brown <jason.brown@jbfreelance.co.uk>
 */
class Blind
{
    const BIG = 'Big';
    const SMALL = 'Small';
    
    /**
     * Gets array of all suits
     * @return array
     */
    public static function getBlinds()
    {
        return array(self::BIG, self::SMALL);
    }
}

?>
