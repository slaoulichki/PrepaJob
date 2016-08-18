<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OffreControllerTest extends WebTestCase
{
    public function testAddoffre()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addoffre');
    }

    public function testListoffre()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listoffre');
    }

    public function testEditoffre()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{id}');
    }

    public function testShowoffre()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/{id}');
    }

}
