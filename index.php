<?php

if(isset($_REQUEST['numero']))
{
    $config = false;

    $closure = function($a) use ($config) {
        if ($a % 2 == 0)
            return $config ? strtoupper('par') : 'par';
        else
            return $config ? strtoupper('impar') : 'impar';
        
    };

    function returnMessage ($message, $callback) {
        $returnNum = $callback($_REQUEST['numero']);
        return $message. ' '.$returnNum;
    } 


    echo returnMessage('O número digitado é ', $closure);
}

?>

<form>
    <input type="text" name="numero" />
    <button type="submit" value="Validar">Validar</button>
</form>