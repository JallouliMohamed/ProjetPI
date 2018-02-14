<?php

namespace piBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reply
 *
 * @ORM\Table(name="reply")
 * @ORM\Entity(repositoryClass="piBundle\Repository\ReplyRepository")
 */
class Reply
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
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;

    /**
     * @ORM\ManyToOne(targetEntity="Reclamation", inversedBy="products")
     * @ORM\JoinColumn(name="rec_id", referencedColumnName="id")
     */
    private $rec;


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
     * Set message
     *
     * @param string $message
     *
     * @return Reply
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }





    /**
     * Set rec
     *
     * @param \piBundle\Entity\Reclamation $rec
     *
     * @return Reply
     */
    public function setRec(\piBundle\Entity\Reclamation $rec = null)
    {
        $this->rec = $rec;

        return $this;
    }

    /**
     * Get rec
     *
     * @return \piBundle\Entity\Reclamation
     */
    public function getRec()
    {
        return $this->rec;
    }
}
