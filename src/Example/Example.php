<?php

namespace Example;

class Example
{
    public function isInt($int): bool
    {
        if(intval($int) === $int){
            return true;
        }

        return false;
    }
}