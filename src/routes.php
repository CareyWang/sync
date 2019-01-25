<?php

use Slim\Http\Request;
use Slim\Http\Response;
use Sync\Controllers\SyncPacController;

// Routes

// 同步pac
$app->any('/syncPac', SyncPacController::class . ':index');

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
