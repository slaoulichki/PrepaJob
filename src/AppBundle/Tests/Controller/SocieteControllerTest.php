<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SocieteControllerTest extends WebTestCase
{
    public function testAddsociete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addsociete');
    }

    public function testEditsociete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editsociete');
    }

    public function testShowsociete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showsociete/{id}');
    }

}
