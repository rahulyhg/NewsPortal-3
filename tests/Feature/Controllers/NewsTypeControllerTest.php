<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Entities\NewsType;

class NewsTypeControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function testIndex()
    {
        $this->get('/admin/news-type')
             ->assertStatus(200)
             ->assertSee('News Type')
             ->assertViewHas('newsTypes');
    }

    public function testCreate()
    {
        $this->get('/admin/news-type/create')
             ->assertStatus(200)
             ->assertSee('Create');
    }
}
