<?php
namespace OTRS;

return array(
    'otrs' => array(
        'url'           => 'http://example.com/otrs/nph-genericinterface.pl/Webservice',
        'username'      => 'MyUser',
        'password'      => 'MyPassword',
        'webservice'    => 'GenericTicketConnectorSOAP',
    ),
    'service_manager' => array(
        'factories' => array(
            __NAMESPACE__.'\Service\OtrsService'   => __NAMESPACE__.'\Service\OtrsServiceFactory',
        ),
    ),
);
