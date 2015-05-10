<?php

namespace OTRS\Entity;

class TicketSearchTicketFlag {
    
    private $Seen;
    
    public function getSeen() {
        return $this->Seen;
    }

    public function setSeen($Seen) {
        $this->Seen = $Seen;
        return $this;
    }


}
