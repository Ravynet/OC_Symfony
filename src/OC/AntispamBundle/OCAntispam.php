<?php
/**
 * Created by PhpStorm.
 * User: yannr
 * Date: 10/02/2018
 * Time: 09:54
 */

namespace OC\AntispamBundle;


class OCAntispam
{
    private $mailer;
    private $locale;
    private $minLength;

    public function __construct(\Swift_Mailer $mailer, $locale, $minLength)
    {
        $this->mailer = $mailer;
        $this->locale = $locale;
        $this->minLength = (int) $minLength;
    }

    public function isSpam($text)
    {
        return strlen($text) < $this->minLength;
    }
}