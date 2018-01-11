<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{

    /**
     * @Route("/actuals", name="actuals")
     */
    public function actualsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $postRepo = $em->getRepository('AppBundle:Post');

        $lastPosts = $postRepo->findByDate();


        return $this->render('front/actuals.html.twig', [
            'lastPosts' => $lastPosts,
            'sidePosts' => $lastPosts
        ]);
    }

    /**
     * @Route("/actuals/{year}", name="actuals_by_year")
     */
    public function showByYearAction($year)
    {
        $em = $this->getDoctrine()->getManager();

        $postRepo = $em->getRepository('AppBundle:Post');

        $posts = $postRepo->findByYear($year);

        $sidePosts = $postRepo->findByDate();

        return $this->render('front/actuals.html.twig', [
            'posts' => $posts,
            'sidePosts' => $sidePosts,
            'year' => $year
        ]);
    }

    /**
     * @Route("/actuals/post/{id}", name="single_post")
     */
    public function singlePostAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $postRepo = $em->getRepository('AppBundle:Post');

        $post = $postRepo->find($id);

        return $this->render('front/single_post.html.twig', [
            'post' => $post
        ]);
    }
}
