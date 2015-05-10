<?php

namespace OTRS\Entity;

class Attachment {
    
    private $Content;
    private $ContentType;
    private $Filename;
    
    
    public function getContent() {
        return $this->Content;
    }

    public function getContentType() {
        return $this->ContentType;
    }

    public function getFilename() {
        return $this->Filename;
    }

    public function setContent($Content) {
        $this->Content = $Content;
        return $this;
    }

    public function setContentType($ContentType) {
        $this->ContentType = $ContentType;
        return $this;
    }

    public function setFilename($Filename) {
        $this->Filename = $Filename;
        return $this;
    }


}
