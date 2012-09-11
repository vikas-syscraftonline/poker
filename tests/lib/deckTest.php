<?php

namespace Poker;

/**
 * Poker Deck test class
 *
 * @author Jason Brown <jason.brown@jbfreelance.co.uk>
 */
class deckTest extends \PHPUnit_Framework_TestCase
{
    protected $deck;
    
    public function setUp()
    {
        $this->deck = new Deck();
    }
    
    public function tearDown()
    {
        $this->deck = null;
    }
    
    public function testDeckShuffle()
    {
        $this->assertNotEquals($this->deck->shuffle(), $this->deck->getCards(), 'Cards haven\'t been shuffled');
    }
    
    public function testDeckIsCorrectSize()
    {
        $this->assertEquals($this->deck->size(), 52, 'Deck size is too small, should be 52 cards');
    }
    
    public function testAddingCardToDeck()
    {
        $this->deck = new Deck(false);
        $card = Card::eightOf(Suit::DIAMONDS);
        $this->deck->add($card);
        $this->assertContains($card, $this->deck->getCards(), 'Deck doesn\'t contain the added card');
    }
}

?>
