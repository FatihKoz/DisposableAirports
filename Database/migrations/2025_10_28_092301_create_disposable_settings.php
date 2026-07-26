<?php

use App\Contracts\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up()
    {
        if (!Schema::hasTable('disposable_settings')) {
            Schema::create('disposable_settings', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 200)->nullable();
                $table->string('key', 100);
                $table->string('value', 500)->nullable();
                $table->string('default', 250)->nullable();
                $table->string('group', 100)->nullable();
                $table->string('field_type', 50)->nullable();
                $table->text('options')->nullable();
                $table->string('desc', 250)->nullable();
                $table->string('order', 6)->nullable();
                $table->timestamps();
                $table->index('id');
                $table->unique('id');
                $table->unique('key');
            });
        }
    }
};
