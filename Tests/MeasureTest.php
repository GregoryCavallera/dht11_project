<?php

namespace Tests;

include 'autoloadTest.inc.php';

use PHPUnit\Framework\TestCase;
use Domain\Measure;


class MeasureTest extends TestCase {
    
    public function testMeasure() {
            
        $measure = new Measure(null, 15, 35, null);
        
        $this->assertEquals(15, $measure->temperature);
        $this->assertEquals(35, $measure->humidite);
    }
}

