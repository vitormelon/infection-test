<?php

namespace TheNamespace\Unit;

use Codeception\Test\Unit;
use TheNamespace\TheStuff;
use TheNamespace\TheThing;

use DG\BypassFinals;

class MyTest extends Unit
{

    protected function _before()
    {
        BypassFinals::enable();
    }

    protected function _after()
    {
    }

    // tests
    public function testGivenInputTenWhenDoTheTihngThenShoudReturnTrue()
    {
        $theThing = new TheThing();
        $theStuff = new TheStuff($theThing);
        $result = $theStuff->doTheThing(10);
        $this->assertTrue($result, "The thing must be True");
    }

    public function testGivenInputNotTenWhenDoTheTihngThenShoudReturnFalse()
    {
        $theThing = new TheThing();
        $theStuff = new TheStuff($theThing);
        $result = $theStuff->doTheThing(9);
        $this->assertFalse($result, "The thing must be False");
    }

    public function testGivenMockedTheThingAndAnyInputThenShoudReturnTrue()
    {
        $theThing = $this->makeEmpty(TheThing::class, ['getInput' => true]);
        $theStuff = new TheStuff($theThing);
        $result = $theStuff->doTheThing(99);
        $this->assertTrue($result, "The thing must be True");
    }
}
