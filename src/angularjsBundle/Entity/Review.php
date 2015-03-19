<?php

namespace angularjsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Review
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="starts", type="smallint")
     */
    private $starts;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @ORM\ManyToOne(targetEntity="GemProduct", inversedBy="reviews")
     * @ORM\JoinColumn(name="gemproduct_id", referencedColumnName="id")
     */
    protected $gemproduct;


    public function __construct()
    {
        $this->setCreated(new \DateTime());
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set starts
     *
     * @param integer $starts
     * @return Review
     */
    public function setStarts($starts)
    {
        $this->starts = $starts;

        return $this;
    }

    /**
     * Get starts
     *
     * @return integer 
     */
    public function getStarts()
    {
        return $this->starts;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Review
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Review
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Review
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
     * Set gemproduct
     *
     * @param \angularjsBundle\Entity\GemProduct $gemproduct
     * @return Review
     */
    public function setGemproduct(\angularjsBundle\Entity\GemProduct $gemproduct = null)
    {
        $this->gemproduct = $gemproduct;

        return $this;
    }

    /**
     * Get gemproduct
     *
     * @return \angularjsBundle\Entity\GemProduct 
     */
    public function getGemproduct()
    {
        return $this->gemproduct;
    }
}
