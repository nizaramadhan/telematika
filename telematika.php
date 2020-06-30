<?php   
    function stringToBinary($string)
    {
        $characters = str_split($string);
        
        $binary = [];
        foreach ($characters as $character) {
            $data = unpack('H*', $character);
            $binary[] = base_convert($data[1], 16, 2);
        }
        
        return implode(' ', $binary);    
    }
        
    function binaryToString($binary)
    {
        $binaries = explode(' ', $binary);
        
        $string = null;
        foreach ($binaries as $binary) {
            $string .= pack('H*', dechex(bindec($binary)));
        }
        
        return $string;    
    }

    $string = "HELLO WORLD";
    echo 'STRING: '.$string.PHP_EOL;
    echo 'BINARY: '.$binary = stringToBinary($string).PHP_EOL;
    
?>