<?php

use yii\db\Migration;

/**
 * Class m200301_114300_directors_table
 */
class m200301_114300_directors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('director', [
            'id' => $this->primaryKey(),
            'name' => $this->string(40)->notNull(),
        ]);

        $data = [
            ['name' => 'ChristopherNolan'],
            ['name' => 'GuyRitchie'],
            ['name' => 'LucBesson'],
            ['name' => 'StevenSpielberg']
        ];

        foreach ($data as $name)
        {
            $this->insert('director', $name);
        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('director', ['id' => 1, 'id' => 2, 'id' => 3, 'id' => 4]);
        $this->dropTable('director');
    }


}
