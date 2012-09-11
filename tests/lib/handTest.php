<?php

namespace Poker;

/**
 * Poker Deck test class
 *
 * @author Jason Brown <jason.brown@jbfreelance.co.uk>
 */
class handTest extends \PHPUnit_Framework_TestCase
{
    protected $hand;
    
    public function setUp()
    {
        $this->hand = new Hand();
    }
    
    public function tearDown()
    {
        $this->hand = null;
    }
    
    public function testAddingCardToHand()
    {
        $this->hand->add(Card::aceOf(Suit::CLUBS));
        $this->assertEquals(count($this->hand->getCards()), 1);
    }
}

?>
