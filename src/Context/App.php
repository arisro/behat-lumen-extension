<?php

namespace Arisro\Behat\Context;

use Laravel\Lumen\Application;

trait App
{
    /**
     * The Laravel application.
     *
     * @var Application
     */
    protected $app;

    /**
     * Set the application.
     *
     * @param Application $app
     */
    public function setApp(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Get the application.
     *
     * @return Application
     */
    public function app()
    {
        return $this->app;
    }
}
