<?php
class point{
    private $X;
    private $Y;
    public function __construct($X,$Y)
    {
        $this->X=$X;
        $this->Y=$Y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->X;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->Y;
    }

    /**
     * @param mixed $Y
     */
    public function setY($Y)
    {
        $this->Y = $Y;
    }

    /**
     * @param mixed $X
     */
    public function setX($X)
    {
        $this->X = $X;
    }
    public function setXY($X,$Y){
        $this->X=$X;
        $this->Y=$Y;
    }
    public function getXY(){
        $arr=[];
        array_push($arr,$this->X);
        array_push($arr,$this->Y);
        return $arr;
    }
    public function __toString()
    {
        return "(".$this->X.",".$this->Y.")";
        // TODO: Implement __toString() method.
    }
}