<?php

/*
 * @author         N3X
 * @copyright      Copyright (c) 2015, Ilya Beliaev
 * @since          Version 1.0
 * 
 * $Id$
 * $Date$
 */

namespace OTRS\Entity;

class TicketCreateResponse {
    
    private $TicketID;
    private $TicketNumber;
    private $ArticleID;
    private $Error;
    
    function getTicketID() {
        return $this->TicketID;
    }

    function getTicketNumber() {
        return $this->TicketNumber;
    }

    function getArticleID() {
        return $this->ArticleID;
    }

    function getError() {
        return $this->Error;
    }

    function setTicketID($TicketID) {
        $this->TicketID = $TicketID;
    }

    function setTicketNumber($TicketNumber) {
        $this->TicketNumber = $TicketNumber;
    }

    function setArticleID($ArticleID) {
        $this->ArticleID = $ArticleID;
    }

    function setError($Error) {
        $this->Error = $Error;
    }


}
