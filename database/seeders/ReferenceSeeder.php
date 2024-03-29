<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('reference')->insert([
            [
                'id' => 1,
                'title' => 'Food & Beverage',
                'category_code' => 'F',
            ], [
                'id' => 2,
                'title' => 'Pharmaceuticals',
                'category_code' => 'P',
            ], [
                'id' => 3,
                'title' => 'Government',
                'category_code' => 'G',
            ], [
                'id' => 4,
                'title' => 'Traditional Medicine & Suplement',
                'category_code' => 'T',
            ], [
                'id' => 13,
                'title' => 'Beauty, Cosmetics & Personal Care',
                'category_code' => 'B',
            ], [
                'id' => 14,
                'title' => 'Media RTU',
                'category_code' => 'M',
            ], [
                'id' => 15,
                'title' => 'K3L Products',
                'category_code' => 'K',
            ], [
                'id' => 16,
                'title' => 'ALKES & PKRT',
                'category_code' => 'A',
            ], [
                'id' => 17,
                'title' => 'Feed, Pesticides & PSAT',
                'category_code' => 'E',
            ], [
                'id' => 18,
                'title' => 'Others',
                'category_code' => 'L',
            ], [
                'id' => 19,
                'title' => 'Research / Academic Purpose',
                'category_code' => 'R',
            ], [
                'id' => 20,
                'title' => 'Dioxine Udara',
                'category_code' => 'D',
            ],
        ]);
    }
}
