<?php
namespace Pulsestorm\Nofrillslayout\Controller\Chapter1;
class Index extends \Magento\Framework\App\Action\Action
{

    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;        
        parent::__construct($context);
    }
    
    public function execute()
    {
        $block = new \Pulsestorm\Nofrillslayout\Block\Chapter1\Hello;
        echo $block->toHtml();
        
        exit;
    }
}
