<?php
/**
 * Copyright 2009 - 2014, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2009 - 2014, Cake Development Corporation (http://cakedc.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Search\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Article Fixture
 */
class ArticlesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array $fields
     */
    public $fields = [
        'id' => ['type' => 'integer'],
        'title' => ['type' => 'string', 'null' => false],
        'body' => ['type' => 'text', 'null' => false],
        'slug' => ['type' => 'string', 'null' => false],
        'views' => ['type' => 'integer', 'null' => false],
        'comments' => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10],
        'created' => 'datetime',
        'updated' => 'datetime',
        '_constraints' => ['primary' => ['type' => 'primary', 'columns' => ['id']]],
    ];

    /**
     * Records
     *
     * @var array $records
     */
    public $records = [
        ['title' => 'First Article', 'body' => 'First Article',
            'slug' => 'first_article', 'views' => 2, 'comments' => 1,
            'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31',
        ],
        ['title' => 'Second Article', 'body' => 'Second Article',
            'slug' => 'second_article', 'views' => 1, 'comments' => 2,
            'created' => '2007-03-18 10:41:23', 'updated' => '2007-03-18 10:43:31',
        ],
        ['title' => 'Third Article', 'body' => 'Third Article',
            'slug' => 'third_article', 'views' => 2, 'comments' => 3,
            'created' => '2007-03-18 10:43:23', 'updated' => '2007-03-18 10:45:31',
        ],
    ];
}
