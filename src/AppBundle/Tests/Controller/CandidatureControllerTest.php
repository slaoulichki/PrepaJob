<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CandidatureControllerTest extends WebTestCase
{
    public function testAddcandidature()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addcandidature');
    }

    public function testShowcandidature()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/show/{id}');
    }

    public function testListcandidature()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/list/{id}');
    }

}
