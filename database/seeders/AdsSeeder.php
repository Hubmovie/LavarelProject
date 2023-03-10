<?php

namespace Database\Seeders;

use Botble\Ads\Models\Ads;
use Botble\Base\Supports\BaseSeeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use MetaBox;

class AdsSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->uploadFiles('promotion');

        Ads::truncate();

        $items = [
            [
                'name' => 'Everyday Fresh',
                'location' => 'not_set',
                'key' => 'IZ6WU8KUALYD',
                'subtitle' => "Everyday Fresh & \nClean with Our \nProducts",
                'button_text' => 'Shop now',
                'url' => '/products',
            ],
            [
                'name' => 'Make your Breakfast',
                'location' => 'not_set',
                'key' => 'ILSFJVYFGCPZ',
                'subtitle' => 'Make your Breakfast Healthy and Easy',
                'button_text' => 'Shop now',
                'url' => '/products',
            ],
            [
                'name' => 'The best Organic',
                'location' => 'not_set',
                'key' => 'ILSDKVYFGXPH',
                'subtitle' => 'The best Organic Products Online',
                'button_text' => 'Shop now',
                'url' => '/products',
            ],
            [
                'name' => 'Bring nature into your home',
                'location' => 'not_set',
                'key' => 'IZ6WU8KUALYG',
                'subtitle' => 'Bring nature into your home',
                'button_text' => 'Shop now',
                'url' => '/products',
            ],
            [
                'name' => 'Delivered to your home',
                'location' => 'banner-big',
                'key' => 'IZ6WU8KUALYH',
                'subtitle' => 'Delivered to your home',
                'button_text' => 'Shop now',
                'url' => '/products',
            ],
            [
                'name' => 'Save 17% on Oganic Juice',
                'location' => 'no_set',
                'key' => 'IZ6WU8KUALYI',
                'subtitle' => 'Save 17% <br />on Oganic <br />Juice',
                'button_text' => 'Shop now',
                'url' => '/products',
            ],
            [
                'name' => 'Everyday Fresh & Clean with Our Products',
                'location' => 'item-style-4',
                'key' => 'IZ6WU8KUALYJ',
                'subtitle' => 'Everyday Fresh & Clean with Our Products',
                'button_text' => 'Shop now',
                'url' => '/products',
            ],
            [
                'name' => 'The best Organic Products Online',
                'location' => 'item-style-5',
                'key' => 'IZ6WU8KUALYK',
                'subtitle' => 'The best Organic Products Online',
                'button_text' => 'Shop now',
                'url' => '/products',
            ],
            [
                'name' => 'Everyday Fresh with Our Products',
                'location' => 'item-style-2',
                'key' => 'IZ6WU8KUALYL',
                'subtitle' => "Everyday Fresh with\n Our Products",
                'button_text' => 'Go to supplier',
            ],
            [
                'name' => '100% guaranteed all Fresh items',
                'location' => 'item-style-2',
                'key' => 'IZ6WU8KUALYM',
                'subtitle' => "100% guaranteed all\n Fresh items",
                'button_text' => 'Go to supplier',
            ],
            [
                'name' => 'Special grocery sale off this month',
                'location' => 'item-style-2',
                'key' => 'IZ6WU8KUALYN',
                'subtitle' => "Special grocery sale\n off this month",
                'button_text' => 'Go to supplier',
            ],
            [
                'name' => 'Enjoy 15% OFF for all vegetable and fruit',
                'location' => 'item-style-2',
                'key' => 'IZ6WU8KUALYO',
                'subtitle' => "Enjoy 15% OFF for all\n vegetable and fruit",
                'button_text' => 'Go to supplier',
            ],
        ];

        foreach ($items as $index => $item) {
            $item['order'] = $index + 1;

            if (! isset($item['key'])) {
                $item['key'] = strtoupper(Str::random(12));
            }

            $item['expired_at'] = now()->addYears(5)->toDateString();
            $item['image'] = 'promotion/' . ($index + 1) . '.png';

            $ad = Ads::create(Arr::except($item, ['subtitle', 'button_text']));

            MetaBox::saveMetaBoxData($ad, 'button_text', $item['button_text']);
            MetaBox::saveMetaBoxData($ad, 'subtitle', $item['subtitle']);
        }

        DB::table('ads_translations')->truncate();

        $translations = [
            [
                'name' => 'T????i m???i ng??y',
                'subtitle' => "S???ch s??? h??ng ng??y v???i \nc??c s???n ph???m c???a \nch??ng t??i",
                'button_text' => 'Mua ngay',
                'url' => '/vi/products',
            ],
            [
                'name' => 'N???u b???a s??ng c???a b???n',
                'subtitle' => 'N???u b???a s??ng c???a b???n l??nh m???nh v?? d??? d??ng',
                'button_text' => 'Mua ngay',
                'url' => '/vi/products',
            ],
            [
                'name' => 'H???u c?? t???t nh???t',
                'subtitle' => 'C??c s???n ph???m h???u c?? t???t nh???t tr???c tuy???n',
                'button_text' => 'Mua ngay',
                'url' => '/vi/products',
            ],
            [
                'name' => 'Mang thi??n nhi??n v??o ng??i nh?? c???a b???n',
                'subtitle' => 'Mang thi??n nhi??n v??o ng??i nh?? c???a b???n',
                'button_text' => 'Mua ngay',
                'url' => '/vi/products',
            ],
            [
                'name' => 'Giao t???n nh??',
                'subtitle' => 'Giao t???n nh??',
                'button_text' => 'Mua ngay',
                'url' => '/vi/products',
            ],
            [
                'name' => 'Ti???t ki???m 17% khi mua n?????c ??p h???u c??',
                'subtitle' => 'Ti???t ki???m 17% <br /> khi mua N?????c ??p <br /> Oganic',
                'button_text' => 'Mua ngay',
                'url' => '/vi/products',
            ],
            [
                'name' => 'T????i v?? S???ch h??ng ng??y v???i c??c s???n ph???m c???a ch??ng t??i',
                'subtitle' => 'T????i v?? S???ch h??ng ng??y v???i c??c s???n ph???m c???a ch??ng t??i',
                'button_text' => 'Shop now',
                'url' => '/vi/products',
            ],
            [
                'name' => 'C??c s???n ph???m h???u c?? t???t nh???t tr???c tuy???n',
                'subtitle' => 'C??c s???n ph???m h???u c?? t???t nh???t tr???c tuy???n',
                'button_text' => 'Shop now',
                'url' => '/vi/products',
            ],
            [
                'name' => 'T????i m???i m???i ng??y v???i c??c s???n ph???m c???a ch??ng t??i',
                'subtitle' => "T????i m???i m???i ng??y v???i\n c??c s???n ph???m c???a ch??ng t??i",
                'button_text' => '??i ?????n nh?? cung c???p',
            ],
            [
                'name' => '100% ?????m b???o t???t c??? c??c m???t h??ng t????i',
                'subtitle' => "100% ?????m b???o t???t c???\n c??c m???t h??ng t????i",
                'button_text' => '??i ?????n nh?? cung c???p',
            ],
            [
                'name' => 'Gi???m gi?? h??ng t???p h??a ?????c bi???t trong th??ng n??y',
                'subtitle' => "Gi???m gi?? h??ng t???p h??a\n ?????c bi???t trong th??ng n??y",
                'button_text' => '??i ?????n nh?? cung c???p',
            ],
            [
                'name' => 'GI???M GI?? 15% cho t???t c??? rau v?? tr??i c??y',
                'subtitle' => "GI???M GI?? 15% cho t???t c???\n rau v?? tr??i c??y",
                'button_text' => '??i ?????n nh?? cung c???p',
            ],
        ];

        foreach ($translations as $index => $item) {
            $item['lang_code'] = 'vi';
            $item['ads_id'] = $index + 1;
            $item['image'] = 'promotion/' . ($index + 1) . '.png';
            $item['url'] = '/vi/products';

            DB::table('ads_translations')->insert(Arr::except($item, ['subtitle', 'button_text']));

            MetaBox::saveMetaBoxData(Ads::find($index + 1), 'vi_subtitle', $item['subtitle']);
            MetaBox::saveMetaBoxData(Ads::find($index + 1), 'vi_button_text', $item['button_text']);
        }
    }
}
