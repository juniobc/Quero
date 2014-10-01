<?php

namespace Application\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

class ClienteServiceController extends AbstractActionController
{
    // Armazena na vari�vel o endere�o do webserver no servidor
    private $_WSDL_URI = "http://quero.com.br/application/service?wsdl";
    
    public function olaAction() {
	
        // Instanciando o Zend Soap Cliente
        $client = new \Zend\Soap\Client($this->_WSDL_URI);
        
        /**
         * Ap�s instanciado o client voc� pode usar as fun��es do web servi�e
         * e para saber as fun��es dispon�veis � s� acessar o endere�o url que est�
         * na vari�vel $_WSDL_URI neste caso: <a href="http://localhost2/service?wsdl">http://localhost2/service?wsdl</a>
         */
        return new ViewModel(array(
            'ola' => $client->welcame('Jaime')
        ));
    }
}