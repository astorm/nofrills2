<?php
namespace Pulsestorm\Nofrillslayout\Controller;
abstract class Base extends \Magento\Framework\App\Action\Action
{
    private $ourObjectManager;
    
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\ObjectManagerInterface $ourObjectManager,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {    
        $this->resultPageFactory = $resultPageFactory;
        $this->ourObjectManager = $ourObjectManager;
        return parent::__construct($context);
    }

    public function getObjectManager()
    {
        return $this->ourObjectManager;
    }
    
    protected function loadXmlFromSampleXmlFolder($path)
    {
        $path = realpath(__DIR__) . '/../sample-xml/'  . $path;
        //using the hated error surpression operator 
        //to avoid xsi:type warnings from simple XML 
        @$xml = simplexml_load_file($path);        
        if(!$xml)
        {
            throw new \Exception("Could not load valid XML from $path");
        }
        return str_replace('<?xml version="1.0"?>', '', $xml->asXml());
    }    
}