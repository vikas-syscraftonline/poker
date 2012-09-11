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
    
    protected $type;
    protected $value;
    
    public function __construct($type, $value)
    {
        $this->type = $type;
        $this->value = $value;
    }
    
    /**
     * Gets array of all suits
     * @return array
     */
    public static function getBlinds()
    {
        return array(self::BIG, self::SMALL);
    }
    
    /**
     * Creates a big blind
     * @param int $value
     * @return \Poker\Blind 
     */
    public static function big($value)
    {
        return new Blind(self::BIG, $value);
    }
    
    /**
     * Creates a small blind
     * @param int $value
     * @return \Poker\Blind 
     */
    public static function small($value)
    {
        return new Blind(self::SMALL, $value);
    }
}

?>
