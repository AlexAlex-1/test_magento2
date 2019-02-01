<?php

namespace vendor\observer\Observer;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{	
		var_dump($observer);
		$displayText = $observer->getData('mp_text');
		echo $displayText->getText() . " - Event </br>";
		$displayText->setText('Execute event successfully.');
		return $this;
	}
}
