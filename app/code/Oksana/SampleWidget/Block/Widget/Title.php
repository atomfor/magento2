<?php
namespace Oksana\SampleWidget\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Title extends Template implements BlockInterface
{
    protected $_template = "widget/title.phtml";
}
