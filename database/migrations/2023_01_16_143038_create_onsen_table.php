<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onsen', function (Blueprint $table) {
            $table->id();
            // 画像url
            $table->string('image_url');
            // 住所
            $table->string('address');
            // 男性サウナ温度
            $table->integer('male_sauna_temperature');
            // 男性水風呂温度
            $table->integer('male_water_bath_temperature');
            // 女性サウナ温度
            $table->integer('female_sauna_temperature');
            // 女性水風呂温度
            $table->integer('female_water_bath_temperature');
            // 入浴料
            $table->integer('bath_fee');
            // 定休日
            $table->string('holiday');
            // 休憩スペース
            $table->string('rest_space');
            // 食事処
            $table->string('restaurant');
            // 漫画
            $table->string('manga');
            // Wifi
            $table->string('wifi');
            // 電源
            $table->string('power_supply');
            // 作業スペース
            $table->string('work_space');
            // 給水器
            $table->string('water_dispenser');
            // 駐車場
            $table->string('parking_lot');
            // ウォッシュレット
            $table->string('washlet');
            // 岩盤浴
            $table->string('hot_stone_bath');
            // タトゥー
            $table->string('tattoo');
            // 現金
            $table->string('cash');
            // クレジットカード
            $table->string('credit_card');
            // 電子マネー
            $table->string('electronic_money');
            // シャンプー
            $table->string('shampoo');
            // コンディショナー
            $table->string('conditioner');
            // ボディーソープ
            $table->string('body_soap');
            // フェイスソープ
            $table->string('face_soap');
            // カミソリ
            $table->string('razor');
            // 歯ブラシ
            $table->string('toothbrush');
            // ナイロンタオル
            $table->string('nylon_towel');
            // ドライヤー
            $table->string('dryer');
            // サウナパンツ
            $table->string('sauna_pants');
            // 化粧水
            $table->string('lotion');
            // 綿棒
            $table->string('cotton_swab');
            // ボディケア
            $table->string('body_care');
            // アカスリ
            $table->string('acne');
            // タイ古式
            $table->string('thai');
            // ヘッドスパ
            $table->string('head_spa');
            // 施設名
            $table->string('name');
            // 施設タイプ
            $table->string('type');
            // 駐車場
            $table->string('parking');
            // TEL
            $table->string('tel');
            // HP
            $table->string('hp');
            // 営業時間
            $table->string('business_hours');
            // 料金
            $table->string('price');

            $table->string('latitude');
            $table->string('longitude');
            // 編集時間
            $table->timestamp('edit_time');
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
        Schema::dropIfExists('onsen');
    }
};
