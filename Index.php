<?php 
namespace Codesh\Productinquiry\Controller\Index;
 
class Index extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
    protected $_storeManager;
    protected $_scopeConfig;
    
    protected $inlineTranslation;
    protected $_transportBuilder;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation,
        \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder
        )
    {
        $this->_scopeConfig = $context;
        parent::__construct($context);
        $this->_storeManager = $storeManager;
        $this->inlineTranslation = $inlineTranslation;
        $this->_transportBuilder = $transportBuilder; 
    }
 
    public function execute()
    {
        /*$objectManager =  \Magento\Framework\App\ObjectManager::getInstance();        
        $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
        $formData = $this->getRequest()->getPost('formdata');
        //print_r($formData);
        $templateOptions = array('area' => \Magento\Framework\App\Area::AREA_FRONTEND, 'store' => $storeManager->getStore()->getStoreId());
        $templateVars = array(
                    'store' => $storeManager->getStore(),
                    'customer_name' => 'John Doe',
                    'message'   => 'Hello World!!.'
                );
        $from = array('email' => "test@hello.com", 'name' => 'Name of Sender');
        $this->inlineTranslation->suspend();
        $to = array('john@hello.com');
        $transport = $this->_transportBuilder->setTemplateIdentifier('productinquiry_template')
                        ->setTemplateOptions($templateOptions)
                        ->setTemplateVars($templateVars)
                        ->setFrom($from)
                        ->addTo($to)
                        ->getTransport();
        $mailSend = $transport->sendMessage();
        $this->inlineTranslation->resume();
        if($mailSend){
            return;
        }*/
        return ;
    }
}