<?php

namespace Leo\ReflectHelper;

use ReflectionClass;

function reflect_property(object $object, string $property): mixed
{
	$rc = new ReflectionClass($object);
	$rp = $rc->getProperty($property);
	$rp->setAccessible(true);
	return $rp->getValue($object);
}
