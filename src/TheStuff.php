<?php

namespace TheNamespace;

class TheStuff
{

    private TheThing $theThing;
    public function __construct(TheThing $theThing)
    {
        $this->theThing = $theThing;
    }

    private function theStuff(int $input)
    {
        if ($input) {
            return true;
        }
        return false;
    }


    public function doTheThing(int $input) : bool
    {
        $thing = $this->theThing->getInput($input);
        return $this->theStuff($thing);
    }

}
