<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProductsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('products');
        $table->addColumn('produto','string', ['null'=> false]);
        $table->addColumn('quantidade','integer', ['null'=> false]);
        $table->create();
    }
}
