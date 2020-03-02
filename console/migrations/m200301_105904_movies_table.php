<?php

use yii\db\Migration;

/**
 * Class m200301_105904_movies_table
 */
class m200301_105904_movies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('movie', [
            'id' => $this->primaryKey(),
            'name' => $this->string(32)->notNull(),
            'year' => $this->integer(11)->notNull(),
            'rating' => $this->integer(3)->notNull(),
        ]);

        $data = [
            ['name' => 'MadMax', 'year' => '2015', 'rating' => '8'],
            ['name' => 'GunsAkimbo', 'year' => '2020', 'rating' => '6'],
            ['name' => 'TheGentlemens', 'year' => '2019', 'rating' => '9'],
            ['name' => 'Sonic', 'year' => '2020', 'rating' => '6']
        ];

        foreach ($data as $film)
        {
            $this->insert('movie', $film);
        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('movie', ['id' => 1, 'id' => 2, 'id' => 3, 'id' => 4]);
        $this->dropTable('movie');
    }

}
