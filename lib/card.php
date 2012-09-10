<?php

namespace Poker;

/**
 *  Poker Card
 *
 * @author Jason Brown <jason.brown@jbfreelance.co.uk>
 */
class Card
{
    /**
     * Suit of card
     * @var string 
     */
    protected $suit;
    
    /**
     * Face value of card
     * @var int 
     */
    protected $value;
    
    public function __construct($suit, $value)
    {
        $this->suit = $suit;
        $this->value = $value;
    }
    
    public function getValue()
    {
        return $this->value;
    }
    
    public function getSuit()
    {
        return $this->suit;
    }
    
    public static function aceOf($suit)
    {
        return new Card($suit, 1);
    }
    
    public static function twoOf($suit)
    {
        return new Card($suit, 2);
    }
    
    public static function threeOf($suit)
    {
        return new Card($suit, 3);
    }
    
    public static function fourOf($suit)
    {
        return new Card($suit, 4);
    }
    
    public static function fiveOf($suit)
    {
        return new Card($suit, 5);
    }
    
    public static function sixOf($suit)
    {
        return new Card($suit, 6);
    }
    
    public static function sevenOf($suit)
    {
        return new Card($suit, 7);
    }
    
    public static function eightOf($suit)
    {
        return new Card($suit, 8);
    }
    
    public static function nineOf($suit)
    {
        return new Card($suit, 9);
    }
    
    public static function tenOf($suit)
    {
        return new Card($suit, 10);
    }
    
    public static function jackOf($suit)
    {
        return new Card($suit, 11);
    }
    
    public static function queenOf($suit)
    {
        return new Card($suit, 12);
    }
    
    public static function kingOf($suit)
    {
        return new Card($suit, 13);
    }
}

?>
