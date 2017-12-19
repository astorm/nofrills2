<?php
namespace Pulsestorm\Nofrillslayout\Block\Chapter1;
class Hello implements \Magento\Framework\View\Element\BlockInterface
{
    public function toHtml()
    {
        return '<p>Hello World from a Block</p>';
    }   
}