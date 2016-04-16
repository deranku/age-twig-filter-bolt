<?php

namespace Bolt\Extension\anku\age;

use Bolt\Application;
use Bolt\BaseExtension;

class Extension extends BaseExtension
{
    public function initialize()
    {
		// Initialize the Twig filter
    	$this->addTwigFilter('age', 'twigAge');
    }

	function twigAge($date)
	{
		if (!$date instanceof \DateTime) $date = new \DateTime($date);
        return $date->diff(new \DateTime())->format('%y');
	}

    public function getName()
    {
        return "age";
    }
}
