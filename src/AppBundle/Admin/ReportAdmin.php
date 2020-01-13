<?php

namespace AppBundle\Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Report;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Tests\Extension\Core\Type\DateTypeTest;

class ReportAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('file', FileType::class, [
                'label' => 'Plik PDF'
            ])
            ->add('reportCategory', EntityType::class, [
                'choice_label'=>"getName",
                'class' => "AppBundle\Entity\ReportCategory",
                'label' => 'Kategoria'
            ])
            ->add('date', DateType::class, [
                'label' => 'Data',
                'years' => range(2000, 2032)
            ]);
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name');
        $listMapper->addIdentifier('date');
    }

    public function prePersist($file) {
        $this->saveFile($file);
    }

    public function preUpdate($file) {
        $this->saveFile($file);
    }

    public function saveFile($file) {
        $file->upload();
    }

    public function postRemove($file) {
        unlink(__DIR__.'/../../../../web/uploads/photos/'.$file->getName());
    }
}
