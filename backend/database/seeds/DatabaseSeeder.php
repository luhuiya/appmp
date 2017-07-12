<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BalanceTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(FosUserTableSeeder::class);
        $this->call(HomeLayoutTableSeeder::class);
        $this->call(HomeProductListTableSeeder::class);
        $this->call(ImageTypeProductTableSeeder::class);
        $this->call(OauthAccessTokensTableSeeder::class);
        $this->call(OauthAuthCodesTableSeeder::class);
        $this->call(OauthClientsTableSeeder::class);
        $this->call(OauthPersonalAccessClientsTableSeeder::class);
        $this->call(OauthRefreshTokensTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PaymentDetailsTableSeeder::class);
        $this->call(PaymentMethodTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(PaymentTokenTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(PrdpositionTableSeeder::class);
        $this->call(ProductImageTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(SubcategoryTableSeeder::class);
        $this->call(TopUpVoucherTableSeeder::class);
        $this->call(TransPaymentTableSeeder::class);
        $this->call(VoucherTableSeeder::class);
        $this->call(VouchersTableSeeder::class);
    }
}
