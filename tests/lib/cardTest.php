<?php

namespace Poker;

/**
 * Poker Card test class
 * 
 * @author Jason Brown <jason.brown@jbfreelance.co.uk> 
 */
class CardTest extends \PHPUnit_Framework_TestCase
{
    protected $card;
    
    public function setUp()
    {
        $this->card = new Card(Suit::CLUBS, 1);
    }
    
    public function tearDown()
    {
        $this->card = null;
    }
    
    public function testCardHasCorrectValue()
    {
        $this->assertEquals($this->card->getValue(), 1, 'Card value is incorrect');
    }
    
    public function testCardHasCorrectSuit()
    {
        $this->assertEquals($this->card->getSuit(), Suit::CLUBS, 'Card suit is incorrect');
    }
    
    public function testAceOf()
    {
        $this->card = Card::aceOf(Suit::CLUBS);
        $this->assertEquals($this->card->getValue(), 1, 'Card is not an Ace');
    }
    
    public function testAceOfClubs()
    {
        $this->card = Card::aceOf(Suit::CLUBS);
        $this->assertEquals($this->card->getSuit(), Suit::CLUBS, 'Card suit is not a Club');
        $this->assertEquals($this->card->getValue(), 1, 'Card is not an Ace');
    }
}
?>
