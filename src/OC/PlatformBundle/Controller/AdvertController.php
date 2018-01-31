<?php
// src/OC/PlatformBundle/Controller
namespace OC\PlatformBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class AdvertController extends Controller
{
    /**
     * 
     * @param type $id
     * @return Response
     */
    public function showAction($id)
    {
         $url = $this->get('router')->generate(
            'oc_add_advert', // 1er argument : le nom de la route
            array('id' => 5)    // 2e argument : les valeurs des paramètres
        );
        return new Response("test + ".$id." + generate url :".$url);
    }
    /**
     * 
     * @param type $id
     * @return Response
     */
    public function addAction($id,Request $request)
    {
        //$request->query->get('tag') get
        //$request->request->get('tag') post
        //$request->cookies->get('tag') cookies
        //$request->server->get('REQUEST_URI') server
        //$request->headers->get('USER_AGENT') headers
        if($request->isMethod("POST")){
            echo "<p>THIS a method get </p>";
        }
        $response = new Response();
        $response->setContent("this is the content".$id);
        $response->setStatusCode(404);
        return $response;
    }
    public function listAction()
    {
        //test twig premierement
        
        return $this->render('OCPlatformBundle:Advert:list.html.twig', array(
            'id'  => 5,
            'tag' => "ma premier tag",
          ));
    }
}
