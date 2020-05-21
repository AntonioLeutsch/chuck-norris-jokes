<?php
/**
 * Created by PhpStorm.
 * User: antonioleutsch
 * Date: 21.05.20
 * Time: 12:31
 */

namespace AntonioLeutsch\ChuckNorrisJokes\Tests;


use AntonioLeutsch\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }
    /**
     * @test
     */
    public function it_returns_a_predefined_joke()
    {
        $ChuckNorrisJokesArray = [
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'Chuck Norris counted to infinity... Twice.',
            'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.'
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $ChuckNorrisJokesArray);
    }
}