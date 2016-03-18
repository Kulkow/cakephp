<?php
$scan = scandir(__DIR__);
foreach($scan as $dir){
    if(! in_array($dir, ['.','..'])){
        if(! file_exists(__DIR__.'/'.$dir.'/composer.json')){
            $json = [
                "name" => strtolower($dir),
                "description" => $dir." IS2B",
                "version" => "1.0.0",
                "keywords" => ["cakephp", strtolower($dir)],
                "require" => ["php" => ">=5.4.0"]
            ];
            $composer = json_encode($json,JSON_PRETTY_PRINT);
            file_put_contents(__DIR__.'/'.$dir.'/composer.json',$composer);
            print_r($composer);
        }else{
            //echo __DIR__.'/'.$dir.'/composer.js';
        }
    }
}
?>