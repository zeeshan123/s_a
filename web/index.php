<?php


require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('s_a', 'prod', false);
sfContext::createInstance($configuration)->dispatch();
