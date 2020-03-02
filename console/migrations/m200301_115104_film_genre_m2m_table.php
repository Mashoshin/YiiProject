<?php

use yii\db\Migration;

/**
 * Class m200301_115104_film_genre_m2m_table
 */
class m200301_115104_film_genre_m2m_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('movie_genre', [
            'movie_id'=> $this->integer(10),
            'genre_id'=> $this->integer(10)
        ]);

        $this->createIndex(
            'idx-movie_genre-movie_id',
            'movie_genre',
            'movie_id'
        );

        $this->createIndex(
            'idx-movie_genre-genre_id',
            'movie_genre',
            'genre_id'
        );

        $this->addForeignKey(
            'fk-movie_genre-movie_id',
            'movie_genre',
            'movie_id',
            'movie',
            'id',
            'CASCADE');

        $this->addForeignKey(
            'fk-movie_genre-genre_id',
            'movie_genre',
            'genre_id',
            'genre',
            'id',
            'CASCADE');

        $data = [
            ['movie_id' => 1, 'genre_id' => 2],
            ['movie_id' => 1, 'genre_id' => 3],
            ['movie_id' => 2, 'genre_id' => 1],
            ['movie_id' => 2, 'genre_id' => 2],
            ['movie_id' => 3, 'genre_id' => 1],
            ['movie_id' => 3, 'genre_id' => 2]
        ];

        foreach ($data as $name)
        {
            $this->insert('movie_genre', $name);
        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-movie_genre-movie_id',
            'movie_genre'
        );
        $this->dropForeignKey(
            'fk-movie_genre-genre_id',
            'movie_genre'
        );
        $this->dropTable('movie_genre');

    }

}
