<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Report
 *
 * @ORM\Table(name="report")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReportRepository")
 */
class Report
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * One Report has One Category.
     * @ORM\ManyToOne(targetEntity="reportCategory")
     * @ORM\JoinColumn(name="report_category_id", referencedColumnName="id")
     */
    private $reportCategory;

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

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Report
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Report
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    public function getAbsolutePath() {
        return null === $this->name ? null : $this->getUploadRootDir() . '/' . $this->name;
    }

    public function getWebPath() {
        return null === $this->name ? null : $this->getUploadDir() . '/' . $this->name;
    }

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../web/assets/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return '/additions/';
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
        $name = $this->file->getClientOriginalName();
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

    /**
     * Set reportCategory
     *
     * @param \AppBundle\Entity\reportCategory $reportCategory
     *
     * @return Report
     */
    public function setReportCategory(\AppBundle\Entity\reportCategory $reportCategory = null)
    {
        $this->reportCategory = $reportCategory;

        return $this;
    }

    /**
     * Get reportCategory
     *
     * @return \AppBundle\Entity\reportCategory
     */
    public function getReportCategory()
    {
        return $this->reportCategory;
    }
}
