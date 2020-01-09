<?php

namespace AppBundle\Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Image;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ImageAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('file', FileType::class, [
                'multiple' => true
            ])
            ->add('post', EntityType::class, array(
                'choice_label'=>"getHeader",
                'class' => "AppBundle\Entity\Post"
            ))
            ->add('name', TextType::class, [
                'required' => false
            ]);
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->addIdentifier('name');
        $listMapper->addIdentifier('post');
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
