<?php

namespace Musliadi\FirstPackage\Tests;

use Musliadi\FirstPackage\FirstPackageClass;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = FirstPackageClass::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
