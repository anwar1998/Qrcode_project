<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use  App\Models\Qrcode;
class CreateQrcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qrcodes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', [
                Qrcode::TYPE_SITE,
                Qrcode::TYPE_NUMBER,
                Qrcode::TYPE_PAGE
            ])->default(Qrcode::TYPE_SITE);
            $table->string('qrcode_value');
            $table->integer('user_id');
            $table->string('description')->nullable()->default(NULL);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qrcodes');
    }
}
