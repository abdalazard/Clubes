<?php

namespace Tests\Unit;

use App\Models\Selecao;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_details_selectionTeam()
    {
        $selecao = Selecao::where("nome_selecao", "Brasil");
        assertEquals(1, $selecao->id);
        
    }
}
