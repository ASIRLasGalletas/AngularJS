<?php

namespace angularjsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GemProduct
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GemProduct
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="shine", type="integer")
     */
    private $shine;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal")
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="rarity", type="integer")
     */
    private $rarity;

    /**
     * @var integer
     *
     * @ORM\Column(name="hardness", type="integer")
     */
    private $hardness;

    /**
     * @var integer
     *
     * @ORM\Column(name="faces", type="integer")
     */
    private $faces;

    /**
     * @var array
     *
     * @ORM\Column(name="images", type="array")
     */
    private $images;

    /**
     * @ORM\ManyToMany(targetEntity="Review", mappedBy="gemproduct")
     */
    private $reviews;


    public function __construct()
    {
        $this->reviews = newArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return GemProduct
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
     * Set description
     *
     * @param string $description
     * @return GemProduct
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
     * Set shine
     *
     * @param integer $shine
     * @return GemProduct
     */
    public function setShine($shine)
    {
        $this->shine = $shine;

        return $this;
    }

    /**
     * Get shine
     *
     * @return integer 
     */
    public function getShine()
    {
        return $this->shine;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return GemProduct
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set rarity
     *
     * @param integer $rarity
     * @return GemProduct
     */
    public function setRarity($rarity)
    {
        $this->rarity = $rarity;

        return $this;
    }

    /**
     * Get rarity
     *
     * @return integer 
     */
    public function getRarity()
    {
        return $this->rarity;
    }

    /**
     * Set hardness
     *
     * @param integer $hardness
     * @return GemProduct
     */
    public function setHardness($hardness)
    {
        $this->hardness = $hardness;

        return $this;
    }

    /**
     * Get hardness
     *
     * @return integer 
     */
    public function getHardness()
    {
        return $this->hardness;
    }

    /**
     * Set faces
     *
     * @param integer $faces
     * @return GemProduct
     */
    public function setFaces($faces)
    {
        $this->faces = $faces;

        return $this;
    }

    /**
     * Get faces
     *
     * @return integer 
     */
    public function getFaces()
    {
        return $this->faces;
    }

    /**
     * Set images
     *
     * @param array $images
     * @return GemProduct
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return array 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add reviews
     *
     * @param \angularjsBundle\Entity\Review $reviews
     * @return GemProduct
     */
    public function addReview(\angularjsBundle\Entity\Review $reviews)
    {
        $this->reviews[] = $reviews;

        return $this;
    }

    /**
     * Remove reviews
     *
     * @param \angularjsBundle\Entity\Review $reviews
     */
    public function removeReview(\angularjsBundle\Entity\Review $reviews)
    {
        $this->reviews->removeElement($reviews);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReviews()
    {
        return $this->reviews;
    }
}
