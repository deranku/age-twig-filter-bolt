<?php

namespace Bolt\Extension\anku\age;

use Bolt\Extension\SimpleExtension;


class ageExtension extends SimpleExtension
{

	protected function registerTwigFilters() {
        return [
            'age' => 'ageFilter'
        ];
    }


	public function ageFilter($date)
	{
		if (!$date instanceof \DateTime) $date = new \DateTime($date);
        return $date->diff(new \DateTime())->format('%y');
	}

}
