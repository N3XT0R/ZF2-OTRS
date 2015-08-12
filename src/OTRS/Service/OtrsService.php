<?php

namespace OTRS\Service;

use Zend\Server\Client;
use OTRS\Entity;

class OtrsService {
    
    protected $oSOAPClient;
    protected $aConfig;
    protected $aErrorMessages = array();
    
    public function __construct(Client $soapClient) {
        $this->setSoapClient($soapClient);
    }
    
    public function addErrorMessage($sErrorMessage){
        $this->aErrorMessages[] = $sErrorMessage;
        return $this;
    }
    
    public function getErrorMessages(){
        return $this->aErrorMessages;
    }
    
    public function setErrorMessages(array $aErrorMessages){
        $this->aErrorMessages = $aErrorMessages;
        return $this;
    }
    
    public function hasErrorMessages(){
        return count($this->getErrorMessages()) > 0;
    }
    
    public function clearErrorMessages(){
        $this->setErrorMessages(array());
        return $this;
    }
    
    public function setSoapClient(Client $soapClient){
        $this->oSOAPClient = $soapClient;
        return $this;
    }
    
    /**
     * 
     * @return \Zend\Soap\Client
     */
    public function getSoapClient(){
        return $this->oSOAPClient;
    }
    
    public function setConfig(array $aConfig){
        $this->aConfig = $aConfig;
        return $this;
    }
    
    public function getConfig(){
        return $this->aConfig;
    }
    
    public function getFunctions(){
        return $this->getSoapClient()->getFunctions();
    }
    
    /**
     * Get Ticket by TicketID
     * @param integer $iTicketId Ticket-ID
     * @param bool $blGetAllArticles Get all articles ? 
     * @return \OTRS\Entity\TicketGetResponse
     */
    public function getTicketByOtrsTicketId($iTicketId, $blGetAllArticles = false){
        $aConfig = $this->getConfig();
        $oClient = $this->getSoapClient();
        
        $oTicketGet = new Entity\TicketGet();
        $oTicketGet->setUserLogin($aConfig["username"]);
        $oTicketGet->setPassword($aConfig["password"]);
        $oTicketGet->setTicketID($iTicketId);
        $oTicketGet->setAllArticles($blGetAllArticles);
        
        try{
            $oResponse = $oClient->TicketGet($oTicketGet);
        } catch (\Exception $ex) {
            $this->addErrorMessage($ex->getMessage());
        }
        
        
        return $oResponse;
    }
    
    /**
     * Get Articles by Ticket-Object
     * @param \OTRS\Entity\TicketGetResponseTicket $oTicket Ticket-Object
     * @return type
     */
    public function getArticlesByOtrsTicket(Entity\TicketGetResponseTicket $oTicket){
        $aConfig = $this->getConfig();
        $oClient = $this->getSoapClient();
        
        $oArticleGet = new Entity\ArticleGet();
        $oArticleGet->setTicketID($oTicket->getTicketID());
        $oArticleGet->setUserID($oTicket->getOwnerID());
        
        try{
            $oResponse = $oClient->ArticleGet($oArticleGet);
        } catch (\SoapFault $ex) {
            $this->addErrorMessage($ex->getMessage());
        }
        
        return $oResponse;
    }
    
    /**
     * Create a new Ticket
     * @param string$sCustomerUser CustomerUserLogin
     * @param \OTRS\Entity\ActionTicket $oTicket Ticket-Object
     * @param \OTRS\Entity\Article $oArticle Article-Object
     * @param \OTRS\Entity\Attachment[] $aAttachments 
     * @return \OTRS\Entity\CreateTicketResponse
     */
    public function createTicket($sCustomerUser, Entity\Ticket $oTicket, Entity\Article $oArticle, array $aAttachments = array()){
        $aConfig = $this->getConfig();
        $oClient = $this->getSoapClient();
        $oTicketCreate = new Entity\TicketCreate();
        $oTicketCreate->setUserLogin($aConfig["username"]);
        $oTicketCreate->setPassword($aConfig["password"]);
        $oTicketCreate->setCustomerUserLogin($sCustomerUser);
        $oTicketCreate->setTicket($oTicket);
        $oTicketCreate->setArticle($oArticle);
        
        if(count($aAttachments) > 0){
            $oTicketCreate->setAttachment($aAttachments);
        }
        
        try{
            $oResponse = $oClient->TicketCreate($oTicketCreate);
        }catch(\Exception $ex){
            $this->addErrorMessage($ex->getMessage());
        }
        
        return $oResponse;
    }
}
