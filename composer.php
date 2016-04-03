<?php
$scan = scandir(__DIR__);
foreach($scan as $dir){
    if(! in_array($dir, ['.','..'])){
        if(! file_exists(__DIR__.'/'.$dir.'/composer.json')){
            $json = [
                "name" => $dir,
                "type" => "cakephp-plugin",
                "description" => $dir." IS2B",
                "version" => "1.0.0",
                "keywords" => ["cakephp", strtolower($dir)],
                "require" => [
                    "php" => ">=5.4.0",
                    "composer/installers" => "*",
                ]
            ];
            $composer = json_encode($json,JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
            file_put_contents(__DIR__.'/'.$dir.'/composer.json',$composer);
            print_r($composer);
        }else{
            //unlink(__DIR__.'/'.$dir.'/composer.json');
            //echo __DIR__.'/'.$dir.'/composer.js';
        }
    }
}
?>