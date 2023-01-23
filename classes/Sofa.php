<?php

class Sofa extends Furniture 
{
    private $seats;
    private $armrests;
    private $length_opened;
    
        public function __construct($width, $length, $height)
        {
            parent::__construct($width, $length, $height);
        }

        //GETTERS SETTERS
        public function getSeats()
        {
                return $this->seats;
        }
        public function setSeats($seats)
        {
                $this->seats = $seats;
                return $this;
        }
        public function getArmrests()
        {
                return $this->armrests;
        }
        public function setArmrests($armrests)
        {
                $this->armrests = $armrests;
                return $this;
        }
        public function setLength_opened($length_opened)
        {
                $this->length_opened = $length_opened;
                return $this;
        }
        public function getLength_opened()
        {
                return $this->length_opened;
        }

        //METHODS
        public function area_opened() 
        {
            if(($this->getIs_for_sleeping() == true))
            {
              return "The ". get_class($this)." has area opened = " . $this->getLength() * $this->length_opened ." cm2.";
            }
            else 
            {
                return "This ".get_class($this)." is for sitting only, it has {$this->armrests} armrests and {$this->seats} seats.";
            }
        }
}