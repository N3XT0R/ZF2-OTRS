<?php

namespace OTRS\Entity;

class TicketSearchDynamicField {
    
    private $Equals;
    private $Like;
    private $GreaterThan;
    private $GreaterThanEquals;
    private $SmallerThan;
    private $SmallerThanEquals;
    
    public function getEquals() {
        return $this->Equals;
    }

    public function getLike() {
        return $this->Like;
    }

    public function getGreaterThan() {
        return $this->GreaterThan;
    }

    public function getGreaterThanEquals() {
        return $this->GreaterThanEquals;
    }

    public function getSmallerThan() {
        return $this->SmallerThan;
    }

    public function getSmallerThanEquals() {
        return $this->SmallerThanEquals;
    }

    public function setEquals($Equals) {
        $this->Equals = $Equals;
        return $this;
    }

    public function setLike($Like) {
        $this->Like = $Like;
        return $this;
    }

    public function setGreaterThan($GreaterThan) {
        $this->GreaterThan = $GreaterThan;
        return $this;
    }

    public function setGreaterThanEquals($GreaterThanEquals) {
        $this->GreaterThanEquals = $GreaterThanEquals;
        return $this;
    }

    public function setSmallerThan($SmallerThan) {
        $this->SmallerThan = $SmallerThan;
        return $this;
    }

    public function setSmallerThanEquals($SmallerThanEquals) {
        $this->SmallerThanEquals = $SmallerThanEquals;
        return $this;
    }


}
