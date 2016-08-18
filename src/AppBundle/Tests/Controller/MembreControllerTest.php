<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MembreControllerTest extends WebTestCase
{
    public function testAddmembre()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addmembre');
    }

    public function testEditmembre()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/edit/{id}');
    }

    public function testShowmembre()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/show/{id}');
    }

}
