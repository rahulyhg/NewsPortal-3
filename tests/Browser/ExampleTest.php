<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Pages\AdminPage;
use Tests\Browser\Pages\CategoryPage;
use App\Entities\Category;

class ExampleTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function test_visit_admin_see_home()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new AdminPage)
                    ->assertSee('Administrator')
                    ->assertSee('Home');
        });
    }

    public function test_visit_admin_click_category()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new AdminPage)
                    ->clickLink('Category')
                    ->assertSee('Category');
        });
    }

    public function test_visit_category_click_edit_and_edit_category()
    {
        $categories = factory(Category::class, 10)->create();
        $this->browse(function (Browser $browser) use ($categories) {
            $browser->visit(new CategoryPage)
                    ->editCategory('Test')
                    ->assertInputValue('@category-name-input', 'Test')
                    ->assertSee('Successfully edited.');
        });
    }

    public function test_visit_category_and_search()
    {
        $categories = factory(Category::class, 5)->create();
        $this->browse(function (Browser $browser) use ($categories) {
            $browser->visit(new CategoryPage)
                    ->type('@search-input', $categories[0]->name)
                    ->assertSee($categories[0]->id)
                    ->assertSee($categories[0]->name)
                    ->assertSee($categories[0]->slug);
        });
    }

    public function test_visit_category_and_create_a_category()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/category/create')
                    ->type('@category-name-input', 'Test')
                    ->press('Create')
                    ->assertSee('Successfully added.');
        });
    }

    public function test_visit_category_and_delete_a_category()
    {
        $categories = factory(Category::class, 2)->create();
        $this->browse(function (Browser $browser) use ($categories) {
            $browser->visit(new CategoryPage)
                    ->clickLink('Delete')
                    ->assertSee('Successfully deleted "'.$categories[0]->name.'".')
                    ->assertDontSeeIn('table', $categories[0]->name);
        });
    }
}
