<?php

namespace Poker;

/**
 *  Poker Deck
 *
 * @author Jason Brown <jason.brown@jbfreelance.co.uk>
 */
class Deck
{
    protected $cards;
    
    public function __construct()
    {
        $this->cards = array();
    }
    
    public function size()
    {
        return count($this->card);
    }
    
    public function populate()
    {
        $suits = Suit::getSuits();
        
        foreach($suits as $suit)
        {
            $this->cards[] = Card::aceOf($suit);
            $this->cards[] = Card::twoOf($suit);
            $this->cards[] = Card::threeOf($suit);
            $this->cards[] = Card::fourOf($suit);
            $this->cards[] = Card::fiveOf($suit);
            $this->cards[] = Card::sixOf($suit);
            $this->cards[] = Card::sevenOf($suit);
            $this->cards[] = Card::eightOf($suit);
            $this->cards[] = Card::nineOf($suit);
            $this->cards[] = Card::tenOf($suit);
            $this->cards[] = Card::jackOf($suit);
            $this->cards[] = Card::queenOf($suit);
            $this->cards[] = Card::kingOf($suit);
        }
        
        return $this->cards;
    }
    
    /**
     * Shuffles the deck
     * @return \Poker\Deck
     */
    public function shuffle()
    {
        shuffle($this->cards);
        return $this;
    }
    
    /**
     * @param Card $Card
     * @throws Exception
     */
    public function add(Card $Card)
    {
        if (array_key_exists("{$Card}", $this->cards)) {
            throw new Exception('Cannot contain the same card twice!');
        } else {
            $this->cards["{$Card}"] = $Card;
        }
    }
    
    /**
     * Returns the deck
     * @return array
     */
    public function getCards()
    {
        return $this->cards;
    }
}

?>
