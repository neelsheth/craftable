//make table
php artisan make:migration create_users_table

//Schema in table
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamp('date');
            $table->boolean('active')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });

// migrate
php artisan migrate