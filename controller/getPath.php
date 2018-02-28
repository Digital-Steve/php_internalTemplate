<?php

    function getFile($script_path) {
        
        $publicPath = dirname(__DIR__);
        // add the leading '/' if not present
        if($script_path[0] != '/') {
            $script_path = "/" . $script_path;
        }

        return $publicPath.$script_path;
    }
?>
