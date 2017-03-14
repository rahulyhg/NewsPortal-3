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
                    ->clickLink('Edit')
                    ->type('@categoryName', 'Test')
                    ->press('Edit')                
                    ->assertSee('Successfully edited.');
        });
    }
}
