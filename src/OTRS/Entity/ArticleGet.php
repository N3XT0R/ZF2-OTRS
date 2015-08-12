<?php

namespace OTRS\Entity;

class ArticleGet {
    
    protected $TicketID;
    protected $UserID;
    protected $Extended;
    protected $ArticleSenderTypeID;
    protected $ArticleSenderType;
    protected $Order;
    protected $Limit;
    protected $Page;
    
    function getTicketID() {
        return $this->TicketID;
    }

    function getUserID() {
        return $this->UserID;
    }

    function getExtended() {
        return $this->Extended;
    }

    function getArticleSenderTypeID() {
        return $this->ArticleSenderTypeID;
    }

    function getArticleSenderType() {
        return $this->ArticleSenderType;
    }

    function getOrder() {
        return $this->Order;
    }

    function getLimit() {
        return $this->Limit;
    }

    function getPage() {
        return $this->Page;
    }

    function setTicketID($TicketID) {
        $this->TicketID = $TicketID;
    }

    function setUserID($UserID) {
        $this->UserID = $UserID;
    }

    function setExtended($Extended) {
        $this->Extended = $Extended;
    }

    function setArticleSenderTypeID($ArticleSenderTypeID) {
        $this->ArticleSenderTypeID = $ArticleSenderTypeID;
    }

    function setArticleSenderType($ArticleSenderType) {
        $this->ArticleSenderType = $ArticleSenderType;
    }

    function setOrder($Order) {
        $this->Order = $Order;
    }

    function setLimit($Limit) {
        $this->Limit = $Limit;
    }

    function setPage($Page) {
        $this->Page = $Page;
    }


}
