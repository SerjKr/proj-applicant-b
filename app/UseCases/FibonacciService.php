<?php

namespace App\UseCases;

use App\Models\Fib;

class FibonacciService
{
    public function nearestFibonacci($num)
    {
        $first = 0;
        $second = 1;

        if (!$num) {
            return 0;
        }

        $third = $first + $second;

        while ($third <= $num) {
            $first = $second;
            $second = $third;
            $third = $first + $second;
        }

        return (abs($third - $num) >= abs($second - $num))
            ? $second
            : $third;
    }

    public function create($fibonacci)
    {
        $fib = Fib::make([
            'name' => $fibonacci
        ]);
        $fib->save();

        return $fib;
    }
}
