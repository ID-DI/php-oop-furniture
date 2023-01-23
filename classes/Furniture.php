<?php
require_once __DIR__ . "../../interfaces/Printable.php";
// CLASS FURNITURE

class Furniture implements Printable {
    private $width;
    private $length;
    private $height;
    private $is_for_seating;
    private $is_for_sleeping;

    //CONSTRUCTOR OF THE CLASS
    public function __construct($width, $length, $height)
    {
        // $this->width = $width;
        // $this->length = $length;
        // $this->height = $height;
        $this->setWidth($width);
        $this->setLength($length);
        $this->setheight($height);
    }

    //GETTERS SETTERS
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }
    public function setheight($height)
    {
        $this->height = $height;
        return $this;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function getLength()
    {
        return $this->length;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function getIs_for_seating()
    {
        return $this->is_for_seating;
    }
    public function setIs_for_seating($is_for_seating)
    {
        $this->is_for_seating = $is_for_seating;
        return $this;
    }
    public function getIs_for_sleeping()
    {
        return $this->is_for_sleeping;
    }
    public function setIs_for_sleeping($is_for_sleeping)
    {
        $this->is_for_sleeping = $is_for_sleeping;
        return $this->is_for_sleeping;
    }

    //METHODS
    public function area() {
        $this->area = $this->length * $this->width;
        return $this->area;
    }

    public function volume() {
        $this->volume = $this->length * $this->width * $this->height;
        return $this->volume;
    }
    
    public function name()
    {
        echo get_class($this);
        return $this;
    }

    public function print()
    {
        if($this->getIs_for_sleeping() == false)
        {
            return get_class($this) . ", sitting only, " . $this->area() . " cm2.";
        }
        else
        {
            return get_class($this) . ", is for sleeping and sitting, " . $this->area() . " cm2.";
        }
    }

    public function sneakpeek()
    {
        return get_class($this).".";
    }

    public function fullinfo()
    {
        if($this->getIs_for_sleeping() == false)
        {
            return get_class($this) . ", sitting only, area: " . $this->area() . " cm2, width: " . $this->getWidth() . " cm, length: ".$this->getLength()." cm, height: ".$this->getHeight() ." cm.";
        }
        else
        {
            return get_class($this) . ", is for sleeping and sitting, area: " . $this->area() . " cm2, volume: ".$this->volume()." cm3, width: " . $this->getWidth() . " cm, length: ".$this->getLength()." cm, height: ".$this->getHeight() ." cm.";
        }
    }
}
