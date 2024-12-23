<?php 

namespace App\Helpers;

class Helper{

    public static function isActiveMenu($url, $className = 'active'){

        return request()->is($url) ? $className : '';
        
    }
}

?>