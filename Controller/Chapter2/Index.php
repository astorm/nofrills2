<?php
namespace Pulsestorm\Nofrillslayout\Controller\Chapter2;
use Pulsestorm\Nofrillslayout\Controller\Base;
    
class Index extends Base
{   
    public function execute()
    {
        $objectManager = $this->getObjectManager();        
        $layout        = $objectManager->get('Magento\Framework\View\Layout');        
        $layout->addContainer('top', 'The top level container');  
        
        $blockOne   = $layout->createBlock(
            'Magento\Framework\View\Element\Template',
            'pulsestorm_nofrills_chapter2_block1'
        );
        $blockOne->setTemplate('Pulsestorm_Nofrillslayout::chapter2/block1.phtml');
        
        $blockTwo    = $layout->createBlock(
            'Magento\Framework\View\Element\Template',
            'pulsestorm_nofrills_chapter2_block2'
        );
        $blockTwo->setTemplate('Pulsestorm_Nofrillslayout::chapter2/block2.phtml');
                      
        $structure = $layout->getStructure(); //note: not standard magento
        $structure->setAsChild('pulsestorm_nofrills_chapter2_block1', 'top');
        $structure->setAsChild('pulsestorm_nofrills_chapter2_block2', 'top');
        
        $layout->generateElements();
        echo $layout->getOutput();         
    }
}
