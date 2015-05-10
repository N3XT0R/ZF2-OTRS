<?php

namespace OTRS\Entity;

class TicketGetResponse {
    
    private $Ticket;
    private $Error;
    
    public function getTicket(){
        return $this->Ticket;
    }
    
    public function setTicket($ticket){
        $this->Ticket = $ticket;
        return $this;
    }
    
    public function getError() {
        return $this->Error;
    }

    public function setError(Error $Error) {
        $this->Error = $Error;
        return $this;
    }


}
