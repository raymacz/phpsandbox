<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

      $qty_course="[5,    3, 1,   4, 5]";
        $len_course=5;
        echo "qty_course: ".$qty_course[0];
        echo "<br />";
//        for ($length = 0;isset($qty_course[$length]);$length++) ;
//        echo "length: ".$qty_course[(int)$length-1];
        echo "<br />";
        $res=array_map('trim', explode(',',$qty_course));
        print_r($res);
        if ($res[0][0]==="[" && strpos($res[count($res)-1], ']') && count($res)==$len_course)   {            
            $res[0]=str_replace('[', '', $res[0]);    
            $res[count($res)-1]=str_replace(']', '', $res[count($res)-1]);
        } else {
            for ($i = 0; $i < count($res); $i++) {
                $res[$i]=1;
            }
        }
        echo "<br />";
        print_r($res);
         $stop=0;