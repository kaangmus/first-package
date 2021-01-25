<?php

namespace Musliadi\FirstPackage\Tests;

use PHPUnit\Framework\TestCase;
use Musliadi\FirstPackage\FirstPackageClass;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = FirstPackageClass::fromKilograms(100)->toLbs();

       	$this->assertEquals(220.4623, $lbs);
    }
}
