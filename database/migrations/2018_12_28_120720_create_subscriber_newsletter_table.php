<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriberNewsletterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('subscriber_newsletter')) {
            Schema::create('subscriber_newsletter', function (Blueprint $table) {

                $table->integer('subscriber_id')->unsigned()->nullable();;
                $table->integer('newsletter_id')->unsigned()->nullable();;

                $table->foreign('subscriber_id')->references('id')
                    ->on('subscribers')
                    ->onDelete('cascade');

                $table->foreign('newsletter_id')->references('id')
                    ->on('newsletter')
                    ->onDelete('cascade');

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriber_newsletter');
    }
}
