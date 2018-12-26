<?php
echo 'Parrameters passed to function as follows: ';
echo "\n";
variableArguments( 1,2,44,4 );

function variableArguments( ...$var ) {

        print_r( $var );


}


?>

