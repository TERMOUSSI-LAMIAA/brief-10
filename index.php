<?php 
include "Controller/controllercompany.php" ;
$contoller_companys = new contoller_companys() ; 
$contoller_BUSs = new contoller_BUSs() ; 

$contoller_users = new controller_users() ; 
$contoller_Routes = new contoller_Routes() ; 
$contoller_horraires = new contoller_horraires() ; 


if (isset($_GET["action"])) {
    $action = $_GET["action"] ;
    if ($action === "update") {
        $contoller_companys->setcompanys() ;
    }
    if ($action === "companys") {
        $contoller_companys->getcompanys() ;

        $contoller_BUSs->getBUSs() ;
        $contoller_Routes->getRoutes() ;
        $contoller_horraires->gethorraires() ;
    }


}else {
    $contoller_users->getusers() ;
}





//    $contoller_companys->afficheform() ;

// $contoller_companys->setcompanys() ;
