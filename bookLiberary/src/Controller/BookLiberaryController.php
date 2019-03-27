<?php


namespace Drupal\bookLiberary\Controller;

use Drupal\bookLiberary\Entity\Book_liberaryEntity;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\BrowserKit\Request;


class BookLiberaryController  extends ControllerBase 
 {
     
    
    public function index(Request $request)
    {
            $title=$request->get('title');
            $description=$request->get('description');
            $authors=$request->get('authors');
            $price=$request->get('price');


            $em=$this->getDoctrine()->getEntityManager();


            $db=new Book_liberaryEntity();

            $db->setTitle($title);
            $db->setDescription($description);
            $db->setAuthors($authors);
            $db->setPrice($price);

            $em->persist($db);
            $em->flush();
     
            return array(
                '#theme'    => 'book_liberary',
                '#title' => $title,
                '#description' => $description,
                '#authors'=> $authors,
                '#price' => $price
            );

     }
}
