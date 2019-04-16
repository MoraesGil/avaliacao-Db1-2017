<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Produto;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()   {
        $faker = Factory::create();
         $model = new Produto();

         foreach (range(1,100) as $i) {
           $model->create([
             'label'=>$faker->word,
             'descricao'=>$faker->text(20),
             'preco'=>$faker->randomFloat(2, $min = 1, $max = 1000) // 48.8932,
           ]);
         }
    }
}
