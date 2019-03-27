<?php

require('vendor/autoload.php');

use Symfony\Component\Yaml\Parser;
    $parser = new Parser();
    $yaml = $parser::parse(file_get_contents('/home/vikas/project/example/file.yml'));
    $yamlString = Yaml::dump($yaml);

    print_r($yamlString);die("hello word");

?>