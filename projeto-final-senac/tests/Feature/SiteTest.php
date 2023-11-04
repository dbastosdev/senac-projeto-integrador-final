<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class SiteTest extends TestCase
{
    /**
     * Test if correct view are render at '/' path.
     */
    public function test_home_page_render(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertViewIs('index');
    }

    /**
     * Test if 404 error is return on site.
     */
    public function test_404_page_error(): void
    {
        $response = $this->get('/noExistentPath');
        $response->assertNotFound();
        $response->assertStatus(404);
        $response->assertSee('Página não encontrada');
    }

    /**
     * Test if 503 error is return if site is on maintenance.
     * If this test broke, you need remove the application of maintenance with php artisan up command.
     */
    public function test_503_page_error(): void
    {
        // setup application down
        $this->artisan('down'); 

        // make assertion
        $response = $this->get('/'); 
        $response->assertStatus(503); 
        $response->assertSee('Sistema em manutenção'); 

        // setup aplication up
        $this->artisan('up'); 
    }    
}
