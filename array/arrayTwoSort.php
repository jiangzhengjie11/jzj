<?php


class arrayTwoSort
{
    /*
        private $arrayOutLength;
        public function setArrayOutLength($array){
            $this->arrayOutLength=(count($array,1)-count($array));
        }
        public function getArrayOutLength($array){
            return (count($array,1)-count($array));
        }
*/

    public function arrayTwoSort($array,$outLength,$innLength)
    {
        foreach ($array as $arrayKey => $arrayValue) {

			$test['test'][$arrayKey] = $arrayValue;
			sort($test['test'][$arrayKey]);

        }

		return $test['test'];

    }
    public function createArrayTwo($array, $outLength, $innLength)
    {
        for ($i = 0; $i <= $innLength; ++$i) {
            for ($j = 0; $j < $outLength; ++$j) {
                $array[$i][$j] = mt_rand(1, 100);
            }
        }

        return $array;
    }
}
