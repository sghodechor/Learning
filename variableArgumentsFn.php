<?php
echo 'new';
variableArguments( 1,2,44 );

function variableArguments( ...$var ) {

        print_r( $var );


}


?>

