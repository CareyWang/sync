<?php

namespace Sync\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class SyncPacController extends BaseController
{
    public function index(Request $request, Response $response)
    {
        $resourcesPath = $this->container->get('settings')['resources']['base_path'];
        $pac = file_get_contents($resourcesPath . 'autopac.js');

        $body = $response->getBody();
        $body->write($pac);

        return $response;
    }
}
