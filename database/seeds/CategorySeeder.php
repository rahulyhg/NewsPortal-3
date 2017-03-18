<?php

use Illuminate\Database\Seeder;
use App\Entities\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class)->create([
            'name' => 'Xã Hội'
        ]);
        factory(Category::class)->create([
            'name' => 'Thế Giới'
        ]);
        factory(Category::class)->create([
            'name' => 'Kinh Doanh'
        ]);
        factory(Category::class)->create([
            'name' => 'Văn Hoá'
        ]);
        factory(Category::class)->create([
            'name' => 'Thể Thao'
        ]);
        factory(Category::class)->create([
            'name' => 'Pháp Luật'
        ]);
        factory(Category::class)->create([
            'name' => 'Đời Sống'
        ]);
        factory(Category::class)->create([
            'name' => 'Khoa Học'
        ]);
        factory(Category::class)->create([
            'name' => 'Vi Tính'
        ]);
    }
}
