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
}