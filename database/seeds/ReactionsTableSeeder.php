<?php

use Illuminate\Database\Seeder;

class ReactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reactions')->insert([
            ['to_user_id' => '2',
            'from_user_id' => '1',
            'status' => '0',
            ],
            ['to_user_id' => '3',
            'from_user_id' => '1',
            'status' => '0',
            ],
            ['to_user_id' => '4',
            'from_user_id' => '1',
            'status' => '0',
            ],
            ['to_user_id' => '5',
            'from_user_id' => '1',
            'status' => '0',
            ],
            ['to_user_id' => '6',
            'from_user_id' => '1',
            'status' => '0',
            ],
            ['to_user_id' => '7',
            'from_user_id' => '1',
            'status' => '0',
            ],
            ['to_user_id' => '8',
            'from_user_id' => '1',
            'status' => '0',
            ],
            ['to_user_id' => '9',
            'from_user_id' => '1',
            'status' => '0',
            ],
            ['to_user_id' => '10',
            'from_user_id' => '1',
            'status' => '0',
            ],
        ]);
    }
}
