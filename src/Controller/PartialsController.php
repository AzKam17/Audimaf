<?php

namespace App\Controller;

use App\Repository\PageCategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PartialsController extends AbstractController
{
    /**
     * @Route("/services_list_header", name="services_list_header")
     */
    public function services_list(PageCategoryRepository $pageCatRepo): Response
    {
        $allservices = ($pageCatRepo->findOneBy([
            'name' => "Services"
        ]))->getPages();

        return $this->render('partials/_header_services_list.html.twig', [
            'services' => $allservices,
        ]);
    }
}