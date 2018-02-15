<?php

namespace Tests;

include 'autoloadTest.inc.php';

use PHPUnit\Framework\TestCase;
use Domain\Measure;


class MeasureTest extends TestCase {
    
    public function testMeasure() {
            
        $measure = new Measure(15, 35);
        
        $this->assertEquals(15, $measure->temperature);
        $this->assertEquals(35, $measure->humidite);
    }
}

