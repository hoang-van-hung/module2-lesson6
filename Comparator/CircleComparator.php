<?php
include (dirname(__FILE__).'/../Circle/Circle.php');
include (dirname(__FILE__).'/../Comparator/Comparator.php');

class CircleComparator implements Comparator {
    public function compare($circleOne, $circleTwo)
    {
        // TODO: Implement compare() method.
        $radiusOne =$circleOne->getRadius();
        $radiusTwo =$circleTwo->getRadius();

        if ($radiusOne > $radiusTwo){
            return 1;
        }elseif ($radiusOne <$radiusTwo){
            return -1;
        }else {
            return 0;
        }
    }
}