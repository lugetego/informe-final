<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Otros
 *
 * @ORM\Table(name="otros")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OtrosRepository")
 */
class Otros
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
     * @ORM\Column(name="autor", type="text")
     */
    private $autor;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="text")
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="anio", type="string", length=10)
     */
    private $anio;


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
     * Set autor.
     *
     * @param string $autor
     *
     * @return Otros
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
     * Set titulo.
     *
     * @param string $titulo
     *
     * @return Otros
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
     * Set tipo.
     *
     * @param string $tipo
     *
     * @return Otros
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo.
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set anio.
     *
     * @param string $anio
     *
     * @return Otros
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio.
     *
     * @return string
     */
    public function getAnio()
    {
        return $this->anio;
    }
}
