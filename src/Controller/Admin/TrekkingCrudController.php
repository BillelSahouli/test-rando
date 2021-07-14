<?php

namespace App\Controller\Admin;

use App\Entity\Trekking;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;

class TrekkingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Trekking::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            TimeField::new('duration'),
            NumberField::new('distance'),
            NumberField::new('positive_elevation'),
            NumberField::new('high_point'),
            NumberField::new('low_point'),
            BooleanField::new('return_start_point'),
            TextareaField::new('description'),
            AssociationField::new('creator'),
            AssociationField::new('difficulty'),
            AssociationField::new('type'),
            AssociationField::new('district'),
            AssociationField::new('town'),
            AssociationField::new('start'),
            AssociationField::new('crossing_points'),
        ];
    }
}
