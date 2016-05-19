<?php
// src/AppBundle/Entity/Work.php
namespace AppBundle\Entity;

use DateTime;

use Symfony\Component\HttpFoundation\File\File,
    Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

use Vich\UploaderBundle\Mapping\Annotation as Vich;

use AppBundle\Entity\Utility\Traits\IdMapper,
    AppBundle\Entity\Utility\Traits\TextFormatter;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\WorkRepository")
 * @ORM\Table(name="work")
 *
 * @Vich\Uploadable
 */
class Work
{
    use IdMapper, TextFormatter;

    const WEB_PATH        = "/uploads/work/images/";
    const WEB_PATH_THUMBS = "/uploads/work/images/thumbs/";

    /**
    * @ORM\ManyToOne(targetEntity="Specialization", inversedBy="works")
    * @ORM\JoinColumn(name="specialization_id", referencedColumnName="id")
    */
    protected $specialization;

    /**
    * @ORM\ManyToOne(targetEntity="Service", inversedBy="works")
    * @ORM\JoinColumn(name="service_id", referencedColumnName="id")
    */
    protected $service;

    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $code;

    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $title;

    /**
    * @ORM\Column(type="text")
    */
    protected $description;

    /**
    * @ORM\Column(type="text", name="point_text")
    */
    protected $pointText;

    /**
    * @ORM\Column(type="text", name="resolve_text")
    */
    protected $resolveText;

    /**
    * @ORM\Column(type="text", name="result_text")
    */
    protected $resultText;

    /**
    * @ORM\Column(type="datetime")
    */
    protected $created;

    /**
     * @Assert\File(
     *     maxSize="5M",
     *     mimeTypes={"image/png", "image/jpeg", "image/pjpeg", "image/gif"}
     * )
     *
     * @Vich\UploadableField(mapping="work_image", fileNameProperty="imageName")
     */
    protected $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     **/
    protected $imageName;

    /**
    * @ORM\Column(type="datetime", nullable=true)
    */
    protected $updated;

    /**
     * To string
     */
    public function __toString()
    {
        return ( $this->title ) ?: "";
    }

    /* Vich uploadable methods */

    public function setImageFile($imageFile = NULL)
    {
        $this->imageFile = $imageFile;

        if( $imageFile instanceof File )
            $this->updated = new DateTime;
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function getImagePath()
    {
        return ( $this->imageName )
            ? self::WEB_PATH.$this->imageName
            : FALSE;
    }

    public function getImageThumbPath()
    {
        return ( $this->imageName )
            ? self::WEB_PATH_THUMBS.$this->imageName
            : FALSE;
    }

    /* END Vich uploadable methods */

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Work
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Work
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Work
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Work
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set pointText
     *
     * @param string $pointText
     *
     * @return Work
     */
    public function setPointText($pointText)
    {
        $this->pointText = $pointText;

        return $this;
    }

    /**
     * Get pointText
     *
     * @return string
     */
    public function getPointText()
    {
        return $this->pointText;
    }

    public function getPointTextByNewline()
    {
        return $this->explodeByNewline($this->pointText);
    }

    /**
     * Set resolveText
     *
     * @param string $resolveText
     *
     * @return Work
     */
    public function setResolveText($resolveText)
    {
        $this->resolveText = $resolveText;

        return $this;
    }

    /**
     * Get resolveText
     *
     * @return string
     */
    public function getResolveText()
    {
        return $this->resolveText;
    }

    public function getResolveTextByNewline()
    {
        return $this->explodeByNewline($this->resolveText);
    }

    /**
     * Set resultText
     *
     * @param string $resultText
     *
     * @return Work
     */
    public function setResultText($resultText)
    {
        $this->resultText = $resultText;

        return $this;
    }

    /**
     * Get resultText
     *
     * @return string
     */
    public function getResultText()
    {
        return $this->resultText;
    }

    public function getResultTextByNewline()
    {
        return $this->explodeByNewline($this->resultText);
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Work
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set imageName
     *
     * @param string $imageName
     * @return Work
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get imageName
     *
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Work
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set specialization
     *
     * @param \AppBundle\Entity\Specialization $specialization
     *
     * @return Work
     */
    public function setSpecialization(\AppBundle\Entity\Specialization $specialization = null)
    {
        $this->specialization = $specialization;

        return $this;
    }

    /**
     * Get specialization
     *
     * @return \AppBundle\Entity\Specialization
     */
    public function getSpecialization()
    {
        return $this->specialization;
    }

    /**
     * Set service
     *
     * @param \AppBundle\Entity\Service $service
     *
     * @return Work
     */
    public function setService(\AppBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \AppBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }
}
