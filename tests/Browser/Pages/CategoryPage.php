<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class CategoryPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/admin/category';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@category-name-input' => 'input[name=name]',
        ];
    }

    public function editCategory(Browser $browser, $name)
    {
        $browser->clickLink('Edit')
            ->type('@category-name-input', $name)
            ->press('Edit');
    }
}
