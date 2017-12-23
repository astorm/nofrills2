<?php
namespace Pulsestorm\Nofrillslayout\Chapter2;
class Example implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    public function __construct()
    {
        var_dump("Made an object");
    }
}