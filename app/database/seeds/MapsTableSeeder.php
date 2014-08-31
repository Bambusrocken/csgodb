<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Cdb\Match\Map;
use Faker\Factory as Faker;

class MapsTableSeeder extends Seeder
{

    public function run()
    {
        $maps = [];

        Map::truncate();

        $maps[] = [
            'name' => 'Dust',
            'version' => 'de_dust_se',
        ];

        $maps[] = [
            'name' => 'Dust2',
            'version' => 'de_dust2_se',
        ];

        $maps[] = [
            'name' => 'Inferno',
            'version' => 'de_inferno_se',
        ];

        $maps[] = [
            'name' => 'Nuke',
            'version' => 'de_nuke_se',
        ];

        $maps[] = [
            'name' => 'Train',
            'version' => 'de_train_se',
        ];

        $maps[] = [
            'name' => 'Mirage',
            'version' => 'de_mirage_se',
        ];

        $maps[] = [
            'name' => 'Cache',
            'version' => 'de_cache_se',
        ];

        $maps[] = [
            'name' => 'Cobble',
            'version' => 'de_cobble_se',
        ];

        $maps[] = [
            'name' => 'Overpass',
            'version' => 'de_overpass_se',
        ];

        foreach ($maps as $map) {
            $this->createMap($map);
        }
    }

    private function createMap($map)
    {
        $map = array_merge($map, ['slug' => Str::slug($map['name'])]);
        Map::create($map);
    }

}
