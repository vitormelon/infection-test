<?php


namespace TheNamespace;


final class TheThing
{
    public function __construct()
    {
    }

    public function getInput(int $input): bool
    {
        return $input === 10;
    }

}
