<?php

namespace Viratef\Gateway;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Viratef\Gateway\GatewayResolver
 */
class Gateway extends Facade
{
	/**
	 * The name of the binding in the IoC container.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'gateway';
	}
}
