<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Entities\Category;

class CategoryControllerTest extends TestCase
{    
    public function testIndex()
    {
        $categories = factory(Category::class)->create();
        $this->get('/admin/category')->assertSee('Category');
    }
}
