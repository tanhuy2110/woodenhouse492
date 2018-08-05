<?php
    function activeNav($slug = '',$segment = 0,$class = 'active'){
        if($slug == $segment){
            $str = ' '.$class;
            return $str;
        }
        else return '';
    }
?>