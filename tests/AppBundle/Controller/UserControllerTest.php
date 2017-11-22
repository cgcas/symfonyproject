<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());


    }

    public function testCreateNewUserStatus()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '//newUser');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testCreateNewUser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/newUser');

        $buttonCrawlerNode = $crawler->selectButton('Enviar');

        $form = $buttonCrawlerNode->form(array(
            'usuario'              => 'Luis',
            'descripcion'  => 'Doctor Luis',
        ));

        $client->submit($form);

        $this->assertContains(
            'Se guardo correctamente',
            $client->getResponse()->getContent()
        );
    }

}
