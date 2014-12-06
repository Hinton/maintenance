<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            
            Schema::create('events', function(Blueprint $table)
            {
                $table->increments('id');
                $table->timestamps();
                $table->integer('user_id')->unsigned()->nullable();
                $table->integer('eventable_id');
                $table->string('eventable_type');
                
                /*
                 * Google Calendar Event ID
                 */
                $table->string('api_id');
                
                $table->foreign('user_id')->references('id')->on('users')
						->onUpdate('restrict')
						->onDelete('set null');
            });
            
            Schema::create('event_reports', function(Blueprint $table)
            {
                $table->increments('id');
                $table->timestamps();
                $table->integer('event_id')->unsigned();
                $table->integer('user_id')->unsigned()->nullable();
                $table->text('description');
                
                $table->foreign('event_id')->references('id')->on('events')
						->onUpdate('restrict')
						->onDelete('cascade');
                
                $table->foreign('user_id')->references('id')->on('users')
						->onUpdate('restrict')
						->onDelete('set null');

            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('event_reports');
            Schema::drop('events');
	}

}
