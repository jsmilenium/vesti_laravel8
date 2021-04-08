<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Produto;

class ProdutoControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->getJson('/api/produtos');

        $response->assertStatus(200);
    }

    public function testShow()
    {
        $response = $this->getJson('/api/produtos');

        $response->assertStatus(200);
    }
    
    public function testUpdate()
    {
        $random = rand(2,50);

        $response = $this->postJson('/api/produtos/1', [
                        'codigo' => "'$random'",
                        'nome' => "'teste$random'",
                        'composicao' => 'teste',
                        'tamanho' => 'teste',
                        'quantidade' => 'teste'
                        ]);

        $response->assertStatus(200);
    }

    public function testStore()
    {
        $random = rand(2,50);

        $response = $this->postJson('/api/produtos', [
                        'codigo' => "'$random'",
                        'nome' => "'teste$random'",
                        'composicao' => 'teste',
                        'tamanho' => 'teste',
                        'quantidade' => 'teste'
                        ]);

        $response->assertStatus(201);
    }

    public function testDelete()
    {
        $response = $this->deleteJson('/api/produtos/1');

        $response->assertStatus(200);
    }

}
