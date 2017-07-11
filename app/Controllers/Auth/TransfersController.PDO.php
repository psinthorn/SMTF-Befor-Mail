<?php 

namespace App\Controllers;

use PDO;

class TransfersController extends Controller
{

//---------------------------------------------------------------------------------------------------------------------------------
    
    public function index($request, $response)
            {

                    $transfers = $this->c->db->query("SELECT * FROM transfer ORDER BY id DESC")->fetchAll(PDO::FETCH_OBJ);
                    

                    return $this->c->view->render($response, 'transfers/index.twig.php', compact('transfers'));

            }

//---------------------------------------------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------------------------------------------
    
    public function transfersapi($request, $response)
            {

                    $transfers = $this->c->db->query("SELECT * FROM transfer ORDER BY id DESC")->fetchAll(PDO::FETCH_OBJ);
                    
                    return $response->withJson($transfers,200);
                    //return $this->c->view->render($response, 'transfers/index.twig.php', compact('transfers'));

            }

//---------------------------------------------------------------------------------------------------------------------------------


    public function show($request, $response, $args)
            {
                
                $id = $request->getAttribute('id');
               
                try {
                    $transfer = $this->c->db->prepare("SELECT * FROM transfer WHERE id = $id");

                    $transfer->execute();               

                    $transfer = $transfer->fetch(PDO::FETCH_OBJ);


                      return $this->c->view->render($response, 'transfers/update.twig.php', compact('transfer')); 

                }catch(PDOException $e){

                        echo "Database Report Error: <br>" . $e;

                    }
                    
            } 

//---------------------------------------------------------------------------------------------------------------------------------

    public function addtransfer($request, $response, $args)
            {

               $pickup_from = $request->getParam('from'); 
               $pickup_to = $request->getParam('to'); 
               $sedan_rate = $request->getParam('sedan_rate'); 
               $suv_rate = $request->getParam('suv_rate'); 
               $minibus_rate = $request->getParam('minibus_rate'); 
            
            //    echo "Add Transfer Action " . $pickup_from . "<br>";  
            //    echo "Add Transfer Action " . $pickup_to . "<br>"; 
            //    echo "Add Transfer Action " . $sedan_rate . "<br>"; 
            //    echo "Add Transfer Action " . $suv_rate . "<br>"; 
            //    echo "Add Transfer Action " . $minibus_rate . "<br>"; 

                    try {
                            $transfer = $this->c->db->prepare("INSERT INTO transfer(pickup_from, pickup_to, sedan_rate, suv_rate, minibus_rate) VALUES(:pickup_from, :pickup_to, :sedan_rate, :suv_rate, :minibus_rate)");

                            $transfer->execute([
                                'pickup_from' => $pickup_from,
                                'pickup_to' => $pickup_to,
                                'sedan_rate' => $sedan_rate,
                                'suv_rate' => $suv_rate,
                                'minibus_rate' => $minibus_rate,
                            ]);

                            //return $response->withRedirect('/transfers'); 
                            return $response->withRedirect($this->c->router->pathFor('transfers')); 
                            //return $this->c->view->render($response, 'transfers/index.twig.php'); 

                    }catch(PDOException $e){

                            echo "Database Report Error: <br>" . $e;

                    }


                         
                    
            } 

//---------------------------------------------------------------------------------------------------------------------------------

  public function updateroute($request, $response, $args)
                {

               $id = $request->getAttribute('id');           
               $pickup_from = $request->getParsedBody()['from']; 
               $pickup_to = $request->getParsedBody()['to']; 
               $sedan_rate = $request->getParsedBody()['sedan_rate']; 
               $suv_rate = $request->getParsedBody()['suv_rate']; 
               $minibus_rate = $request->getParsedBody()['minibus_rate'];      

            //    $id = $request->getAttribute('id');           
            //    $pickup_from = $request->getAttribute('from'); 
            //    $pickup_to = $request->getAttribute('to'); 
            //    $sedan_rate = $request->getAttribute('sedan_rate'); 
            //    $suv_rate = $request->getAttribute('suv_rate'); 
            //    $minibus_rate = $request->getAttribute('minibus_rate'); 
            
               echo "Add Transfer Action " . $id . "<br>";  
               echo "Add Transfer Action " . $pickup_from . "<br>";  
               echo "Add Transfer Action " . $pickup_to . "<br>"; 
               echo "Add Transfer Action " . $sedan_rate . "<br>"; 
               echo "Add Transfer Action " . $suv_rate . "<br>"; 
               echo "Add Transfer Action " . $minibus_rate . "<br>"; 

                    try {
                             //$route = $this->c->db->prepare("UPDATE transfer SET `pickup_from`=?, `pickup_to`=?, `sedan_rate`=?, `suv_rate`=?, `minibus_rate`=? WHERE `transfer`.`id` = $id");
                             $route = $this->c->db->prepare("UPDATE transfer SET 
                             `pickup_from`='$pickup_from', 
                             `pickup_to`='$pickup_to', 
                             `sedan_rate`='$sedan_rate', 
                             `suv_rate`='$suv_rate', 
                             `minibus_rate`='$minibus_rate'
                             WHERE `transfer`.`id` = $id");
                             //$route->bind_param($pickup_from,$pickup_to,$sedan_rate,$suv_rate,$minibus_rate );

                             $route->execute();
                            

                            //return $response->withRedirect('/transfers'); 
                            return $response->withRedirect($this->c->router->pathFor('transfers')); 
                            //return $this->c->view->render($response, 'transfers/index.twig.php'); 

                    }catch(PDOException $e){

                            echo "Database Report Error: <br>" . $e;

                     }

              }


//---------------------------------------------------------------------------------------------------------------------------------



            public function deletetransfer($request, $response, $args)
                    {
                    
                        $id = $request->getAttribute('id');

                        

                            try {
                                    $transfer = $this->c->db->prepare("DELETE FROM transfer WHERE id = $id");

                                    $result = $transfer->execute();
                                    
                                    return $response->withRedirect($this->c->router->pathFor('transfers')); 

                            }catch(PDOException $e){

                                    echo "Database Report Error: <br>" . $e;

                            }


                                
                            
                    } 


}

//---------------------------------------------------------------------------------------------------------------------------------
