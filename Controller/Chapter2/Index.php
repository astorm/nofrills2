<?php
namespace Pulsestorm\Nofrillslayout\Controller\Chapter2;
use Pulsestorm\Nofrillslayout\Controller\Base;
    
class Index extends Base
{   
    public function execute()
    {
        $objectManager = $this->getObjectManager();        
        $layout        = $objectManager->get('Magento\Framework\View\Layout');        
        //$layout->addContainer('top', 'The top level container');  
        $updateManager = $layout->getUpdate(); 

        $container_xml = $this->loadXmlFromSampleXmlFolder('chapter2/user/top-container.xml');
        $updateManager->addUpdate($container_xml);        
        
        $block_xml     = $this->loadXmlFromSampleXmlFolder('chapter2/page.xml');
        $updateManager->addUpdate($block_xml); 
        
        // $layout->generateElements();
        echo $layout->getOutput();        
    }
}
