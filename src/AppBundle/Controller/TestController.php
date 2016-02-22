<?php
/**
 * Project For skeleton.
 * Created by : heri
 * Date: 2/22/2016
 * Time: 1:14 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller {

  /**
   * @Route("/test")
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function testAction(){
	return new Response('hello world');
  }

}