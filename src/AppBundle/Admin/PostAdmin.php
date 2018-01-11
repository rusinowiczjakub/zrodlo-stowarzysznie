<?php

namespace AppBundle\Admin;

use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('header', TextType::class, [
            'label' => 'Nagłówek'
        ])
            ->add('content', CKEditorType::class, [
                'label' => 'Treść'
            ])
            ->add('sign', TextType::class, [
                'label' => 'Podpis'
            ])
            ->add('createdAt', DateTimeType::class, [
                'label' => 'Data'
            ])
            ->add('images', 'sonata_type_collection', [
                'label' => 'Obraz',
                'by_reference' => false,
                'required' => false
            ]);
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('header');
    }



}