<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class)->times(40)->create();
        $products = factory(App\Product::class)->times(50)->create();
        $sizes = factory(App\Size::class)->times(4)->create();

        foreach($products as $product) {
          $product->sizes()->sync($sizes->random(1));
        }

        foreach($products as $product) {
          $product->users()->sync($users->random(1));
        }
        
    }

}
