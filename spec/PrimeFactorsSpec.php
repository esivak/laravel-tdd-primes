<?php

namespace spec;

use PrimeFactors;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PrimeFactors::class);
    }


    function it_returns_an_empty_array_for1(){
        $this->generate(1)->shouldReturn([]);
    }
}
