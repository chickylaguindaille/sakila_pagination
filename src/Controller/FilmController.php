<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\FilmRepository;
use App\Repository\CategoryRepository;
use App\Repository\FilmCategoryRepository;

use App\Entity\Film;
use App\Entity\Category;
use App\Entity\FilmCategory;


class FilmController extends AbstractController
{
    /**
     * @Route("/films", name="films")
     */
    public function index(FilmRepository $filmRepository, CategoryRepository $categoryRepository, FilmCategoryRepository $filmcategoryRepository): Response
    {
        $categories = $categoryRepository->findAll();

        $data['lengthtab'] = 1000;
        $data['active'] = 1;

        $entityManager = $this->getDoctrine()->getManager();
        $films = $entityManager->createQueryBuilder()
            ->select('f.filmId', 'f.title', 'f.rentalRate', 'f.rating', 'c.name', 'COUNT(r.inventory) as titleCount')
            ->from('App\Entity\Film', 'f')
            ->leftJoin('App\Entity\FilmCategory', 'fc', 'WITH', 'f.filmId = fc.filmId')
            ->leftJoin('App\Entity\Category', 'c', 'WITH', 'fc.categoryId = c.categoryId')
            ->leftJoin('App\Entity\Inventory', 'i', 'WITH', 'f.filmId = i.film')
            ->leftJoin('App\Entity\Rental', 'r', 'WITH', 'r.inventory = i.inventoryId')
            ->groupBy('f.title')
            ->setMaxResults(10)
            // ->setFirstResult(10)
            ->orderBy('f.title', 'ASC')
            ->getQuery()
            ->getResult();

        // exit(var_dump(count($lengthtab)));

        return $this->render('film/index.html.twig', [
            'films' => $films,
            'data' => $data
        ]);
    }




    /**
     * @Route("/films/filter", name="filter")
     */
    public function filter(FilmRepository $filmRepository, CategoryRepository $categoryRepository, FilmCategoryRepository $filmcategoryRepository): Response
    {


            $data['limit'] = $_GET['limit'];
            $data['lengthtab'] = 1000;

            if(isset($_GET['page'])){
                $data['active'] = $_GET['page'];
            }

            if(isset($_GET['filter'])){
                $data['filter'] = $_GET['filter'];
                $data['direction'] = $_GET['direction'];
                if ($data['direction'] == 'ASC'){
                    $data['direction'] = 'DESC';
                }else if($data['direction'] == 'DESC'){
                    $data['direction'] = 'ASC';
                    // exit(var_dump("ici"));
                }
            }else{
                $data['filter'] = 'f.title';
                $data['direction'] = 'ASC';
            }
            // exit(var_dump($data));

            $firstresult = ($data['active'] - 1) * $_GET['limit'];


        $categories = $categoryRepository->findAll();

        $entityManager = $this->getDoctrine()->getManager();
        $films = $entityManager->createQueryBuilder()
            ->select('f.filmId', 'f.title', 'f.rentalRate', 'f.rating', 'c.name', 'COUNT(r.inventory) as titleCount')
            ->from('App\Entity\Film', 'f')
            ->leftJoin('App\Entity\FilmCategory', 'fc', 'WITH', 'f.filmId = fc.filmId')
            ->leftJoin('App\Entity\Category', 'c', 'WITH', 'fc.categoryId = c.categoryId')
            ->leftJoin('App\Entity\Inventory', 'i', 'WITH', 'f.filmId = i.film')
            ->leftJoin('App\Entity\Rental', 'r', 'WITH', 'r.inventory = i.inventoryId')
            ->groupBy('f.title')
            ->setMaxResults($data['limit'])
            ->setFirstResult($firstresult)
            ->orderBy($data['filter'], $data['direction'])
            ->getQuery()
            ->getResult();

        // exit(var_dump($data));

        return $this->render('film/filter.html.twig', [
            'films' => $films,
            'data' => $data
        ]);
    }

}
