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
    
    public function testTwoOf()
    {
        $this->card = Card::twoOf(Suit::CLUBS);
        $this->assertEquals($this->card->getValue(), 2, 'Card is not a Two');
    }
    
    public function testThreeOf()
    {
        $this->card = Card::threeOf(Suit::CLUBS);
        $this->assertEquals($this->card->getValue(), 3, 'Card is not a Three');
    }
    
    public function testFourOf()
    {
        $this->card = Card::fourOf(Suit::CLUBS);
        $this->assertEquals($this->card->getValue(), 4, 'Card is not a Four');
    }
    
    public function testFiveOf()
    {
        $this->card = Card::fiveOf(Suit::CLUBS);
        $this->assertEquals($this->card->getValue(), 5, 'Card is not a Five');
    }
    
    public function testSizeOf()
    {
        $this->card = Card::sixOf(Suit::CLUBS);
        $this->assertEquals($this->card->getValue(), 6, 'Card is not a Six');
    }
    
    public function testSevenOf()
    {
        $this->card = Card::sevenOf(Suit::CLUBS);
        $this->assertEquals($this->card->getValue(), 7, 'Card is not a Seven');
    }
    
    public function testEightOf()
    {
        $this->card = Card::eightOf(Suit::CLUBS);
        $this->assertEquals($this->card->getValue(), 8, 'Card is not a Eight');
    }
    
    public function testNineOf()
    {
        $this->card = Card::nineOf(Suit::CLUBS);
        $this->assertEquals($this->card->getValue(), 9, 'Card is not a Nine');
    }
    
    public function testTenOf()
    {
        $this->card = Card::tenOf(Suit::CLUBS);
        $this->assertEquals($this->card->getValue(), 10, 'Card is not a Ten');
    }
    
    public function testJackOf()
    {
        $this->card = Card::jackOf(Suit::CLUBS);
        $this->assertEquals($this->card->getValue(), 11, 'Card is not a Jack');
    }
    
    public function testQueenOf()
    {
        $this->card = Card::queenOf(Suit::CLUBS);
        $this->assertEquals($this->card->getValue(), 12, 'Card is not a Queen');
    }
    
    public function testKingOf()
    {
        $this->card = Card::kingOf(Suit::CLUBS);
        $this->assertEquals($this->card->getValue(), 13, 'Card is not a King');
    }
}
?>
