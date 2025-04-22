<?php

/**
 */

namespace rhinophp\rhinophp\middlewares;


use rhinophp\rhinophp\Application;
use rhinophp\rhinophp\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 *
 */
class AuthMiddleware extends BaseMiddleware
{
    protected array $actions = [];

    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}