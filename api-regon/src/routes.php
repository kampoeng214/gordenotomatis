<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes


$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});


$app->get("/login/", function(Request $request, Response $response){
    
        $username = $request->getQueryParam("username");
        $password = md5($request->getQueryParam("password"));
        
        $sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
        $stmt = $this->db->prepare($sql);
    $data = [
    	":username" => $username,
    	":password" => $password
    ];
    $stmt->execute($data);
    $result = $stmt->fetchALL();
    $row = $stmt->rowCount();
    if($row > 0){
        return $response->withJson(["status" => "success", "data" => $result], 200);
    }else{
         return $response->withJson(["status" => "failed", "data" => null], 200);
    }
});

$app->get("/monitoring/{USERNAME}", function(Request $request, Response $response, array $args){
    $username = $args["USERNAME"];
    try{
        $sql = "SELECT * FROM tb_monitoring a INNER JOIN tb_user b ON a.id_user = b.id_user WHERE b.username ='$username'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchALL();
        return $response->withJson(["status" => "success", "data" => $result], 200);
    } catch (Exception $e){
        return $response->withJson(["status" => "failed", "alert" => "Error"], 200);
    }
});