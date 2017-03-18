<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Entities\NewsType;

class NewsTypeTest extends TestCase
{
    use DatabaseMigrations;

    public function test_news_type_can_be_create()
    {
        $name = 'neptune oil';
        $newsType = factory(NewsType::class)->create([
            'name' => $name,
            'slug' => str_slug($name),
        ]);

        $this->assertDatabaseHas('news_types', [
            'id' => '1',
            'name' => $name,
            'slug' => str_slug($name),
            'category_id' => $newsType->category->id
        ]);
    }
}
