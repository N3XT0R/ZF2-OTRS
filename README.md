# ZF2-OTRS
Zend Framework 2 Module for Integration of OTRS 4.

# Installation via Composer

```
require "n3xt0r/zf2otrs": "dev-master"
```

after it enable it in your Configuration.

## Global/local Config:

```
'otrs' => array(
    'url'           => 'http://example.com/otrs/nph-genericinterface.pl/Webservice',
    'username'      => 'MyUser', // Username of any agent
    'password'      => 'MyPassword', // Password of any agent
    'webservice'    => 'GenericTicketConnectorSOAP', //Webservice name
),
```


Don't forget to add a webservice in OTRS. You could use at example following configuration:
https://github.com/OTRS/otrs/blob/rel-4_0/development/webservices/GenericTicketConnectorSOAP.yml


## Get Service

```
$oOtrsService = $this->getServiceLocator()->get("OTRS\Service\OtrsService");
```

## Get specific Ticket by ID
```
$oTicketGetResponse = $oOtrsService->getTicketByOtrsTicketId(123, true);
```

First Parameter: TicketID
Second Parameter: get all articles? Default = false

## Create new Ticket


### First Create a Ticket-Object
```
use OTRS\Entity\Ticket;

$CustomerUser = "root@localhost";

$oTicket = new Ticket();
$oTicket->setTitle("Testtitle");
$oTicket->setQueueID(1);
$oTicket->setStateID(1);
$oTicket->setPriorityID(1);
$oTicket->setCustomerUser($CustomerUser);

```

### Second Create a Article-Object

```
use OTRS\Entity\Article;

$oArticle = new Article();
$oArticle->setContentType("text/plain; charset=ISO-8859-15");
$oArticle->setSubject("betreff");

$oArticle->setBody("test message");
$oArticle->setFrom("customer@test.com");
```

### Third create request

```
$aAttachments = array(); //array of \OTRS\Entity\Attachment (optional)

/** @var $oTicketCreateResponse \OTRS\Entity\TicketCreateResponse **/
$oTicketCreateResponse = $oOtrsService->createTicket($CustomerUser, $oTicket, $oArticle, $aAttachments);
```


### Debugging

```
if($oOtrsService->hasErrorMessages()){
   print_r($oOtrsService->getErrorMessages());
}
```