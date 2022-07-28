<?php

function test($callback){


    $callback();

}

test(function(){

   echo "Terminou!";

});