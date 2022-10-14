<?php


class Roman {

    private $dictionary = [
        '1'     => [ 'I', 1 ],
        '5'     => [ 'V', 5 ],
        '10'    => [ 'X', 10 ],
        '50'    => [ 'L', 50 ],
        '100'   => [ 'C', 100 ],
        '500'   => [ 'D', 500 ],
        '1000'  => [ 'M', 1000 ]
     
    ];

    private $romanDictionary = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 100,
     
    ];

################################## TO ROMAN CONVERTER ##################################

/*
 * TODO:
 *  - everything :)
 * 
 *
 */

    public function toRoman(int $num) {

        if ( $num == 0 ){
            return 'ZERO';
        }

        if ( $num < 0 ) {
            return 'UJEMNA';
        }    


    }

################################## TO ARABIC CONVERTER ##################################

/*
 * TODO:
 *   - roman valid check eg. VIIII is not valid
 *   - finish every exception when substraction is needed
 */

    public function toArabic(string $num){
        $arabic = 0;
        $numLen = strlen($num);
        # End script and return value from dictionary if roman numeral is one character
        if ( $numLen == 1 ){


            return $this->romanDictionary[$num];
        }

        # Iterate through full length of string passed to method
        for ( $i=0; $i < $numLen; $i++ ){
            $char = $num[$i];

            # Get next character from string only if there is next character (obviously)
            if ( isset($num[$i+1]) ){
                $nextChar = $num[$i+1];
            }            

            # End script if passed string is not roman numeral
            if ( !$this->checkRoman($char) ){
                return 'Not Roman';
                exit;
            }

            
            if ( $this->checkMinusRoman($char, $nextChar) ){
                $arabic -= $this->romanDictionary[$char];
            } else {
                $arabic += $this->romanDictionary[$char];
            }
        

            

        } // for ( $i=0; $i < $numLen; $i++ )
        
        return $arabic;

    }

    # Check if every character from passed string is part of roman numerals
    private function checkRoman(string $char){
        $pattern = '/[IVXLCDM]/i';
        if ( preg_match($pattern, $char) ){
            return true;
        } else {
            return false;
        }
    }

    private function checkMinusRoman(string $char, string $nextChar ){

        if  ( $char == 'I' &&  $nextChar == 'V' ){
            return true;

        } elseif (  $char == 'I' &&   $nextChar == 'X' ) {
            return true;

        } elseif ( $char == 'X' &&   $nextChar == 'L' ){
            return true;

        } elseif ( $char == 'X' &&   $nextChar == 'C' ) {
            return true;

        }elseif ( $char == 'C' &&   $nextChar == 'D' ) {
            return true;

        }elseif ( $char == 'C' &&   $nextChar == 'M' ) {
            return true;

        }else {
            return false;
        }

    }

   

}