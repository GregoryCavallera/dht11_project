<?php

include 'classes/domain/Measure.php';
include 'classes/dao/MeasureDao.php';

$config = include 'inc/config.inc.php';

$measureTest = new Measure(15, 56);

$daoTest = new MeasureDao($measureTest);

$daoTest->createMeasure($measureTest);