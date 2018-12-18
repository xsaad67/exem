<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'emily reyes',
                'email' => 'emily.reyes@example.com',
                'avatar' => 'avatar-8BB5835D-D86A-CB85-267F-B9F8CF7D38F5.jpg',
                'slug' => 'emily-reyes',
                'password' => '$2y$10$wj6hslfQVcxpFUG9EqRP8e4zaEiQZ.ej2QwFrTR/W.LpRQeIIw25W',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:17',
                'updated_at' => '2018-12-11 05:55:17',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'jerry kennedy',
                'email' => 'jerry.kennedy@example.com',
                'avatar' => 'avatar-65096386-851C-7A2B-6D1D-6CEEF02C126B.jpg',
                'slug' => 'jerry-kennedy',
                'password' => '$2y$10$Cie/MZLr0GxsgQNKNKzjm.LeLKUUId5X91e5RWEoBlC/nzHhu9EVi',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:17',
                'updated_at' => '2018-12-11 05:55:17',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'rachel chambers',
                'email' => 'rachel.chambers@example.com',
                'avatar' => 'avatar-86C6CBCA-5A57-1A92-2BED-41A5936C85F5.jpg',
                'slug' => 'rachel-chambers',
                'password' => '$2y$10$z2xQkm6ZKOzHgRbFk8Gg6eGGUd1wY/Oyk3mb0YJdWGJyzRumU6bki',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:18',
                'updated_at' => '2018-12-11 05:55:18',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ken porter',
                'email' => 'ken.porter@example.com',
                'avatar' => 'avatar-DC2D8850-9720-6E0D-13FD-46B74CE43531.jpg',
                'slug' => 'ken-porter',
                'password' => '$2y$10$/a/E91jxvwcupdoHiNmBs.tLpU4gX.fiLb3F4zvTZFyF0.JE1rDC.',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:19',
                'updated_at' => '2018-12-11 05:55:19',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'zoe meyer',
                'email' => 'zoe.meyer@example.com',
                'avatar' => 'avatar-C4EF36EC-C315-FD30-E8C0-328FA3E81D37.jpg',
                'slug' => 'zoe-meyer',
                'password' => '$2y$10$ww2k5EcxURmEKAj9Kr6akOr5OP7G/TgMwMTjNb.zj9Nmja.0DEqIq',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:19',
                'updated_at' => '2018-12-11 05:55:19',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'tyrone carpenter',
                'email' => 'tyrone.carpenter@example.com',
                'avatar' => 'avatar-F5D6E873-0C0F-B20A-9874-5C36B3DFDB0D.jpg',
                'slug' => 'tyrone-carpenter',
                'password' => '$2y$10$j.E8BhKjBQ.sO1RWHqoMDO3n5i7ybHDBocmtwepRIePsepLZJaiXK',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:20',
                'updated_at' => '2018-12-11 05:55:20',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'terry diaz',
                'email' => 'terry.diaz@example.com',
                'avatar' => 'avatar-AFF12591-1BA7-1EB9-39CA-EBF633C204B5.jpg',
                'slug' => 'terry-diaz',
                'password' => '$2y$10$/YfZYXgHdPwh41IVZITFTu0Z2jn7J3PnNAXTKJakWfxK.LD7NtxA2',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:20',
                'updated_at' => '2018-12-11 05:55:20',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'nellie rodriquez',
                'email' => 'nellie.rodriquez@example.com',
                'avatar' => 'avatar-70B7E0F6-406C-89C5-04BA-7B9D4AFB7C75.jpg',
                'slug' => 'nellie-rodriquez',
                'password' => '$2y$10$mKz6oGWA6MiiaWZggIAe1.EXpRffj2VVePtfpOr9PPzXvV97LobTu',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:21',
                'updated_at' => '2018-12-11 05:55:21',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'dianne perez',
                'email' => 'dianne.perez@example.com',
                'avatar' => 'avatar-F728326C-8D71-AD63-10AF-2AF2A1671B20.jpg',
                'slug' => 'dianne-perez',
                'password' => '$2y$10$b10XA3mYvFkj9VqmTj.w8.8Fhj7Xva/zxOYotiuTbvjgXnNmQJEVC',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:22',
                'updated_at' => '2018-12-11 05:55:22',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'david cruz',
                'email' => 'david.cruz@example.com',
                'avatar' => 'avatar-AEFEEA5E-B350-D932-A00B-F30F99BB4212.jpg',
                'slug' => 'david-cruz',
                'password' => '$2y$10$yqmb8mE09sB65g16vjiB8e7sT4UQS..Wf9uCF7DC1oIWwM2bzRYm6',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:22',
                'updated_at' => '2018-12-11 05:55:22',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'nevaeh simmons',
                'email' => 'nevaeh.simmons@example.com',
                'avatar' => 'avatar-B7D0AA3F-6FDB-06C6-DA4A-B6757513978D.jpg',
                'slug' => 'nevaeh-simmons',
                'password' => '$2y$10$lMMcbezh5wgEd3.DmBhFPOnKy3D7TODhf3aHSi6kk4m99a/0q2geG',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:23',
                'updated_at' => '2018-12-11 05:55:23',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'soham hudson',
                'email' => 'soham.hudson@example.com',
                'avatar' => 'avatar-1531A9F0-EFB0-68B1-192D-B4B66E5791DA.jpg',
                'slug' => 'soham-hudson',
                'password' => '$2y$10$PEBrzzFoiEntaqauaLFUkuDrPLYhsSYqp/8EnY7mLplPmzNM1Gjku',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:23',
                'updated_at' => '2018-12-11 05:55:23',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'ricky flores',
                'email' => 'ricky.flores@example.com',
                'avatar' => 'avatar-BD51A072-1C8D-E407-5C9E-22FF83709E6E.jpg',
                'slug' => 'ricky-flores',
                'password' => '$2y$10$a69RsHhmIfSJFd2EXL5W7OIvwUtRGae4S4Jg2d6HFORwOM0N.xLgu',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:24',
                'updated_at' => '2018-12-11 05:55:24',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'wyatt shelton',
                'email' => 'wyatt.shelton@example.com',
                'avatar' => 'avatar-BA32A7E0-3C82-76DB-A55C-BDE864926C8C.jpg',
                'slug' => 'wyatt-shelton',
                'password' => '$2y$10$SxCeae3q745j1S9ihcKHROg5ylfgLV4QuynZ3EXljIqqTV.LNPmqW',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:24',
                'updated_at' => '2018-12-11 05:55:24',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'daisy johnston',
                'email' => 'daisy.johnston@example.com',
                'avatar' => 'avatar-D65009C0-005D-C5E5-3D8F-45779E0AC889.jpg',
                'slug' => 'daisy-johnston',
                'password' => '$2y$10$cPw.0.bTzA2NAbTkCJp46eraCMG2Nkam0sT5JZOwbKyCcz5nSXPoG',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:25',
                'updated_at' => '2018-12-11 05:55:25',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'david ross',
                'email' => 'david.ross@example.com',
                'avatar' => 'avatar-EA7ED6A9-ABFA-174C-C8D4-ADC38E1688F4.jpg',
                'slug' => 'david-ross',
                'password' => '$2y$10$u7VhgF/sJ2//BGXgcn.h/OTfdPPgbvdq1mHkuDfh2mT0NG7CpJeby',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:26',
                'updated_at' => '2018-12-11 05:55:26',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'krin wheeler',
                'email' => 'krin.wheeler@example.com',
                'avatar' => 'avatar-E482958F-44C6-CF21-6F92-E69C4DA60DE4.jpg',
                'slug' => 'krin-wheeler',
                'password' => '$2y$10$pRhXMnVKz6XYSAU.Zp3kJ.jGzXurII/9756gkd4k2sC01GYIlzRVm',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:26',
                'updated_at' => '2018-12-11 05:55:26',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'tracy payne',
                'email' => 'tracy.payne@example.com',
                'avatar' => 'avatar-522E0022-6530-B833-F32C-79A6EDFF6E0E.jpg',
                'slug' => 'tracy-payne',
                'password' => '$2y$10$F3dfBS/Ibg0oiNdO2JEhjutbU5kuhZTRO3pwiDETERAi2XDwob3zK',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:27',
                'updated_at' => '2018-12-11 05:55:27',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'everett evans',
                'email' => 'everett.evans@example.com',
                'avatar' => 'avatar-665BB7F3-31A6-EF73-424C-6A63471F85B5.jpg',
                'slug' => 'everett-evans',
                'password' => '$2y$10$FJlMc76e1BUynmcMOnyttOznk0B8LPqH14lHRSJPMh25u7x0rgE.S',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:27',
                'updated_at' => '2018-12-11 05:55:27',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'roland coleman',
                'email' => 'roland.coleman@example.com',
                'avatar' => 'avatar-C4DC50AD-F60C-A286-451C-05004B7A8F8B.jpg',
                'slug' => 'roland-coleman',
                'password' => '$2y$10$ffVeUYgTrZhfvlFvSU6Ry.NLt9KDavccZujQnlY/yiQudISGWqMKS',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:28',
                'updated_at' => '2018-12-11 05:55:28',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'sophia hernandez',
                'email' => 'sophia.hernandez@example.com',
                'avatar' => 'avatar-8A5EC300-6142-8247-8233-95921F38FCFA.jpg',
                'slug' => 'sophia-hernandez',
                'password' => '$2y$10$dI/4C9X9I1qpFHyVXVeMw.7RshejoqClSqRkEiVsIbestIF6xdqES',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:28',
                'updated_at' => '2018-12-11 05:55:28',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'zachary jordan',
                'email' => 'zachary.jordan@example.com',
                'avatar' => 'avatar-15B25258-9AB3-84A4-4AFC-E592896D8696.jpg',
                'slug' => 'zachary-jordan',
                'password' => '$2y$10$usXcMS/r74uQT9IVN.ercOxTBcYz4oxyG9uDeEGF8ZtFCzxtis576',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:29',
                'updated_at' => '2018-12-11 05:55:29',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'philip hunter',
                'email' => 'philip.hunter@example.com',
                'avatar' => 'avatar-E7A4AFD5-E6C9-09A7-CBDC-057D1D0FCEF5.jpg',
                'slug' => 'philip-hunter',
                'password' => '$2y$10$0B0q5zONmFsh9MIj//pBPOzDq2I/GEuccrL9RA6obYL.9nLYNqYLS',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:29',
                'updated_at' => '2018-12-11 05:55:29',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'emily gray',
                'email' => 'emily.gray@example.com',
                'avatar' => 'avatar-CA9E886F-57AB-201C-DA83-656E2DB6DBE5.jpg',
                'slug' => 'emily-gray',
                'password' => '$2y$10$yDsT8ywU6RIrZnWTv1YMHOltnFjtXTj5IWcRkD8FUC0mIshj4Z5ye',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:30',
                'updated_at' => '2018-12-11 05:55:30',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'kent jones',
                'email' => 'kent.jones@example.com',
                'avatar' => 'avatar-FC8DC627-88CC-FBA1-5AD9-7817BD0359D7.jpg',
                'slug' => 'kent-jones',
                'password' => '$2y$10$TFeJSJ5d.pfs6AZ.QQxnf.hZRYxbvsy16qQJn19yjXo5Cn9E.abIO',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:31',
                'updated_at' => '2018-12-11 05:55:31',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'judy rogers',
                'email' => 'judy.rogers@example.com',
                'avatar' => 'avatar-E10F933C-D62D-CAE7-89EF-DEFBC715932D.jpg',
                'slug' => 'judy-rogers',
                'password' => '$2y$10$iqpCayUv/3hhTZBOKM4KT.plWgJxsTV2ZgeMeoebCxJaFaaK5k5t6',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:31',
                'updated_at' => '2018-12-11 05:55:31',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'doris diaz',
                'email' => 'doris.diaz@example.com',
                'avatar' => 'avatar-FE93B54B-6D81-0EE0-392B-A55E50EA0C7D.jpg',
                'slug' => 'doris-diaz',
                'password' => '$2y$10$ZvBvjph9jh7jADitanlh/.y8/7PSrr4cmYmQO51MDNNtCEoW7Nq3G',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:31',
                'updated_at' => '2018-12-11 05:55:31',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'russell wilson',
                'email' => 'russell.wilson@example.com',
                'avatar' => 'avatar-E805BF74-4777-D8F2-F3E2-3CC7B09C35E1.jpg',
                'slug' => 'russell-wilson',
                'password' => '$2y$10$.di5Ry0mKRfMgDycqLqHpeZWwf/TuBf.KBtt1BQ/ieMSYVPxunwQC',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:32',
                'updated_at' => '2018-12-11 05:55:32',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'warren price',
                'email' => 'warren.price@example.com',
                'avatar' => 'avatar-88D70759-0D82-4622-B4B5-6CFAD83603C0.jpg',
                'slug' => 'warren-price',
                'password' => '$2y$10$V7yJm7TmVH/13O5PDMPFoe/YFO4wX3lruTLD1qTGEOyS7DJSfSS8u',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:33',
                'updated_at' => '2018-12-11 05:55:33',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'suzy bowman',
                'email' => 'suzy.bowman@example.com',
                'avatar' => 'avatar-1DE20890-55B4-BAEE-C32A-072937D5FAA1.jpg',
                'slug' => 'suzy-bowman',
                'password' => '$2y$10$u6rhAycwoTPoIcfwq.Him.NG.bMib5qTADfJyHX9kx1CKyphdRrCS',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:34',
                'updated_at' => '2018-12-11 05:55:34',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'ted perry',
                'email' => 'ted.perry@example.com',
                'avatar' => 'avatar-265A8B14-D21C-CE43-FFCF-694F0E36C669.jpg',
                'slug' => 'ted-perry',
                'password' => '$2y$10$FwLWpRE3Ow9nU/.lT3s3N.Yh.eWPz3RLp3DPLSklUfJa6FWjQ/h.W',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:34',
                'updated_at' => '2018-12-11 05:55:34',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'suzanna simpson',
                'email' => 'suzanna.simpson@example.com',
                'avatar' => 'avatar-6DE2F976-DA73-9123-8BE5-7D5241366343.jpg',
                'slug' => 'suzanna-simpson',
                'password' => '$2y$10$eayET.Lv.kFB7VcGqtHlwuINKxGbZS3u/l6RoooAMsLPgLWGe9Wre',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:35',
                'updated_at' => '2018-12-11 05:55:35',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'arlene martinez',
                'email' => 'arlene.martinez@example.com',
                'avatar' => 'avatar-D10C9DC5-8D6B-D79B-0BFD-7EAA0C0D9D55.jpg',
                'slug' => 'arlene-martinez',
                'password' => '$2y$10$kF4gTiOEyHR39mjnIqv1SOgksnMz7pTr9WvNaeAc4xImbh3iAYRum',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:35',
                'updated_at' => '2018-12-11 05:55:35',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'karen burke',
                'email' => 'karen.burke@example.com',
                'avatar' => 'avatar-C7D2AF41-7A99-172B-B414-7561DE741260.jpg',
                'slug' => 'karen-burke',
                'password' => '$2y$10$NgHXL8Y35efJ8QNO9.8lqeK4qqilOsHDefE1sz30byIWdHvj3zZci',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:36',
                'updated_at' => '2018-12-11 05:55:36',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'michael thomas',
                'email' => 'michael.thomas@example.com',
                'avatar' => 'avatar-321640F7-8351-4FD0-FC3E-3413B9118D7E.jpg',
                'slug' => 'michael-thomas',
                'password' => '$2y$10$84yg913cJ.DSi2DI94fyLeYfmknlHSz1VEizn/0m95NWEIrxBYwSi',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:37',
                'updated_at' => '2018-12-11 05:55:37',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'harvey sanchez',
                'email' => 'harvey.sanchez@example.com',
                'avatar' => 'avatar-EA0C3C7B-82A5-8AC5-CC5D-F6B316000409.jpg',
                'slug' => 'harvey-sanchez',
                'password' => '$2y$10$p8vrF3ArJTH9uGhB40j2vudmZW6Ya2Xq4biL14xfmKKPLnnPmVXGK',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:37',
                'updated_at' => '2018-12-11 05:55:37',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'samantha willis',
                'email' => 'samantha.willis@example.com',
                'avatar' => 'avatar-7F9B752D-3D78-5694-996F-ECCB95540F2B.jpg',
                'slug' => 'samantha-willis',
                'password' => '$2y$10$2d3D9MQ1qXiye0gNqLdJMeOifAeivtnjIG.TCNZECMT2diUoy2S26',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:38',
                'updated_at' => '2018-12-11 05:55:38',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'wallace harrison',
                'email' => 'wallace.harrison@example.com',
                'avatar' => 'avatar-9F55B20A-FFDA-52E0-8E42-638643CA4161.jpg',
                'slug' => 'wallace-harrison',
                'password' => '$2y$10$/h3qRCmrUbYcjpMo4qG6oOtX1wyqs/csBZbvhpjBnr3voaaS/4wWS',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:39',
                'updated_at' => '2018-12-11 05:55:39',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'savannah payne',
                'email' => 'savannah.payne@example.com',
                'avatar' => 'avatar-096C86E7-F6E1-5BD6-716C-98AC627BDF69.jpg',
                'slug' => 'savannah-payne',
                'password' => '$2y$10$IB9Kk32y5RnSk/VVF2xhFeBpfZdKAO5gVhRNeyJ2YN8IDqNuQHLVG',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:39',
                'updated_at' => '2018-12-11 05:55:39',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'rosie price',
                'email' => 'rosie.price@example.com',
                'avatar' => 'avatar-924286A7-BE04-9A8E-804D-483C9457F9A0.jpg',
                'slug' => 'rosie-price',
                'password' => '$2y$10$lBs7zVYCghc/t8dewcQJVO6IKWFWNaoAfZ7J5apEU4UCVSWjMc74u',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:55:40',
                'updated_at' => '2018-12-11 05:55:40',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Jon Doe',
                'email' => 'jondoe@admin.com',
                'avatar' => NULL,
                'slug' => 'jon-doe',
                'password' => '$2y$10$ylaNOsfXA7.0Bke77oFcoOz.0rHifeWyuqweUdTkRPAsikxX.vpo.',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 1,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:58:19',
                'updated_at' => '2018-12-11 05:58:50',
            ), 
            array (
                'id' => 42,
                'name' => 'Joe Doe',
                'email' => 'jondoe@example.com',
                'avatar' => NULL,
                'slug' => 'joe-doe',
                'password' => '$2y$10$ylaNOsfXA7.0Bke77oFcoOz.0rHifeWyuqweUdTkRPAsikxX.vpo.',
                'bio' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'is_active' => 0,
                'is_admin' => 1,
                'remember_token' => NULL,
                'created_at' => '2018-12-11 05:58:19',
                'updated_at' => '2018-12-11 05:58:50',
            ),
        ));
        
        
    }
}