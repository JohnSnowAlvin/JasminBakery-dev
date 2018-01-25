<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TestProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('products')->get()->count() == 0){

            DB::table('products')->insert([
                    [
                        'name'=>'Cinnamon Raisin Bread',
                        'category'=>'Bread',
                        'price'=>'100.20',
                        'description'=>'Raisin bread is a type of bread made with raisins and flavored with cinnamon. It is "usually a white flour or egg dough bread". Aside from white flour, raisin bread is also made with other flours, such as all-purpose flour',
                        'tag'=>'Hot',
                        'rating'=>'4',
                        'status'=>'12'
                    ],
                    [
                        'name'=>'Bourbon Honey Cake',
                        'category'=>'Cake',
                        'price'=>'29',
                        'description'=>'Bourbon Honey cake is a classic Jewish holiday dessert; like it moist, spicy, and topped with toasted almonds. Mine has layers and layers of subtle flavor from honey, brown sugar, orange zest, coffee, and spices like cinnamon, cloves, allspice, and ginger.',
                        'tag'=>'Sale',
                        'rating'=>'3',
                        'status'=>'0'
                    ],
                    [
                        'name'=>'Pumpkin Yeast Bread',
                        'category'=>'Bread',
                        'price'=>'80',
                        'description'=>'Pumpkin Yeast bread is a type of moist quick bread made with pumpkin. The pumpkin can be cooked and softened before being used or simply baked with the bread (using canned pumpkin renders it a simpler dish to prepare).',
                        'tag'=>'Sale',
                        'rating'=>'3',
                        'status'=>'12'
                    ],
                    [
                        'name'=>'Walnut Bread',
                        'category'=>'Bread',
                        'price'=>'99',
                        'description'=>'Date and walnut loaf is a traditional cake eaten in Britain, made using dates and walnuts. It is often made with treacle or tea to give it a dark brown colour.',
                        'tag'=>'Sale',
                        'rating'=>'2',
                        'status'=>'1'
                    ]
            ]);
        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
