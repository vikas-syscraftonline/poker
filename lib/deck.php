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
    
    /**
     * Constructor
     * @param boolean $populate - Whether to auto populate the deck
     */
    public function __construct($populate = true)
    {
        $this->cards = array();
        
        // Check whether we should auto-populate the deck
        if($populate)
        {
            $this->populate();
        }
    }
    
    public function size()
    {
        return count($this->cards);
    }
    
    public function populate()
    {
        $suits = Suit::getSuits();

        foreach($suits as $suit)
        {
            $this->add(Card::aceOf($suit));
            $this->add(Card::twoOf($suit));
            $this->add(Card::threeOf($suit));
            $this->add(Card::fourOf($suit));
            $this->add(Card::fiveOf($suit));
            $this->add(Card::sixOf($suit));
            $this->add(Card::sevenOf($suit));
            $this->add(Card::eightOf($suit));
            $this->add(Card::nineOf($suit));
            $this->add(Card::tenOf($suit));
            $this->add(Card::jackOf($suit));
            $this->add(Card::queenOf($suit));
            $this->add(Card::kingOf($suit));
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
        if (in_array($Card, $this->cards)) {
            throw new \Exception('Cannot contain the same card twice!');
        } else {
            $this->cards[] = $Card;
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
