<?php
/**
 * Created by PhpStorm.
 * User: antonioleutsch
 * Date: 21.05.20
 * Time: 12:10
 */

namespace AntonioLeutsch\ChuckNorrisJokes;

class JokeFactory
{

    protected $jokes = [
        'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
        'Chuck Norris counted to infinity... Twice.',
        'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }

    public function getRandomJokes($amount = 1) {

    }
}