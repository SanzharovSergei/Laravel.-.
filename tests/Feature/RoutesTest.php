<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    public function testRootRoute()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testAboutRoute()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }

    public function testLoginRoute()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function testRegisterRoute()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function testPasswordResetRoute()
    {
        $response = $this->get('/password/reset');
        $response->assertStatus(200);
    }

    public function testArticlesRoute()
    {
        $response = $this->get('/articles');
        $response->assertStatus(200);
    }

    public function testArticlesCreateRoute()
    {
        $response = $this->get('/articles/create');
        $response->assertStatus(200);
    }

    public function testArticleViewRoute()
    {
        $response = $this->get('/articles/1');
        $response->assertStatus(200);
    }

    public function testArticleEditRoute()
    {
        $response = $this->get('/articles/1/edit');
        $response->assertStatus(200);
    }

    public function testFormRoute()
    {
        $response = $this->get('/forms');
        $response->assertStatus(200);
    }

    public function testFormViewRoute()
    {
        $response = $this->get('/forms/1');
        $response->assertStatus(200);
    }

    public function testFormCreateRoute()
    {
        $response = $this->get('/forms/create');
        $response->assertStatus(200);
    }

    public function testRequestFormRoute()
    {
        $response = $this->get('/request_form');
        $response->assertStatus(200);
    }

    public function testRequestFormViewRoute()
    {
        $response = $this->get('/request_form/1');
        $response->assertStatus(200);
    }

    public function testRequestFormCreateRoute()
    {
        $response = $this->get('/request_form/create');
        $response->assertStatus(200);
    }

}
