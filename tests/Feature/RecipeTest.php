<?php

namespace Tests\Feature;

use Tests\TestCase;

class RecipeTest extends TestCase
{
    public function test_main_page_works()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_recipe_can_be_sent()
    {
        $response = $this->post('/recipes', [
            'title' => 'Tacos',
            'ingredients' => 'Carne, Tortilla'
        ]);

        $response->assertStatus(200)
            ->assertJson(['title' => 'Tacos']);
    }
}
