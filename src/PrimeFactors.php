<?php

class PrimeFactors
{
    public function generate($num)
    {
        // TODO: write logic here

        $primes = [];

        while ($num%2==0){
            $primes[] = 2;
            $num /=2;
        }

        for ($i = 3; $i <= sqrt($num); $i+= 2)
        {
            // While i divides n, print i and divide n
            while ($num%$i == 0)
            {
                $primes[] = $i;
                $num/= $i;
            }

        }
        if ($num > 2){
            $primes[] = $num;
        }

        return $primes;

    }
}
