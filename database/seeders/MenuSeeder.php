<?php

namespace Database\Seeders;

use Botble\Base\Models\MetaBox as MetaBoxModel;
use Botble\Base\Supports\BaseSeeder;
use Botble\Blog\Models\Post;
use Botble\Ecommerce\Models\Product;
use Botble\Ecommerce\Models\ProductCategory;
use Botble\Language\Models\LanguageMeta;
use Botble\Marketplace\Models\Store;
use Botble\Menu\Models\Menu as MenuModel;
use Botble\Menu\Models\MenuLocation;
use Botble\Menu\Models\MenuNode;
use Botble\Page\Models\Page;
use Illuminate\Support\Arr;
use Menu;

class MenuSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'en_US' => [
                [
                    'name' => 'Main menu',
                    'slug' => 'main-menu',
                    'location' => 'main-menu',
                    'items' => [
                        [
                            'title' => 'Home',
                            'url' => '/',
                            'icon_font' => 'fi-rs-home',
                            'children' => [
                                [
                                    'title' => 'Home 1',
                                    'reference_id' => 1,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Home 2',
                                    'reference_id' => 2,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Home 3',
                                    'reference_id' => 3,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Home 4',
                                    'reference_id' => 4,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Home 5',
                                    'reference_id' => 16,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Home 6',
                                    'reference_id' => 17,
                                    'reference_type' => Page::class,
                                ],
                            ],
                        ],
                        [
                            'title' => 'Shop',
                            'url' => '/products',
                            'children' => [
                                [
                                    'title' => 'Shop Grid - Full Width',
                                    'url' => '/products',
                                ],
                                [
                                    'title' => 'Shop Grid - Right Sidebar',
                                    'url' => '/products?layout=product-right-sidebar',
                                ],
                                [
                                    'title' => 'Shop Grid - Left Sidebar',
                                    'url' => '/products?layout=product-left-sidebar',
                                ],
                                [
                                    'title' => 'Products Of Category',
                                    'reference_id' => 1,
                                    'reference_type' => ProductCategory::class,
                                ],
                            ],
                        ],
                        [
                            'title' => 'Stores',
                            'url' => '/stores',
                            'children' => [
                                [
                                    'title' => 'Stores - Grid',
                                    'url' => '/stores',
                                ],
                                [
                                    'title' => 'Stores - List',
                                    'url' => '/stores?layout=stores-list',
                                ],
                                [
                                    'title' => 'Store - Detail',
                                    'url' => str_replace(url(''), '', Store::find(1)->url),
                                ],
                            ],
                        ],
                        [
                            'title' => 'Product',
                            'url' => str_replace(url(''), '', Product::find(1)->url),
                            'children' => [
                                [
                                    'title' => 'Product Right Sidebar',
                                    'url' => str_replace(url(''), '', Product::find(1)->url),
                                ],
                                [
                                    'title' => 'Product Left Sidebar',
                                    'url' => str_replace(url(''), '', Product::find(2)->url),
                                ],
                                [
                                    'title' => 'Product Full Width',
                                    'url' => str_replace(url(''), '', Product::find(3)->url),
                                ],
                            ],
                        ],
                        [
                            'title' => 'Blog',
                            'reference_id' => 5,
                            'reference_type' => Page::class,
                            'children' => [
                                [
                                    'title' => 'Blog Grid',
                                    'reference_id' => 5,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Blog List',
                                    'reference_id' => 13,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Blog Big',
                                    'reference_id' => 14,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Blog Wide',
                                    'reference_id' => 15,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Single Post',
                                    'url' => str_replace(url(''), '', Post::find(1)->url),
                                    'children' => [
                                        [
                                            'title' => 'Single Post Right Sidebar',
                                            'url' => str_replace(url(''), '', Post::find(1)->url),
                                        ],
                                        [
                                            'title' => 'Single Post Left Sidebar',
                                            'url' => str_replace(url(''), '', Post::find(2)->url),
                                        ],
                                        [
                                            'title' => 'Single Post Full Width',
                                            'url' => str_replace(url(''), '', Post::find(3)->url),
                                        ],
                                        [
                                            'title' => 'Single Post with Product Listing',
                                            'url' => str_replace(url(''), '', Post::find(4)->url),
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            'title' => 'FAQ',
                            'reference_id' => 18,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Contact',
                            'reference_id' => 6,
                            'reference_type' => Page::class,
                        ],
                    ],
                ],
                [
                    'name' => 'Header menu',
                    'slug' => 'header-menu',
                    'location' => 'header-navigation',
                    'items' => [
                        [
                            'title' => 'About Us',
                            'reference_id' => 7,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Order Tracking',
                            'url' => '/orders/tracking',
                        ],
                    ],
                ],
                [
                    'name' => 'Product categories',
                    'slug' => 'product-categories',
                    'items' => [
                        [
                            'title' => 'Men',
                            'reference_id' => 1,
                            'reference_type' => ProductCategory::class,
                        ],
                        [
                            'title' => 'Women',
                            'reference_id' => 2,
                            'reference_type' => ProductCategory::class,
                        ],
                        [
                            'title' => 'Accessories',
                            'reference_id' => 3,
                            'reference_type' => ProductCategory::class,
                        ],
                        [
                            'title' => 'Shoes',
                            'reference_id' => 4,
                            'reference_type' => ProductCategory::class,
                        ],
                        [
                            'title' => 'Denim',
                            'reference_id' => 5,
                            'reference_type' => ProductCategory::class,
                        ],
                        [
                            'title' => 'Dress',
                            'reference_id' => 6,
                            'reference_type' => ProductCategory::class,
                        ],
                    ],
                ],
                [
                    'name' => 'Information',
                    'slug' => 'information',
                    'items' => [
                        [
                            'title' => 'Contact Us',
                            'reference_id' => 6,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'About Us',
                            'reference_id' => 7,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Cookie Policy',
                            'reference_id' => 8,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Terms & Conditions',
                            'reference_id' => 9,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Returns & Exchanges',
                            'reference_id' => 10,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Shipping & Delivery',
                            'reference_id' => 11,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Privacy Policy',
                            'reference_id' => 12,
                            'reference_type' => Page::class,
                        ],
                    ],
                ],
                [
                    'name' => 'Company',
                    'slug' => 'company',
                    'items' => [
                        [
                            'title' => 'About us',
                            'reference_id' => 7,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Affiliate',
                            'url' => '#',
                        ],
                        [
                            'title' => 'Career',
                            'url' => '#',
                        ],
                        [
                            'title' => 'Contact us',
                            'reference_id' => 6,
                            'reference_type' => Page::class,
                        ],
                    ],
                ],
            ],
            'vi' => [
                [
                    'name' => 'Menu ch??nh',
                    'slug' => 'menu-chinh',
                    'location' => 'main-menu',
                    'items' => [
                        [
                            'title' => 'Trang ch???',
                            'url' => '/',
                            'children' => [
                                [
                                    'title' => 'Trang ch??? 1',
                                    'reference_id' => 1,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Trang ch??? 2',
                                    'reference_id' => 2,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Trang ch??? 3',
                                    'reference_id' => 3,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Trang ch??? 4',
                                    'reference_id' => 4,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Trang ch??? 5',
                                    'reference_id' => 16,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Trang ch??? 6',
                                    'reference_id' => 17,
                                    'reference_type' => Page::class,
                                ],
                            ],
                        ],
                        [
                            'title' => 'B??n h??ng',
                            'url' => '/products',
                            'children' => [
                                [
                                    'title' => 'T???t c??? s???n ph???m',
                                    'url' => '/products',
                                ],
                                [
                                    'title' => 'Danh m???c s???n ph???m',
                                    'reference_id' => 1,
                                    'reference_type' => ProductCategory::class,
                                ],
                            ],
                        ],
                        [
                            'title' => 'C???a h??ng',
                            'url' => '/stores',
                            'children' => [
                                [
                                    'title' => 'C???a h??ng - Grid',
                                    'url' => '/stores',
                                ],
                                [
                                    'title' => 'C???a h??ng - List',
                                    'url' => '/stores?layout=stores-list',
                                ],
                                [
                                    'title' => 'C???a h??ng - Detail',
                                    'url' => str_replace(url(''), '', Store::find(1)->url),
                                ],
                            ],
                        ],
                        [
                            'title' => 'S???n ph???m',
                            'url' => '#',
                            'children' => [
                                [
                                    'title' => 'S???n ph???m Sidebar ph???i',
                                    'url' => str_replace(url(''), '', Product::find(1)->url),
                                ],
                                [
                                    'title' => 'S???n ph???m Sidebar tr??i',
                                    'url' => str_replace(url(''), '', Product::find(2)->url),
                                ],
                                [
                                    'title' => 'S???n ph???m full width',
                                    'url' => str_replace(url(''), '', Product::find(3)->url),
                                ],
                            ],
                        ],
                        [
                            'title' => 'Tin t???c',
                            'reference_id' => 5,
                            'reference_type' => Page::class,
                            'children' => [
                                [
                                    'title' => 'Tin t???c Sidebar ph???i',
                                    'reference_id' => 5,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'Tin t???c Sidebar tr??i',
                                    'reference_id' => 13,
                                    'reference_type' => Page::class,
                                ],
                                [
                                    'title' => 'B??i vi???t Sidebar ph???i',
                                    'url' => str_replace(url(''), '', Post::find(1)->url),
                                ],
                                [
                                    'title' => 'B??i vi???t Sidebar tr??i',
                                    'url' => str_replace(url(''), '', Post::find(2)->url),
                                ],
                                [
                                    'title' => 'B??i vi???t Full Width',
                                    'url' => str_replace(url(''), '', Post::find(3)->url),
                                ],
                                [
                                    'title' => 'B??i vi???t k??m s???n ph???m',
                                    'url' => str_replace(url(''), '', Post::find(4)->url),
                                ],
                            ],
                        ],
                        [
                            'title' => 'FAQ',
                            'reference_id' => 18,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Li??n h???',
                            'reference_id' => 6,
                            'reference_type' => Page::class,
                        ],
                    ],
                ],
                [
                    'name' => 'Menu tr??n c??ng',
                    'slug' => 'menu-tren-cung',
                    'location' => 'header-navigation',
                    'items' => [
                        [
                            'title' => 'V??? Ch??ng T??i',
                            'reference_id' => 8,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Theo D??i ????n H??ng',
                            'url' => '/orders/tracking',
                        ],
                    ],
                ],
                [
                    'name' => 'Product categories',
                    'slug' => 'danh-muc-san-pham',
                    'items' => [
                        [
                            'title' => 'S???a',
                            'reference_id' => 1,
                            'reference_type' => ProductCategory::class,
                        ],
                        [
                            'title' => 'Qu???n ??o v?? l??m ?????p',
                            'reference_id' => 2,
                            'reference_type' => ProductCategory::class,
                        ],
                        [
                            'title' => '????? ch??i th?? c??ng',
                            'reference_id' => 3,
                            'reference_type' => ProductCategory::class,
                        ],
                        [
                            'title' => 'Nguy??n li???u l??m b??nh',
                            'reference_id' => 4,
                            'reference_type' => ProductCategory::class,
                        ],
                        [
                            'title' => 'Tr??i c??y t????i',
                            'reference_id' => 5,
                            'reference_type' => ProductCategory::class,
                        ],
                        [
                            'title' => 'R?????u & ????? u???ng',
                            'reference_id' => 6,
                            'reference_type' => ProductCategory::class,
                        ],
                    ],
                ],
                [
                    'name' => 'Information',
                    'slug' => 'thong-tin',
                    'items' => [
                        [
                            'title' => 'Li??n h???',
                            'reference_id' => 6,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'V??? ch??ng t??i',
                            'reference_id' => 8,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => '??i???u kho???n & quy ?????nh',
                            'reference_id' => 9,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Ch??nh s??ch ?????i tr???',
                            'reference_id' => 10,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Ch??nh s??ch v???n chuy???n',
                            'reference_id' => 11,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Ch??nh s??ch b???o m???t',
                            'reference_id' => 12,
                            'reference_type' => Page::class,
                        ],
                    ],
                ],
                [
                    'name' => 'C??ng ty',
                    'slug' => 'cong-ty',
                    'items' => [
                        [
                            'title' => 'V??? ch??ng t??i',
                            'reference_id' => 7,
                            'reference_type' => Page::class,
                        ],
                        [
                            'title' => 'Ti???p th??? li??n k???t',
                            'url' => '#',
                        ],
                        [
                            'title' => 'Tuy???n d???ng',
                            'url' => '#',
                        ],
                        [
                            'title' => 'Li??n h???',
                            'reference_id' => 6,
                            'reference_type' => Page::class,
                        ],
                    ],
                ],
            ],
        ];

        MenuModel::truncate();
        MenuLocation::truncate();
        MenuNode::truncate();
        MetaBoxModel::where('reference_type', MenuNode::class)->delete();
        LanguageMeta::where('reference_type', MenuModel::class)->delete();
        LanguageMeta::where('reference_type', MenuLocation::class)->delete();

        foreach ($data as $locale => $menus) {
            foreach ($menus as $index => $item) {
                $menu = MenuModel::create(Arr::except($item, ['items', 'location']));

                if (isset($item['location'])) {
                    $menuLocation = MenuLocation::create([
                        'menu_id' => $menu->id,
                        'location' => $item['location'],
                    ]);

                    $originValue = LanguageMeta::where([
                        'reference_id' => $locale == 'en_US' ? $menu->id : $menu->id + 3,
                        'reference_type' => MenuLocation::class,
                    ])->value('lang_meta_origin');

                    LanguageMeta::saveMetaData($menuLocation, $locale, $originValue);
                }

                foreach ($item['items'] as $menuNode) {
                    $this->createMenuNode($index, $menuNode, $locale, $menu->id);
                }

                $originValue = null;

                if ($locale !== 'en_US') {
                    $originValue = LanguageMeta::where([
                        'reference_id' => $index + 1,
                        'reference_type' => MenuModel::class,
                    ])->value('lang_meta_origin');
                }

                LanguageMeta::saveMetaData($menu, $locale, $originValue);
            }
        }

        Menu::clearCacheMenuItems();
    }

    /**
     * @param int $index
     * @param array $menuNode
     * @param string $locale
     * @param int $menuId
     * @param int $parentId
     */
    protected function createMenuNode(int $index, array $menuNode, string $locale, int $menuId, int $parentId = 0): void
    {
        $menuNode['menu_id'] = $menuId;
        $menuNode['parent_id'] = $parentId;

        if (isset($menuNode['url'])) {
            $menuNode['url'] = str_replace(url(''), '', $menuNode['url']);
        }

        if (Arr::has($menuNode, 'children')) {
            $children = $menuNode['children'];
            $menuNode['has_child'] = true;

            unset($menuNode['children']);
        } else {
            $children = [];
            $menuNode['has_child'] = false;
        }

        $createdNode = MenuNode::create($menuNode);

        if ($children) {
            foreach ($children as $child) {
                $this->createMenuNode($index, $child, $locale, $menuId, $createdNode->id);
            }
        }
    }
}
