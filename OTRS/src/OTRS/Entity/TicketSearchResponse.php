<?php

namespace OTRS\Entity;


class TicketSearchResponse {
    
    private $TicketID;
    
    public function getTicketID() {
        return $this->TicketID;
    }

    public function setTicketID($TicketID) {
        $this->TicketID = $TicketID;
        return $this;
    }


}
