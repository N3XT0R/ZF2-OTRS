<?php

namespace OTRS\Entity;


class DynamicField {
    
    private $Name;
    private $Value;
    
    public function getName() {
        return $this->Name;
    }

    public function getValue() {
        return $this->Value;
    }

    public function setName($Name) {
        $this->Name = $Name;
        return $this;
    }

    public function setValue($Value) {
        $this->Value = $Value;
        return $this;
    }


}
