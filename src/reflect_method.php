<?php

namespace Leo\ReflectHelper;

use ReflectionClass;

function reflect_method(object $object, string $method, ...$args): mixed
{
	$rc = new ReflectionClass($object);
	$rm = $rc->getMethod($method);
	$rm->setAccessible(true);
	return $rm->invoke($object, ...$args);
}
