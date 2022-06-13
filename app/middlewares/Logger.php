<?php
use Slim\Psr7\Response;

class Logger
{
    public static function LogOperacion($request, $handler)
    {
        $requestType=$request->getMethod();
        $response = $handler->handle($request);
        $response->getBody()->write("hola, la peticion fue: ".$requestType);
        return $response;
    }

    public static function VerificadorCredenciales($request, $handler)
    {
        $requestType=$request->getMethod();
        $response = $handler->handle($request);
        if($requestType === "GET")
        {
            $response->getBody()->write("{API->GET}");
        }
        else if($requestType === "POST")
        {
            $response->getBody()->write("Metodo ".$requestType." verificar");
            $dataParseada = $request->getParsedBody();
            $nombre = $dataParseada['usuario'];
            $perfil = $dataParseada['perfil'];
            if($perfil === 'admin')
            {
                $response->getBody()->write("Bienvenido {$nombre}!");
                $response->withStatus(200);
            }
            else
            {
                $response->getBody()->write("Usuario no administrador");
                $response->withStatus(401);
            }

        }
        return $response;
    }
}