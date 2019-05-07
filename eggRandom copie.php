<?php
    /**
     * Created by PhpStorm.
     * User: julien
     * Date: 2019-04-18
     * Time: 17:24
     */
    require 'vendor/autoload.php';
    
    use App\response;
    use App\json;
    
    $object = new json();
    echo $object->randomEgg();