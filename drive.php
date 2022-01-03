<?php


require __DIR__.'/vendor/autoload.php';

use SajjadBoodaghi\StringUtils\Str;

function main() {

    var_dump(Str::contains("something in this string", ['string', 'b', 'cd']));

//    if(Str::containsAll("something in this string", ['string', 'b', 'cd'])) {
//        echo "contains!";
//    } else {
//        echo "not contains!";
//    }
}main();



