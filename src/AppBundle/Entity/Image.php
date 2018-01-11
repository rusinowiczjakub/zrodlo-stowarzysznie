<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageRepository")
 */
class Image
{

    /**
     * Many Images have One Post.
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="images")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    private $post;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var UploadedFile
     */
    public $file;

    public function __toString(){
        if(is_null($this->name)) {
            return 'NULL';
        }

        return $this->name;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPost(Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    public function getPost(){
        return $this->post;
    }

    public function getAbsolutePath() {
        return null === $this->name ? null : $this->getUploadRootDir() . '/' . $this->name;
    }

    public function getWebPath() {
        return null === $this->name ? null : $this->getUploadDir() . '/' . $this->name;
    }

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return '/uploads/';
    }

    public function upload() {
        // the file property can be empty if the field is not required
        if (null === $this->file) {
            return;
        }
//
//        if (null === $basepath) {
//            return;
//        }
        $name = uniqid().'.'.$this->file->guessExtension();
        // we use the original file name here but you should
        // sanitize it at least to avoid any security issues
        // move takes the target directory and then the target filename to move to
        $this->file->move($this->getUploadRootDir(), $name);

        // set the path property to the filename where you'ved saved the file
        $this->setName($name);

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

    public function preRemove(){
        unlink(__DIR__.'/../../../web/uploads/'.$this->getName());
    }
}
