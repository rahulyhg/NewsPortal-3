<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Entities\Category;

class CategoryControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function testIndex()
    {
        $category = factory(Category::class)->create();
        $this->get('/admin/category')
             ->assertStatus(200)
             ->assertSee('Category')
             ->assertSee($category->name)
             ->assertViewHas('categories');
    }

    public function testCreate()
    {
        $this->get('/admin/category/create')
             ->assertStatus(200)
             ->assertSee('Create');
    }

    public function testEdit()
    {
        $category = factory(Category::class)->create();
        $url = '/admin/category/'.$category->id.'/edit';
        $this->get($url)
             ->assertStatus(200)
             ->assertSee('Edit')
             ->assertViewHas('category');
    }
}
