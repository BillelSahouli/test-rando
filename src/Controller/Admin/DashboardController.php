<?php

namespace App\Controller\Admin;

use App\Entity\Admin;
use App\Entity\CrossingPoints;
use App\Entity\Difficulty;
use App\Entity\District;
use App\Entity\Start;
use App\Entity\Town;
use App\Entity\Trekking;
use App\Entity\Type;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Test Rando');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Admin', 'fas fa-list', Admin::class);
        yield MenuItem::linkToCrud('CrossingPoints', 'fas fa-list', CrossingPoints::class);
        yield MenuItem::linkToCrud('Difficulty', 'fas fa-list', Difficulty::class);
        yield MenuItem::linkToCrud('Start', 'fas fa-list', Start::class);
        yield MenuItem::linkToCrud('Trekking', 'fas fa-list', Trekking::class);
        yield MenuItem::linkToCrud('Type', 'fas fa-list', Type::class);
        yield MenuItem::linkToCrud('Town', 'fas fa-list', Town::class);
        yield MenuItem::linkToCrud('District', 'fas fa-list', District::class);
    }
}
