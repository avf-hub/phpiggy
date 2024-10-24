<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use function App\Config\{registerRoutes, registerMiddleware};
use App\Config\Paths;

$app = new App(Paths::SOURCE . "App/container-difinitions.php");

registerRoutes($app);
registerMiddleware($app);

return $app;
