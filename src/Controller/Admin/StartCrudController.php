<?php

namespace App\Controller\Admin;

use App\Entity\Start;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class StartCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Start::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
