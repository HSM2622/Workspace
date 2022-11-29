<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QnaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++){
            $qna = [
                'title' => "title" . $i,
                'user_id' => "user" . $i,
                'body' => $i . "example",
            ];
            \Illuminate\Support\Facades\DB::table('qnas') -> insert($qna);
        }
    }
}
