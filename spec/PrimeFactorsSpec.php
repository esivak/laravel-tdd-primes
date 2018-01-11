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

    function it_returns_2_for2(){
        $this->generate(2)->shouldReturn([2]);
    }

    function it_returns_3_for3(){
        $this->generate(3)->shouldReturn([3]);
    }

    function it_returns_2_2_for4(){
        $this->generate(4)->shouldReturn([2,2]);
    }

    function it_returns_2_2_5_5_for100(){
        $this->generate(100)->shouldReturn([2,2,5,5]);
    }

    function it_returns7for7(){
        $this->generate(7)->shouldReturn([7]);
    }

}
