<?php

abstract class Mensch
{
    private string $fname;
    private string $lname;
    private string $geschlecht;

    private int $alter;

    /**
     * @return int
     */
    public function getAlter(): int
    {
        return $this->alter;
    }

    /**
     * @param int $alter
     */
    public function setAlter(int $alter): void
    {
        $this->alter = $alter;
    }

    /**
     * @param string $fname
     * @param string $lname
     * @param string $geschlecht
     */
    public function __construct(string $fname, string $lname, string $geschlecht, int $alter)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->geschlecht = $geschlecht;
        $this->alter = $alter;
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

    public function sagdeinAlter()
    {
        echo 'Ich bin'.$this->alter.' Jahre alt';
    }

    public abstract function hoefflichVorstellen();





}



