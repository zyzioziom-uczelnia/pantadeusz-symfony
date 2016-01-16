<?php

namespace Patryk\BookBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReflectionControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/reflection');
    }

    public function testNew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/reflection/new');
    }

    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'reflection/create');
    }

}
