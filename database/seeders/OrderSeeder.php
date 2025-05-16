<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::insert(
            [
                [
                    'title' => 'косметический ремонт',
                ],
                [
                    'title' => 'капитальный ремонт',
                ],
                [
                    'title' => 'электромонтаж',
                ],

            ]
        );
    }
}
