<?php

namespace OTRS\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Soap\Client as SoapClient;

class OtrsServiceFactory implements FactoryInterface{
    
    private $ClassMap = array(
        'SessionCreate'                     => 'OTRS\Entity\SessionCreate',
        'SessionCreateResponse'             => 'OTRS\Entity\SessionCreateResponse',
        'TicketGet'                         => 'OTRS\Entity\TicketGet',
        'TicketGetResponse'                 => 'OTRS\Entity\TicketGetResponse',
        'OTRS_Error'                        => 'OTRS\Entity\Error',
        'TicketCreate'                      => 'OTRS\Entity\TicketCreate',
        'OTRS_PendingTime'                  => 'OTRS\Entity\PendingTime',
        'OTRS_Article'                      => 'OTRS\Entity\ActionArticle',
        'OTRS_DynamicField'                 => 'OTRS\Entity\DynamicField',
        'OTRS_Attachment'                   => 'OTRS\Entity\Attachment',
        'TicketUpdate'                      => 'OTRS\Entity\TicketUpdate',
        'TicketUpdateResponse'              => 'OTRS\Entity\TicketUpdateResponse',
        'TicketCreateResponse'              => 'OTRS\Entity\TicketCreateResponse',
        'Ticket'                            => 'OTRS\Entity\Ticket',
        'Article'                           => 'OTRS\Entity\Article',
        'OTRS_TicketUpdate_Ticket'          => 'OTRS\Entity\ActionTicket',
        'OTRS_TicketCreate_Ticket'          => 'OTRS\Entity\ActionTicket',
        'OTRS_TicketGetResponse_Ticket'     => 'OTRS\Entity\TicketGetResponseTicket',
        'OTRS_TicketGetResponse_Article'    => 'OTRS\Entity\TicketGetResponseArticle',
        'OTRS_TicketGetResponse_Attachment' => 'OTRS\Entity\TicketGetResponseAttachment',
        'TicketSearch'                      => 'OTRS\Entity\TicketSearch',
        'TicketSearchResponse'              => 'OTRS\Entity\TicketSearchResponse',
        'OTRS_TicketSearch_DynamicField'    => 'OTRS\Entity\TicketSearchDynamicField',
        'OTRS_TicketSearch_TicketFlag'      => 'OTRS\Entity\TicketSearchTicketFlag',
        //'ArrayOfArticle'                    => 'OTRS\Entity\ArrayOfArticle',
        //'ArticleGet'                        => 'OTRS\Entity\ArticleGet',
    );
    
    public function setClassMap(array $classmap){
        $this->ClassMap = $classmap;
        return $this;
    }
    
    public function getClassMap(){
        return $this->ClassMap;
    }
    
    public function createService(ServiceLocatorInterface $serviceLocator) {
        $aConfig = $serviceLocator->get("Config");
        $aOTRS   = $aConfig["otrs"];
        
        $url = $aOTRS["url"]."/".$aOTRS["webservice"];
        
        $aOptions = array(
            'location'      => $url,
            'login'         => $aOTRS["username"],
            'password'      => $aOTRS["password"],
            'soap_version'  => SOAP_1_1,
            //'encoding'      => 'UTF-8',
            'classmap'      => $this->getClassMap(),
            'cache_wsdl'    => false,
            //'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
        );
        
        
        $wsdl = realpath(__DIR__."/GenericTicketConnectorSOAP.wsdl");
        $oSoapClient = new SoapClient($wsdl, $aOptions);
        $oService = new OtrsService($oSoapClient);
        $oService->setConfig($aOTRS);
        return $oService;
    }

}
