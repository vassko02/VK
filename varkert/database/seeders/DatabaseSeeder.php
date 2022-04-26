<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\sizes;
use App\Models\items;
use App\Models\categories;
use App\Models\positions;
use App\Models\tables;
use App\Models\discounts;
use App\Models\itemorder;
use App\Models\orders;
use App\Models\reservations;
use App\Models\sittings;
use App\Models\workers;


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
        items::truncate();
        tables::truncate();
        workers::truncate();
        itemorder::truncate();
        orders::truncate();
        reservations::truncate();
        sittings::truncate();
        discounts::truncate();
        DB::statement('SET Foreign_KEY_CHECKS=1');
        $categories = [
            (object)['name' => 'kávé'],
            (object)['name' => 'limonádé'],
            (object)['name' => 'shot'],
            (object)['name' => 'koktél'],
            (object)['name' => 'reggeli'],
            (object)['name' => 'konyha'],
            (object)['name' => 'ebéd'],
            (object)['name' => 'bor'],
            (object)['name' => 'pálinka'],
            (object)['name' => 'sör'],
            (object)['name' => 'long drink'],
            (object)['name' => 'ital'],
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
        $tables = [
            (object)['name' => '10'],
            (object)['name' => '11'],
            (object)['name' => '12'],
            (object)['name' => '13'],
            (object)['name' => '14'],
            (object)['name' => '15'],
            (object)['name' => '16'],
            (object)['name' => '17'],
            (object)['name' => '18'],
            (object)['name' => '19'],
            (object)['name' => '20'],
            (object)['name' => '21'],
            (object)['name' => '22'],
            (object)['name' => '23'],
            (object)['name' => '24'],
            (object)['name' => '25'],
            (object)['name' => 'Trón'],
            (object)['name' => 'T1'],
            (object)['name' => 'T2'],
            (object)['name' => 'T3'],
            (object)['name' => 'T4'],
            (object)['name' => 'T5'],
            (object)['name' => 'T6'],
            (object)['name' => 'T7'],
            (object)['name' => 'T8'],
            (object)['name' => 'T9'],
            (object)['name' => 'T10'],
            (object)['name' => 'T11'],
            (object)['name' => 'T12'],
            (object)['name' => 'T13'],
            (object)['name' => 'T14'],
            (object)['name' => 'T15'],
        ];
        $items = [
            ['name' => 'Olasz Cappuccino', 'price' => '450', 'category' => '1', 'size' => '1', 'imgUrl' => '/assets/cappuccino.jpg'],
            ['name' => 'Cafee Latte', 'price' => '500', 'category' => '1', 'size' => '1', 'imgUrl' => '/assets/latte.jpg'],
            ['name' => 'Espresso', 'price' => '410', 'category' => '1', 'size' => '1', 'imgUrl' => '/assets/espresso.jpg'],
            ['name' => 'Cafee lungo', 'price' => '470', 'category' => '1', 'size' => '1', 'imgUrl' => '/assets/hosszukave.jpg'],
            ['name' => 'Melange', 'price' => '520', 'category' => '1', 'size' => '1', 'imgUrl' => '/assets/melange.jpg']
        ];
        $workers = [
            ['name' => 'Kettinger Éva', 'position' => '1'],
            ['name' => 'Molnár Tamás', 'position' => '1'],
            ['name' => 'Horváth Bence', 'position' => '4'],
            ['name' => 'Horváth Anna', 'position' => '3'],
            ['name' => 'Paulik Barbara', 'position' => '3'],
            ['name' => 'Velikán-Gazdag Edit', 'position' => '3'],
            ['name' => 'Paulik Melinda', 'position' => '2'],
            ['name' => 'Gazdag Lázár', 'position' => '2'],
            ['name' => 'Bondár Renáta', 'position' => '2'],
            ['name' => 'Papp Magdolna Réka', 'position' => '2'],
            ['name' => 'Mészáros Fruzsina', 'position' => '2'],
            ['name' => 'Kobl Katalin', 'position' => '2'],
            ['name' => 'Adu István', 'position' => '2'],
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
        foreach ($tables as $key => $value) {
            tables::create([
                key($value) => $value->name
            ]);
        }
        foreach ($items as $item) {
            items::create($item);
        }
        foreach ($workers as $worker) {
            workers::create($worker);
        }
    }
}
