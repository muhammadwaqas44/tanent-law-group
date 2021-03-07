<?php

use Illuminate\Database\Seeder;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Coupon::truncate();
        $coupons = [
            [
                'coupon_name'=>'SDT$100' ,
                'off'=>'100'
            ],
            [
                'coupon_name'=>'SDT$10' ,
                'off'=>'12.66'],
            [
                'coupon_name'=>'SDT$15' ,
                'off'=>'18.99'
            ],
            [
                'coupon_name'=>'SDT$20' ,
                'off'=>'25.32'
            ],
        ];

        foreach($coupons as $coupon) {
            \App\Coupon::create($coupon);
        }
    }
}
