<?php
// create with alias "project.phar"
$phar = new Phar('outline.phar', 0, 'outline.phar');
// add all files in the project, only include php files
$phar->buildFromDirectory(__DIR__ . '/../src/', '/\.php$/');
$phar->setStub($phar->createDefaultStub('index.php'));
