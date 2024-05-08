<?php

abstract class Mensch
{
    private string $fname;
    private string $lname;
    private string $geschlecht;

    /**
     * @param string $fname
     * @param string $lname
     * @param string $geschlecht
     */
    public function __construct(string $fname, string $lname, string $geschlecht)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->geschlecht = $geschlecht;
    }

    /**
     * @return string
     */
    public function getFname(): string
    {
        return $this->fname;
    }

    /**
     * @param string $fname
     */
    public function setFname(string $fname): void
    {
        $this->fname = $fname;
    }

    /**
     * @return string
     */
    public function getLname(): string
    {
        return $this->lname;
    }

    /**
     * @param string $lname
     */
    public function setLname(string $lname): void
    {
        $this->lname = $lname;
    }

    /**
     * @return string
     */
    public function getGeschlecht(): string
    {
        return $this->geschlecht;
    }

    /**
     * @param string $geschlecht
     */
    public function setGeschlecht(string $geschlecht): void
    {
        $this->geschlecht = $geschlecht;
    }


    public function sichVorstellen()
    {
        echo "Hallo mein name ist $this->fname";
    }


}



