<?php

class Kanois {

    /**
     * Kanois generator
     *
     * @return string
     */
    public function generate()
    {
        $return = "";

        for ($i = 1 ; $i <= 100 ; $i++)
        {
            if ($this->sevenAndFiveMultiple($i)) $return .="KaNois";

            else if ($this->sevenMultiple($i)) $return .= "Nois";

            else if ($this->fiveMultiple($i)) $return .= "Ka";

            else $return .= $i;

            $return .= "<br>\n";
        }

        return $return;
    }

    /**
     * Check if number is mulplipe of Seven
     *
     * @param  int $value
     * @return boolean
     */
    private function sevenMultiple($value)
    {
        return $value%7 == 0;
    }

    /**
     * Check if the number is bot multiple of 5 and 7
     *
     * @param  int $value
     * @return boolean
     */
    private function sevenAndFiveMultiple($value)
    {
        return $value%5 == 0 && $value%7 == 0;
    }

    /**
     * Check if Number is Mutiple of 5
     *
     * @param  int $value
     * @return boolean
     */
    private function fiveMultiple($value)
    {
        return $value%5 == 0;
    }
}

$kanois = new Kanois;
echo $kanois->generate();

?>