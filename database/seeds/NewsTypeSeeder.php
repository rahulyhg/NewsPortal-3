<?php
use Illuminate\Database\Seeder;

class NewsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_type')->insert([
            [
                'category_id' => '1',
                'name' => 'Giáo Dục',
                'slug' => 'Giao-Duc'
            ],
            [
                'category_id' => '1',
                'name' => 'Nhịp Điệu Trẻ',
                'slug' => 'Nhip-Dieu-Tre'
            ],
            [
                'category_id' => '1',
                'name' => 'Du Lịch',
                'slug' => 'Du-Lich'
            ],
            [
                'category_id' => '1',
                'name' => 'Du Học',
                'slug' => 'Du-Hoc'
            ],
            [
                'category_id' => '2',
                'name' => 'Cuộc Sống Đó Đây',
                'slug' => 'Cuoc-Song-Do-Day'
            ],
            [
                'category_id' => '2',
                'name' => 'Ảnh',
                'slug' => 'Anh'
            ],
            [
                'category_id' => '2',
                'name' => 'Người Việt 5 Châu',
                'slug' => 'Nguoi-Viet-5-Chau'
            ],
            [
                'category_id' => '2',
                'name' => 'Phân Tích',
                'slug' => 'Phan-Tich'
            ],
            [
                'category_id' => '3',
                'name' => 'Chứng Khoán',
                'slug' => 'Chung-Khoan'
            ],
            [
                'category_id' => '3',
                'name' => 'Bất Động Sản',
                'slug' => 'Bat-Dong-San'
            ],
            [
                'category_id' => '3',
                'name' => 'Doanh Nhân',
                'slug' => 'Doanh-Nhan'
            ],
            [
                'category_id' => '3',
                'name' => 'Quốc Tế',
                'slug' => 'Quoc-Te'
            ],
            [
                'category_id' => '3',
                'name' => 'Mua Sắm',
                'slug' => 'Mua-Sam'
            ],
            [
                'category_id' => '3',
                'name' => 'Doanh Nghiệp Viết',
                'slug' => 'Doanh-Nghiep-Viet'
            ],
            [
                'category_id' => '4',
                'name' => 'Hoa Hậu',
                'slug' => 'Hoa-Hau'
            ],
            [
                'category_id' => '4',
                'name' => 'Nghệ Sỹ',
                'slug' => 'Nghe-Sy'
            ],
            [
                'category_id' => '4',
                'name' => 'Âm Nhạc',
                'slug' => 'Am-Nhac'
            ],
            [
                'category_id' => '4',
                'name' => 'Thời Trang',
                'slug' => 'Thoi-Trang'
            ],
            [
                'category_id' => '4',
                'name' => 'Điện Ảnh',
                'slug' => 'Dien-Anh'
            ],
            [
                'category_id' => '4',
                'name' => 'Mỹ Thuật',
                'slug' => 'My-Thuat'
            ],
            [
                'category_id' => '5',
                'name' => 'Bóng Đá',
                'slug' => 'Bong-Da'
            ],
            [
                'category_id' => '5',
                'name' => 'Tennis',
                'slug' => 'Tennis'
            ],
            [
                'category_id' => '5',
                'name' => 'Chân Dung',
                'slug' => 'Chan-Dung'
            ],
            [
                'category_id' => '5',
                'name' => 'Ảnh',
                'slug' => 'Anh-TT'
            ],
            [
                'category_id' => '6',
                'name' => 'Hình Sự',
                'slug' => 'Hinh-Su'
            ]
        ]);
    }
}
