<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publicacion
 *
 * @ORM\Table(name="publicacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PublicacionRepository")
 */
class Publicacion
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
     * @ORM\Column(name="titulo", type="text")
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="text")
     */
    private $autor;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoautor", type="text", nullable=true)
     */
    private $tipoautor;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="journal", type="string")
     */
    private $journal;

    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string")
     */
    private $anio;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="quartil", type="string", nullable=true)
     */
    private $quartil;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo.
     *
     * @param string $titulo
     *
     * @return Publicacion
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo.
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set autor.
     *
     * @param string $autor
     *
     * @return Publicacion
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor.
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @return string
     */
    public function getTipoautor()
    {
        return $this->tipoautor;
    }

    /**
     * @param string $tipoautor
     */
    public function setTipoautor($tipoautor)
    {
        $this->tipoautor = $tipoautor;
    }

    /**
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return string
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * @param string $journal
     */
    public function setJournal($journal)
    {
        $this->journal = $journal;
    }

    /**
     * Set anio.
     *
     * @param \DateTime $anio
     *
     * @return Publicacion
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio.
     *
     * @return \DateTime
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set url.
     *
     * @param string $url
     *
     * @return Publicacion
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getQuartil()
    {
        return $this->quartil;
    }

    /**
     * @param string $quartil
     */
    public function setQuartil($quartil)
    {
        $this->quartil = $quartil;
    }


}
