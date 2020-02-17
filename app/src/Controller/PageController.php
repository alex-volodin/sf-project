<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author    Alexander Volodin <mr-stanlik@yandex.ru>
 */

class PageController extends AbstractController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request Request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function homepage(Request $request)
    {
        return $this->render('page/homepage.html.twig', [

        ]);
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request Request
     * @param string                                    $slug    Slug
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function page(Request $request, string $slug)
    {
        return $this->render('page/page.html.twig', [

        ]);
    }
}
