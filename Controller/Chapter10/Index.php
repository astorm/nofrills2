<?php
namespace Pulsestorm\Nofrillslayout\Controller\Chapter10;
use Pulsestorm\Nofrillslayout\Controller\Base;
    
class Index extends \Magento\Framework\App\Action\Action
{   
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {    
        $this->resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }           
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
