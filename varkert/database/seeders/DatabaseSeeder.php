<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\sizes;
use App\Models\items;
use App\Models\categories;
use App\Models\positions;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET Foreign_KEY_CHECKS=0');
        sizes::truncate();
        items::truncate();
        categories::truncate();
        positions::truncate();
        DB::statement('SET Foreign_KEY_CHECKS=1');
        $categories = [
            (object)['name' => 'kávé'],
            (object)['name' => 'limonádé'],
            (object)['name' => 'shot'],
            (object)['name' => 'koktél'],
            (object)['name' => 'reggeli'],
            (object)['name' => 'szendvics'],
            (object)['name' => 'ebéd'],
            (object)['name' => 'bor'],
            (object)['name' => 'pálinka'],
            (object)['name' => 'sör'],
        ];
        $positions = [
            (object)['name' => 'főnök'],
            (object)['name' => 'pultos/pincér'],
            (object)['name' => 'műszakvezető'],
            (object)['name' => 'beszállító'],
            (object)['name' => 'konyhás'],
            (object)['name' => 'kisegítő'],

        ];
        $sizes = [
            (object)['name' => 'Nincs méretezve'],
            (object)['name' => '0.3 l kicsi'],
            (object)['name' => '0.5 l nagy'],
            (object)['name' => '0.2 cl kicsi'],
            (object)['name' => '0.4 cl nagy'],
        ];
        foreach ($sizes as $key => $value) {
            sizes::create([
                key($value) => $value->name
            ]);
        }
        foreach ($categories as $key => $value) {
            categories::create([
                key($value) => $value->name
            ]);
        }
        foreach ($positions as $key => $value) {
            positions::create([
                key($value) => $value->name
            ]);
        }
        $items = [
            ['name' => 'Cappuccino', 'price' => '450', 'category' => '1', 'size' => '1','imgUrl'=>'/assets/cappuccino.jpg'],
            ['name' => 'Latte', 'price' => '500', 'category' => '1', 'size' => '1','imgUrl'=>'/assets/latte.jpg'],
            ['name' => 'Espresso', 'price' => '410', 'category' => '1', 'size' => '1','imgUrl'=>'/assets/espresso.jpg']
        ];
        foreach($items as $item){
            items::create($item);
        }
    }
}
