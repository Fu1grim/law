<?php
// src/AppBundle/Entity/Utility/Traits/TextFormatter.php
namespace AppBundle\Entity\Utility\Traits;

trait TextFormatter
{
    public function explodeByNewline($text)
    {
        $textArray = explode(PHP_EOL, str_replace("\r", '', $text));

        return array_values(array_filter($textArray));
    }
}
