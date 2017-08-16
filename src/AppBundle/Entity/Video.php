<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VideoRepository")
 */
class Video
{
    /**
     *  @ORM\ManyToOne(targetEntity="AppBundle\Entity\Trick", inversedBy="videos", cascade={"persist"})
     **/
    private $trick;

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
     * @Assert\Type("string")
     * @ORM\Column(name="videoUrl", type="string", length=255, nullable=true)
     */
    private $videoUrl;


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
     * Set videoUrl
     *
     * @param string $videoUrl
     *
     * @return Video
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;

        return $this;
    }

    /**
     * Get videoUrl
     *
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * Set trick
     *
     * @param \AppBundle\Entity\Trick $trick
     *
     * @return Video
     */
    public function setTrick(\AppBundle\Entity\Trick $trick = null)
    {
        $this->trick = $trick;

        return $this;
    }

    /**
     * Get trick
     *
     * @return \AppBundle\Entity\Trick
     */
    public function getTrick()
    {
        return $this->trick;
    }
}
