<?php

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
        DB::table('category')->insert([
            [
                'name' => 'Xã Hội',
                'slug' => 'Xa-Hoi'
            ],
            [
                'name' => 'Thế Giới',
                'slug' => 'The-Gioi'
            ],
            [
                'name' => 'Kinh Doanh',
                'slug' => 'Kinh-Doanh'
            ],
            [
                'name' => 'Văn Hoá',
                'slug' => 'Van-Hoa'
            ],
            [
                'name' => 'Thể Thao',
                'slug' => 'The-Thao'
            ],
            [
                'name' => 'Pháp Luật',
                'slug' => 'Phap-Luat'
            ],
            [
                'name' => 'Đời Sống',
                'slug' => 'Doi-Song'
            ],
            [
                'name' => 'Khoa Học',
                'slug' => 'Khoa-Hoc'
            ],
            [
                'name' => 'Vi Tính',
                'slug' => 'Vi-Tinh'
            ]
        ]);
    }
}
