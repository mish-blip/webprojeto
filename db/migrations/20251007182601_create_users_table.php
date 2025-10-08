<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateUsersTable extends AbstractMigration
{
    //  aq cria as tabelas
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string', ['limit' => 100])
              ->addColumn('login', 'string', ['limit' => 50])
              ->addColumn('email', 'string', ['limit' => 100])
              ->addColumn('password', 'string', ['limit' => 255])
              ->addTimestamps()
              //define login e email como unicos por usuario
              ->addIndex(['login'], ['unique' => true])
              ->addIndex(['email'], ['unique' => true])
              ->create();

    }
}
