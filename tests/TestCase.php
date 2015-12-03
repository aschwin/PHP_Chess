<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://example.dev';

	public function __call($method, $args)
	{
		if (in_array($method, ['get', 'post', 'put', 'patch', 'delete']))
		{
			return $this->call($method, $args[0]);
		}

		throw new BadMethodCallException;
	}

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

		if ( ! $app->hasBeenBootstrapped())
		{
			$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
			$app->bootstrapWith(
				[
					'Illuminate\Foundation\Bootstrap\DetectEnvironment',
					'Illuminate\Foundation\Bootstrap\LoadConfiguration',
					'Illuminate\Foundation\Bootstrap\RegisterFacades',
					'Illuminate\Foundation\Bootstrap\SetRequestForConsole',
					'Illuminate\Foundation\Bootstrap\RegisterProviders',
					'Illuminate\Foundation\Bootstrap\BootProviders',
				]
			);
		}

        return $app;
    }
}
