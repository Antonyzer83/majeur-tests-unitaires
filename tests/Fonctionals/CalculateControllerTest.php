<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculateControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'calculatrice');
        $this->assertPageTitleSame('Hello CalculateController!');
        $this->assertCount(16, $crawler->filter('div.touch'));
    }
}
