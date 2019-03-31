<?php

namespace App;

use Twig\CacheExtension\CacheStrategy\KeyGeneratorInterface;

class MyKeyGenerator implements KeyGeneratorInterface
{
    public function generateKey($value)
    {
        $class = get_class($value);
        $class_red = explode("\\", $class);
        $class_OK=$class_red[2];
        //return str_replace('\\', '\\'.'\\', get_class($value)) . '_' . $value->getId() . '_' . $value->getUpdatedAt()->format('d-m-Y H-i-s');
        //return $class_OK . '_' . $value->getId() . '_' . $value->getUpdatedAt()->format('d-m-Y H-i-s');
        return $class_OK . '_' . $value->getId() . '_' . $value->getUpdatedAt()->getTimestamp();

    }
}