<?php

namespace poppbook\megaquiz\quiztools;

/**
 * @license   http://www.example.com Borsetshire Open License
 * @package quiztools
 */

/**
 * @package quiztools
 */
class ReceiverFactory
{
    public static function getAccessManager()
    {
        return new AccessManager();
    }
}
