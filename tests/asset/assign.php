<?php

namespace DisallowFloatsInAssign;

class Foo
{

    private $foo;

    private $bar;

    /**
     * @param float $float
     * @param int|float $intOrFloat
     */
    public function doFoo($float, $intOrFloat, string $str)
    {
        $test = $float;
        $test2 = $intOrFloat;

        $this->foo = $float;
        $this->bar['test'] = $float;

        $test3 = $str;
    }

    public function doBar()
    {
        $test = 0;
        $test += 1;
        $test += 3.14;
    }

}
