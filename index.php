<?php

declare(strict_types=1);

function fibonacciGenerator(int $limit = 988):Generator
{
    $num1 = 0;
    $num2 = 1;

    yield $num1;

    for ($i = $num2; $i < $limit;) {
        yield $i;
        [$num1, $num2] = [$num2, $num1 + $num2];
        $i = $num1 + $num2;
    }
}

foreach (fibonacciGenerator() as $fiboNum) {
    echo "$fiboNum ";
}