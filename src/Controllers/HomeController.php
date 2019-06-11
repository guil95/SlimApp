<?php

namespace App\Controllers;

use App\Infra\ResponseCode;
use App\Services\MyService;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface as Request;
use Slim\Http\Response;

class HomeController
{
    protected $container;

    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return Response
     */
    public function home(Request $request, Response $response, $args) {
        try{
            /**
             * @var $service MyService
             */
            $service = $this->container->get(MyService::class);

            return $response->withJson([
                'data' => $service->sum(1,2)
            ], ResponseCode::HTTP_OK);

        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }

    public function contact($request, $response, $args) {
        // your code
        // to access items in the container... $this->container->get('');
        return $response;
    }
}