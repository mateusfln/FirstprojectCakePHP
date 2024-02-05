<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Products seed.
 */
class ProductsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    { 
        $data = [];

        $faker = Faker\Factory::create();

        for ($i = 0; $i <= 20; $i++) {
            $data['produto'] = $faker->name();
            $data['quantidade'] = $faker->randomDigit();
        }

        $table = $this->table('products');
        $table->insert($data)->save();
    }
}
