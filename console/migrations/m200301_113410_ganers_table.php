<?php

use yii\db\Migration;

/**
 * Class m200301_113410_ganers_table
 */
class m200301_113410_ganers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('genre', [
            'id' => $this->primaryKey(),
            'name' => $this->string(40)->notNull(),
        ]);

        $data = [
            ['name' => 'comedy'],
            ['name' => 'action'],
            ['name' => 'adventure'],
            ['name' => 'drama']
        ];

        foreach ($data as $genre)
        {
            $this->insert('genre', $genre);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('genre', ['id' => 1, 'id' => 2, 'id' => 3, 'id' => 4]);
        $this->dropTable('genre');
    }

}
