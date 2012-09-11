<?php

namespace Poker;

/**
 * Poker Dealer test class
 *
 * @author Jason Brown <jason.brown@jbfreelance.co.uk>
 */
class dealerTest extends \PHPUnit_Framework_TestCase
{
    protected $dealer;
    
    public function setUp()
    {
        $this->dealer = new Dealer();
    }
    
    public function tearDown()
    {
        $this->dealer = null;
    }
    
    public function testDeal()
    {
        
    }
}

?>
