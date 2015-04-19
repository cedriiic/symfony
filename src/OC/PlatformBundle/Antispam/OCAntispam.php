<?php
/**
 * Created by PhpStorm.
 * User: Cédric
 * Date: 16/04/2015
 * Time: 22:50
 */

namespace OC\PlatformBundle\Antispam;


class OCAntispam {

    private $mailer;
    private $locale;
    private $minLength;

    public function __construct(\Swift_Mailer $mailer, $locale, $minLength)
    {
        $this->mailer    = $mailer;
        $this->locale    = $locale;
        $this->minLength = (int) $minLength;
    }

    public function isSpam($text)
    {
        return strlen($text) < $this->minLength;
    }
}