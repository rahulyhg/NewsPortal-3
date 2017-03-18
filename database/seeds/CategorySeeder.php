<?php

use App\Entities\Category;
use Illuminate\Database\Seeder;

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
            'name' => 'Xã Hội',
            'slug' => 'Xa-Hoi'
        ]);
        factory(Category::class)->create([
            'name' => 'Thế Giới',
            'slug' => 'The-Gioi'
        ]);
        factory(Category::class)->create([
            'name' => 'Kinh Doanh',
            'slug' => 'Kinh-Doanh'
        ]);
        factory(Category::class)->create([
            'name' => 'Văn Hoá',
            'slug' => 'Van-Hoa'
        ]);
        factory(Category::class)->create([
            'name' => 'Thể Thao',
            'slug' => 'The-Thao'
        ]);
        factory(Category::class)->create([
            'name' => 'Pháp Luật',
            'slug' => 'Phap-Luat'
        ]);
        factory(Category::class)->create([
            'name' => 'Đời Sống',
            'slug' => 'Doi-Song'
        ]);
        factory(Category::class)->create([
            'name' => 'Khoa Học',
            'slug' => 'Khoa-Hoc'
        ]);
        factory(Category::class)->create([
            'name' => 'Vi Tính',
            'slug' => 'Vi-Tinh'
        ]);
    }
}
