<?php

use Waygou\Gamestage\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            /* Columns */
            $table->increments('id');
            $table->string('name');

            $table->integer('release_year')
                  ->nullable();

            $table->integer('genre_id')
                  ->nullable();

            $table->integer('developer_id')
                  ->nullable();

            $table->integer('publisher_id')
                  ->nullable();

            $table->integer('re_releaser_id')
                  ->nullable();

            $table->integer('loading_system_id')
                  ->nullable();

            $table->integer('licencer_id')
                  ->nullable();

            $table->integer('graphics_type_id')
                  ->nullable();

            $table->boolean('lightgun_ready')
                  ->default(false)
                  ->nullable();

            $table->text('remarks')
                  ->nullable();

            /* System columns */
            $table->timestamps();
            $table->softDeletes();

            /* Engine */
            $table->engine = 'InnoDB';

            /* Collation */
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });

        Schema::create('genres', function (Blueprint $table) {
            /* Columns */
            $table->increments('id');
            $table->string('name');

            /* System columns */
            $table->timestamps();
            $table->softDeletes();

            /* Engine */
            $table->engine = 'InnoDB';

            /* Collation */
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });

        Schema::create('companies', function (Blueprint $table) {
            /* Columns */
            $table->increments('id');
            $table->string('name');

            /* System columns */
            $table->timestamps();
            $table->softDeletes();

            /* Engine */
            $table->engine = 'InnoDB';

            /* Collation */
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });

        Schema::create('other_formats', function (Blueprint $table) {
            /* Columns */
            $table->increments('id');
            $table->string('name');

            /* System columns */
            $table->timestamps();
            $table->softDeletes();

            /* Engine */
            $table->engine = 'InnoDB';

            /* Collation */
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });

        Schema::create('graphics_types', function (Blueprint $table) {
            /* Columns */
            $table->increments('id');
            $table->string('name');

            /* System columns */
            $table->timestamps();
            $table->softDeletes();

            /* Engine */
            $table->engine = 'InnoDB';

            /* Collation */
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });

        Schema::create('loading_schemes', function (Blueprint $table) {
            /* Columns */
            $table->increments('id');
            $table->string('name');

            /* System columns */
            $table->timestamps();
            $table->softDeletes();

            /* Engine */
            $table->engine = 'InnoDB';

            /* Collation */
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });

        Schema::create('runs_on', function (Blueprint $table) {
            /* Columns */
            $table->increments('id');
            $table->string('name');

            /* System columns */
            $table->timestamps();
            $table->softDeletes();

            /* Engine */
            $table->engine = 'InnoDB';

            /* Collation */
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });

        /*** Data initialization **/
        User::create(['name' => 'Bruno Falcão',
                      'email' => 'bruno.falcao@live.com',
                      'password' => bcrypt('honda'), ]);

        /*** Data initialization **/
        User::create(['name' => 'Paulo Teixeira',
                      'email' => 'gamestage_online@yahoo.com',
                      'password' => bcrypt('zorba'), ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
