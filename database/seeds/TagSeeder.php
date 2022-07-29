<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Italy', 'Macroeconomics', 'Js', 'OOP', 'Vue', 'Laravel', 'Eggs', 'Tomatoes', 'Writing', 'Reading'];

        foreach ($tags as $tag) {
            Tag::create([
                'name'  => $tag,
            ]);
        }
    }
}
