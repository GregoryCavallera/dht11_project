<?php

namespace Tests;

use Dao\MeasureDao;
use Domain\Measure;
use PHPUnit\Framework\TestCase;

include '../inc/autoload.inc.php';


class MeasureDaoTest extends TestCase {
    
    private $measureDao;
    
    /**
     * Prepares the environment before running a test.
     */
    protected function setUp() {
        
        parent::setUp();
        
        $config = include '../inc/config.inc.php';
        
        $this->measureDao = new MeasureDao($config);
    }
    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown() {
        
        $this->measureDao->close();
        
        $this->measureDao = null;
        
        parent::tearDown();
    }
    
    
    //  Test readMeasureById  (Fonctionne !!)
    
    public function testReadMeasureById() {
        
        $measure = $this->measureDao->readMeasureById(2);
        
        $this->assertEquals(2, $measure->id);
        $this->assertEquals(25, $measure->temperature);
        $this->assertEquals(65, $measure->humidity);
        $this->assertNotNull($measure->datetime);
    }
    
    //  Test insertMeasure
    /*
    public function testInsertMeasure() {
        
        $measure = new Measure(null, 15, 35, null);
        
        $this->measureDao->insertMeasure($measure);
        
        $newMeasure = $this->measureDao->readMeasureByID($measure->id);
        
        $this->assertEquals(15, $newMeasure->temperature);
        $this->assertEquals(35, $newMeasure->humidity);
        
        $this->userDao->deleteUser($id);
    }*/
    
    //  Test updateMeasure
    /*
    public function testUpdateMeasure() {
        
        $measure = new Measure(null, 37, 85, null);
        
        $id = $this->userDao->insertUser($user);
        
        $newUser = $this->userDao->findUserById($id);
        
        $newUser->firstName = "Roberto";
        
        $newUser->lastName = "Ricco";
        
        $this->userDao->updateUser($newUser);
        
        $updatedUser = $this->userDao->findUserById($id);
        
        $this->assertEquals("Roberto", $updatedUser->firstName);
        
        $this->assertEquals("Ricco", $updatedUser->lastName);
        
        $this->userDao->deleteUser($id);
    }*/
    
    //  Test deleteMeasure
    /*
    public function testDeleteMeasure() {
        
        $measure = new Measure(3, null, null, null);
        
        $id = $this->userDao->deleteMeasure($measure);
        
        $newUser = $this->userDao->findUserById($id);
        
        $this->assertNotNull($newUser);
        $this->userDao->deleteUser($id);
        
        $deletedUser = $this->userDao->findUserById($id);
        
        $this->assertNull($deletedUser);
    }*/
}