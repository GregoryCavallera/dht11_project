<?php

namespace Dao;

use Domain\Measure;

include "DaoBase.php";

include '../inc/autoload.inc.php';

class MeasureDao extends DaoBase {

    public function __construct($config) {

        parent::__construct($config);
    }
    
    public function insertMeasure($measure) {
        
    $query = $this->bdd->prepare("INSERT INTO measures (temperature, humidity) VALUES (:temperature, :humidity)");
    
    $query->bindParam(":temperature", $measure->temperature);
    
    $query->bindParam(":humidity", $measure->humidity);
    
    $query->execute();
    
    $id = $this->bdd->lastInsertid();
    
    $measure->id = $id;
    
    return $id;
    }
    
    public function readMeasureAll() {
        
        $result;
        
        $query = $this->bdd->prepare("SELECT * FROM measures");
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $temperature = $donnees["temperature"];
                $humidite = $donnees["humidity"];
                
                $result = new Measure($temperature, $humidity);
            }
        }
        
        return $result;
    }
    
    public function readMeasureById($id) {
        
        $result;
        
        $query = $this->bdd->prepare("SELECT temperature, humidity FROM measures WHERE id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $temperature = $donnees["temperature"];
                $humidite = $donnees["humidity"];
                
                $result = new Measure($temperature, $humidity);
            }
        }
        
        return $result;
    }
    
    public function deleteMeasure($id) {
        
        $query = $this->bdd->prepare("DELETE FROM measures WHERE id = :id");
        
        $query->bindParam(":id", $id);
        
        $query->execute();
    }
    
    public function updateMeasure($measure) {
        
  
        $query = $this->bdd->prepare("UPDATE measures SET temperature = :temperature, humidity = :humidity WHERE id = :id");
        
        $query->bindParam(":temperature", $measure->temperature);
        
        $query->bindParam(":humidity", $measure->humidity);
        
        $query->bindParam(":id", $measure->id);
        
        $query->execute();
    }
}