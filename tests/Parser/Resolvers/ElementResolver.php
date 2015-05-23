<?php

namespace ApiGen\Parser\Tests\Resolvers;

use ApiGen\Contracts\Generator\Resolvers\ElementResolverInterface;
use ApiGen\Contracts\Parser\Reflection\ConstantReflectionInterface;
use ApiGen\Contracts\Parser\Reflection\FunctionReflectionInterface;


class ElementResolver implements ElementResolverInterface
{

	/**
	 * {@inheritdoc}
	 */
	public function resolveElement($definition, $context, &$expectedName = NULL)
	{
	}


	/**
	 * {@inheritdoc}
	 */
	public function getClass($className, $namespace = NULL)
	{
	}


	/**
	 * {@inheritdoc}
	 */
	public function getConstant($className, $namespace = '')
	{
	}


	/**
	 * {@inheritdoc}
	 */
	public function getFunction($name, $namespace = '')
	{
	}

}
