<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ImageGame;

class ImageGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ImageGame::insert([

            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/570940/header.jpg?t=1764975651',
                'type' => 'portrait',
                'game_id' => 1
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/570940/ss_3a71463e4ccaf28c5c27f6cf8d32a3a125f45404.1920x1080.jpg?t=1764975651',
                'type' => 'gallery',
                'game_id' => 1
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/570940/ss_92b2ba470cbfdb8839b649b3f478e5531dd81a17.1920x1080.jpg?t=1764975651',
                'type' => 'gallery',
                'game_id' => 1
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/570940/ss_626cc310dc9ac7fb146011582c864a35e5f3e381.1920x1080.jpg?t=1764975651',
                'type' => 'gallery',
                'game_id' => 1
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/570940/ss_b4a80bd6e828a81db09ecbef5694e5d0cddb2caf.1920x1080.jpg?t=1764975651',
                'type' => 'gallery',
                'game_id' => 1
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3764200/ce5437442768e38eb575f205ab9397d0264017b0/header.jpg?t=1772587704',
                'type' => 'portrait',
                'game_id' => 2
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3764200/08af4e9398b8e45152bfbedce3bc24d22e2c0990/ss_08af4e9398b8e45152bfbedce3bc24d22e2c0990.1920x1080.jpg?t=1772587704',
                'type' => 'description',
                'game_id' => 2
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3764200/4921eb5fb45f6b7a3b62195e47c6d7b4175935a8/ss_4921eb5fb45f6b7a3b62195e47c6d7b4175935a8.1920x1080.jpg?t=1772587704',
                'type' => 'description',
                'game_id' => 2
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3764200/e7b791b703759aebe774b813eb29a364008552b8/ss_e7b791b703759aebe774b813eb29a364008552b8.1920x1080.jpg?t=1772587704',
                'type' => 'gallery',
                'game_id' => 2
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3764200/bbe5c4e0ba4fc551d9389cf2411c2cefe413af1d/ss_bbe5c4e0ba4fc551d9389cf2411c2cefe413af1d.1920x1080.jpg?t=1772587704',
                'type' => 'gallery',
                'game_id' => 2
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3764200/b61e78a244aef7a12cf08f9dc7e7fc7ead6eeddb/ss_b61e78a244aef7a12cf08f9dc7e7fc7ead6eeddb.1920x1080.jpg?t=1772587704',
                'type' => 'gallery',
                'game_id' => 2
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3764200/9e35202b6c8262496e1c57275c51bcead7232249/ss_9e35202b6c8262496e1c57275c51bcead7232249.1920x1080.jpg?t=1772587704',
                'type' => 'gallery',
                'game_id' => 2
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3764200/3f63fb0ce70f3e97799226b70ebea4d4794c53a1/ss_3f63fb0ce70f3e97799226b70ebea4d4794c53a1.1920x1080.jpg?t=1772587704',
                'type' => 'gallery',
                'game_id' => 2
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1091500/e9047d8ec47ae3d94bb8b464fb0fc9e9972b4ac7/header.jpg?t=1769690377',
                'type' => 'portrait',
                'game_id' => 3
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1091500/extras/2e005843527d8e0e58ab07f13576d2cc.avif?t=1769690377',
                'type' => 'description',
                'game_id' => 3
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1091500/ss_4eb068b1cf52c91b57157b84bed18a186ed7714b.1920x1080.jpg?t=1769690377',
                'type' => 'gallery',
                'game_id' => 3
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1091500/ss_af2804aa4bf35d4251043744412ce3b359a125ef.1920x1080.jpg?t=1769690377',
                'type' => 'gallery',
                'game_id' => 3
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1091500/ss_8640d9db74f7cad714f6ecfb0e1aceaa3f887e58.1920x1080.jpg?t=1769690377',
                'type' => 'gallery',
                'game_id' => 3
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1091500/ss_429db1d013a0366417d650d84f1eff02d1a18c2d.1920x1080.jpg?t=1769690377',
                'type' => 'gallery',
                'game_id' => 3
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1091500/ss_0002f18563d313bdd1d82c725d411408ebf762b0.1920x1080.jpg?t=1769690377',
                'type' => 'gallery',
                'game_id' => 3
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1086940/48a2fcbda8565bb45025e98fd8ebde8a7203f6a0/header.jpg?t=1773079016',
                'type' => 'portrait',
                'game_id' => 4
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1086940/extras/d7962a24532d2ae5ca04ee1101579e19.poster.avif?t=1773079016',
                'type' => 'description',
                'game_id' => 4
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1086940/ss_c73bc54415178c07fef85f54ee26621728c77504.1920x1080.jpg?t=1773079016',
                'type' => 'gallery',
                'game_id' => 4
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1086940/ss_31c13d137706fb4d9a4210513274a3ed9c3c7c96.1920x1080.jpg?t=1773079016',
                'type' => 'gallery',
                'game_id' => 4
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1086940/ss_2c576a8e563e3338826268f172c9032c84366d16.1920x1080.jpg?t=1773079016',
                'type' => 'gallery',
                'game_id' => 4
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1086940/ss_49168eeefdfb6e6030a5aed3fd7c1a83da870a9f.1920x1080.jpg?t=1773079016',
                'type' => 'gallery',
                'game_id' => 4
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1086940/ss_3cc4e8cfcfb8a91d19d96f631f076d252ba2c0c4.1920x1080.jpg?t=1773079016',
                'type' => 'gallery',
                'game_id' => 4
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/413150/header.jpg?t=1754692865',
                'type' => 'portrait',
                'game_id' => 5
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/413150/extras/4aa7123b7bff518a6c3b640f51feb310.avif?t=1754692865',
                'type' => 'description',
                'game_id' => 5
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/413150/ss_b887651a93b0525739049eb4194f633de2df75be.1920x1080.jpg?t=1754692865',
                'type' => 'gallery',
                'game_id' => 5
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/413150/ss_9ac899fe2cda15d48b0549bba77ef8c4a090a71c.1920x1080.jpg?t=1754692865',
                'type' => 'gallery',
                'game_id' => 5
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/413150/ss_a3ddf22cda3bd722df77dbdd58dbec393906b654.1920x1080.jpg?t=1754692865',
                'type' => 'gallery',
                'game_id' => 5
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/413150/ss_64d942a86eb527ac817f30cc04406796860a6fc1.1920x1080.jpg?t=1754692865',
                'type' => 'gallery',
                'game_id' => 5
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/413150/ss_f6f4c727570d753b2b5d8da6af4e0c38fe489059.1920x1080.jpg?t=1754692865',
                'type' => 'gallery',
                'game_id' => 5
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1145360/header.jpg?t=1758127023',
                'type' => 'portrait',
                'game_id' => 6
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1145360/extras/a58817e5bddd69ddbf91f349f106e14a.avif?t=1758127023',
                'type' => 'description',
                'game_id' => 6
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1145360/ss_c0fed447426b69981cf1721756acf75369801b31.1920x1080.jpg?t=1758127023',
                'type' => 'gallery',
                'game_id' => 6
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1145360/ss_2a9e3f9ad4d29d900b890d56361be5b1634225a0.1920x1080.jpg?t=1758127023',
                'type' => 'gallery',
                'game_id' => 6
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1145360/ss_8a9f0953e8a014bd3df2789c2835cb787cd3764d.1920x1080.jpg?t=1758127023',
                'type' => 'gallery',
                'game_id' => 6
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1145360/ss_68300459a8c3daacb2ec687adcdbf4442fcc4f47.1920x1080.jpg?t=1758127023',
                'type' => 'gallery',
                'game_id' => 6
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1145360/ss_e0622b5a57521b76182d7e7e1ae47ee440edcf90.1920x1080.jpg?t=1758127023',
                'type' => 'gallery',
                'game_id' => 6
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/292030/ad9240e088f953a84aee814034c50a6a92bf4516/header.jpg?t=1768303991',
                'type' => 'portrait',
                'game_id' => 7
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/292030/extras/86b33b326dce40c21cc5c4df722d3667.avif?t=1768303991',
                'type' => 'description',
                'game_id' => 7
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/292030/ss_5710298af2318afd9aa72449ef29ac4a2ef64d8e.1920x1080.jpg?t=1768303991',
                'type' => 'gallery',
                'game_id' => 7
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/292030/ss_64eb760f9a2b67f6731a71cce3a8fb684b9af267.1920x1080.jpg?t=1768303991',
                'type' => 'gallery',
                'game_id' => 7
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/292030/ss_dc33eb233555c13fce939ccaac667bc54e3c4a27.1920x1080.jpg?t=1768303991',
                'type' => 'gallery',
                'game_id' => 7
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/292030/ss_ed23139c916fdb9f6dd23b2a6a01d0fbd2dd1a4f.1920x1080.jpg?t=1768303991',
                'type' => 'gallery',
                'game_id' => 7
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/292030/ss_908485cbb1401b1ebf42e3d21a860ddc53517b08.1920x1080.jpg?t=1768303991',
                'type' => 'gallery',
                'game_id' => 7
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/782330/header.jpg?t=1755109910',
                'type' => 'portrait',
                'game_id' => 8
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/782330/extras/bbbba079ce76134f198f9dda8bbc66d3.avif?t=1755109910',
                'type' => 'description',
                'game_id' => 8
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/782330/ss_4f93a7c5003d49cb32f6c0c6e547452b284580a0.1920x1080.jpg?t=1755109910',
                'type' => 'gallery',
                'game_id' => 8
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/782330/ss_7e6a2148321c8024285e3924903d8897cac95358.1920x1080.jpg?t=1755109910',
                'type' => 'gallery',
                'game_id' => 8
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/782330/ss_9cdf861c8ac2d7fa7e1f2a88673032bc3a6c6114.1920x1080.jpg?t=1755109910',
                'type' => 'gallery',
                'game_id' => 8
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/782330/ss_1fcebe3689c6a941257509a2ac4b2fdfb1344730.1920x1080.jpg?t=1755109910',
                'type' => 'gallery',
                'game_id' => 8
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/782330/ss_c836f889d696fa2b81d5fe9f20f75dd925c1b499.1920x1080.jpg?t=1755109910',
                'type' => 'gallery',
                'game_id' => 8
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/945360/header.jpg?t=1757444903',
                'type' => 'portrait',
                'game_id' => 9
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/945360/extras/6bbe13c19eac2f3aeaadddbc7bb40fdc.avif?t=1757444903',
                'type' => 'description',
                'game_id' => 9
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/945360/ss_b7374128e5b786a302a716bca038d604b00ffe46.1920x1080.jpg?t=1757444903',
                'type' => 'gallery',
                'game_id' => 9
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/945360/ss_719484b5e0314cc2ae43793786448e032056a31d.1920x1080.jpg?t=1757444903',
                'type' => 'gallery',
                'game_id' => 9
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/945360/ss_ffd9c8926cbd7fce3ca5e5efb4399c47bb196bc8.1920x1080.jpg?t=1757444903',
                'type' => 'gallery',
                'game_id' => 9
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/945360/ss_a1872c1c594ad4e5885d248516919d85243d9c1f.1920x1080.jpg?t=1757444903',
                'type' => 'gallery',
                'game_id' => 9
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/945360/ss_a1872c1c594ad4e5885d248516919d85243d9c1f.1920x1080.jpg?t=1757444903',
                'type' => 'gallery',
                'game_id' => 9
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3240220/header.jpg?t=1765479644',
                'type' => 'portrait',
                'game_id' => 10
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3240220/d61184a98c1cf2db2b08b2999c04b0519e3615bb/ss_d61184a98c1cf2db2b08b2999c04b0519e3615bb.1920x1080.jpg?t=1765479644',
                'type' => 'gallery',
                'game_id' => 10
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3240220/8340fd391012e12be7e4c02e65801a2648a6b60e/ss_8340fd391012e12be7e4c02e65801a2648a6b60e.1920x1080.jpg?t=1765479644',
                'type' => 'gallery',
                'game_id' => 10
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3240220/f2e70b5823510daa062293ff0b03821e1dee2d37/ss_f2e70b5823510daa062293ff0b03821e1dee2d37.1920x1080.jpg?t=1765479644',
                'type' => 'gallery',
                'game_id' => 10
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3240220/6959cc5d64cce82cb68a27457cfa46fb4d50f897/ss_6959cc5d64cce82cb68a27457cfa46fb4d50f897.1920x1080.jpg?t=1765479644',
                'type' => 'gallery',
                'game_id' => 10
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/3240220/85ff4a9fad2064c201c00c27d8d28c28fa03c481/ss_85ff4a9fad2064c201c00c27d8d28c28fa03c481.1920x1080.jpg?t=1765479644',
                'type' => 'gallery',
                'game_id' => 10
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1174180/header.jpg?t=1759502961',
                'type' => 'portrait',
                'game_id' => 11
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1174180/extras/53502f85ab23215cde9e1f8ed71c5993.avif?t=1759502961',
                'type' => 'description',
                'game_id' => 11
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1174180/ss_66b553f4c209476d3e4ce25fa4714002cc914c4f.1920x1080.jpg?t=1759502961',
                'type' => 'gallery',
                'game_id' => 11
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1174180/ss_bac60bacbf5da8945103648c08d27d5e202444ca.1920x1080.jpg?t=1759502961',
                'type' => 'gallery',
                'game_id' => 11
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1174180/ss_668dafe477743f8b50b818d5bbfcec669e9ba93e.1920x1080.jpg?t=1759502961',
                'type' => 'gallery',
                'game_id' => 11
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1174180/ss_4ce07ae360b166f0f650e9a895a3b4b7bf15e34f.1920x1080.jpg?t=1759502961',
                'type' => 'gallery',
                'game_id' => 11
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1174180/ss_d1a8f5a69155c3186c65d1da90491fcfd43663d9.1920x1080.jpg?t=1759502961',
                'type' => 'gallery',
                'game_id' => 11
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1593500/header.jpg?t=1763059412',
                'type' => 'portrait',
                'game_id' => 12,
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1593500/ss_6eccc970b5de2943546d93d319be1b5c0618f21b.1920x1080.jpg?t=1763059412',
                'type' => 'gallery',
                'game_id' => 12
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1593500/ss_f1bff24d3967a21d303d95e11ed892e3d9113057.1920x1080.jpg?t=1763059412',
                'type' => 'gallery',
                'game_id' => 12
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1593500/ss_1351cb512d008f7e47fc50b74197f4f8eb6f3419.1920x1080.jpg?t=1763059412',
                'type' => 'gallery',
                'game_id' => 12
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1593500/ss_3670ba72c7e3e9c3c3225547ef2c1053504e62b8.1920x1080.jpg?t=1763059412',
                'type' => 'gallery',
                'game_id' => 12
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1593500/ss_8db3de5b5d611e50945268848de2889e1ed4ba84.1920x1080.jpg?t=1763059412',
                'type' => 'gallery',
                'game_id' => 12
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/620/header.jpg?t=1745363004',
                'type' => 'portrait',
                'game_id' => 13
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/620/ss_f3f6787d74739d3b2ec8a484b5c994b3d31ef325.1920x1080.jpg?t=1745363004',
                'type' => 'gallery',
                'game_id' => 13
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/620/ss_6a4f5afdaa98402de9cf0b59fed27bab3256a6f4.1920x1080.jpg?t=1745363004',
                'type' => 'gallery',
                'game_id' => 13
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/620/ss_0cdd90fafc160b52d08b303d205f9fd4e83cf164.1920x1080.jpg?t=1745363004',
                'type' => 'gallery',
                'game_id' => 13
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/620/ss_410c7955c3cc8ca4a5e3c81daa214f534c9aabc8.1920x1080.jpg?t=1745363004',
                'type' => 'gallery',
                'game_id' => 13
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/620/ss_358127df30a766a1516ad139083c2bcec3fe0975.1920x1080.jpg?t=1745363004',
                'type' => 'gallery',
                'game_id' => 13
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/220/header.jpg?t=1745368545',
                'type' => 'portrait',
                'game_id' => 14
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/220/ss_47b4105b396de408cb8b6b4f358c69e5e2a62dae.1920x1080.jpg?t=1745368545',
                'type' => 'gallery',
                'game_id' => 14
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/220/ss_0e499071a60a20b24149ad65a8edb769250f2921.1920x1080.jpg?t=1745368545',
                'type' => 'gallery',
                'game_id' => 14
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/220/ss_ffb00abd45012680e4f209355ec81f961b6dd1fb.1920x1080.jpg?t=1745368545',
                'type' => 'gallery',
                'game_id' => 14
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/220/ss_b822a29b3804e05ab9517cac99a5d978d109a32b.1920x1080.jpg?t=1745368545',
                'type' => 'gallery',
                'game_id' => 14
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/220/ss_4e76506add2af0c438d3c4bc810ccb823353fd13.1920x1080.jpg?t=1745368545',
                'type' => 'gallery',
                'game_id' => 14
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/504230/header.jpg?t=1714089525',
                'type' => 'portrait',
                'game_id' => 15
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/504230/extras/1862d74c0888d80d12fbe0421bd9d2fc.avif?t=1714089525',
                'type' => 'description',
                'game_id' => 15
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/504230/ss_03bfe6bd5ddac7f747c8d2aa1a4f82cfd53c6dcb.1920x1080.jpg?t=1714089525',
                'type' => 'gallery',
                'game_id' => 15
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/504230/ss_1ad297c2044cdcf450ee83e56350cafb590da755.1920x1080.jpg?t=1714089525',
                'type' => 'gallery',
                'game_id' => 15
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/504230/ss_4b0f0222341b64a37114033aca9994551f27c161.1920x1080.jpg?t=1714089525',
                'type' => 'gallery',
                'game_id' => 15
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/504230/ss_1012b11ad364ad6c138a25a654108de28de56c5f.1920x1080.jpg?t=1714089525',
                'type' => 'gallery',
                'game_id' => 15
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/504230/ss_a110fe2f50c5828af4b1ff4e7c1ca773a1a7e5aa.1920x1080.jpg?t=1714089525',
                'type' => 'gallery',
                'game_id' => 15
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/367520/3c3489495136b26b34f8a9543c7f5645b99d388c/header.jpg?t=1770338567',
                'type' => 'portrait',
                'game_id' => 16
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/367520/extras/e526a78d9cb1d0c62b8f0029b827e2d7.avif?t=1770338567',
                'type' => 'description',
                'game_id' => 16
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/367520/ss_5384f9f8b96a0b9934b2bc35a4058376211636d2.1920x1080.jpg?t=1770338567',
                'type' => 'gallery',
                'game_id' => 16
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/367520/ss_d5b6edd94e77ba6db31c44d8a3c09d807ab27751.1920x1080.jpg?t=1770338567',
                'type' => 'gallery',
                'game_id' => 16
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/367520/ss_a81e4231cc8d55f58b51a4a938898af46503cae5.1920x1080.jpg?t=1770338567',
                'type' => 'gallery',
                'game_id' => 16
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/367520/ss_62e10cf506d461e11e050457b08aa0e2a1c078d0.1920x1080.jpg?t=1770338567',
                'type' => 'gallery',
                'game_id' => 16
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/367520/ss_bd76bd88bc5334ee56ae3d5f0d8dec4455e8e3b8.1920x1080.jpg?t=1770338567',
                'type' => 'gallery',
                'game_id' => 16
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/632470/header.jpg?t=1771867336',
                'type' => 'portrait',
                'game_id' => 17
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/632470/extras/2e5ad7fff04985c415d6d784eb95e289.avif?t=1771867336',
                'type' => 'description',
                'game_id' => 17
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/632470/ss_b3694e99ffdb686d1bbbbe16a540d3d2ccd509c4.1920x1080.jpg?t=1771867336',
                'type' => 'gallery',
                'game_id' => 17
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/632470/ss_9125a718ee9ba85386ae5d4eb820f3266073fc97.1920x1080.jpg?t=1771867336',
                'type' => 'gallery',
                'game_id' => 17
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/632470/ss_4f5fdc3cf42feca8dafb1f7d2910ef96e62708a2.1920x1080.jpg?t=1771867336',
                'type' => 'gallery',
                'game_id' => 17
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/632470/ss_fc6969799ebf19fd2a2c8a986c9419e053606a17.1920x1080.jpg?t=1771867336',
                'type' => 'gallery',
                'game_id' => 17
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/632470/ss_fc6969799ebf19fd2a2c8a986c9419e053606a17.1920x1080.jpg?t=1771867336',
                'type' => 'gallery',
                'game_id' => 17
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1817070/header.jpg?t=1763569047',
                'type' => 'portrait',
                'game_id' => 18
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1817070/extras/adac1ad992047e131cfb192f675610a3.avif?t=1763569047',
                'type' => 'description',
                'game_id' => 18
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1817070/ss_dfe778bf6d66e952e4acd4e1f926f7615b609ddf.1920x1080.jpg?t=1763569047',
                'type' => 'gallery',
                'game_id' => 18
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1817070/ss_427677cf78195df94702f0a963cd9eaeb9d8935a.1920x1080.jpg?t=1763569047',
                'type' => 'gallery',
                'game_id' => 18
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1817070/ss_dfba6f2477bfa42be69ddfdffbd421d3943d20bf.1920x1080.jpg?t=1763569047',
                'type' => 'gallery',
                'game_id' => 18
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1817070/ss_5b5448df07bc74ba236f2c007fd0ec19cc1d22b6.1920x1080.jpg?t=1763569047',
                'type' => 'gallery',
                'game_id' => 18
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1817070/ss_ad14a7daa190cb150fbb070afc70bc64d66a5e2e.1920x1080.jpg?t=1763569047',
                'type' => 'gallery',
                'game_id' => 18
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1817070/ss_ad14a7daa190cb150fbb070afc70bc64d66a5e2e.1920x1080.jpg?t=1763569047',
                'type' => 'portrait',
                'game_id' => 19
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/2208920/extras/bc3a1cc078ef09b9a1ea152680296b4d.avif?t=1754572990',
                'type' => 'description',
                'game_id' => 19
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/2208920/ss_103481084a59b34837113daf27c04679caf743f3.1920x1080.jpg?t=1754572990',
                'type' => 'gallery',
                'game_id' => 19
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/2208920/ss_e7310b36689ec722d2ea4643efc15bd8fa720c67.1920x1080.jpg?t=1754572990',
                'type' => 'gallery',
                'game_id' => 19
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/2208920/ss_c3bff917ead50268eb7708ef3bf30e07b58929e9.1920x1080.jpg?t=1754572990',
                'type' => 'gallery',
                'game_id' => 19
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/2208920/ss_5e527e1e063ef041ca6680f503081274dcc5513a.1920x1080.jpg?t=1754572990',
                'type' => 'gallery',
                'game_id' => 19
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/2208920/ss_83a5e49815eed62911f27240390c6735b898c13e.1920x1080.jpg?t=1754572990',
                'type' => 'gallery',
                'game_id' => 19
            ],
            [
                'url' => 'https://gaming-cdn.com/images/products/15086/616x353/horizon-forbidden-west-complete-edition-complete-edition-pc-juego-steam-europe-cover.jpg?v=1711041164',
                'type' => 'portrait',
                'game_id' => 20
            ],
            [
                'url' => 'https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/2420110/extras/dca19d1b576b23f8eaf399b128ee6216.poster.avif?t=1763576690',
                'type' => 'description',
                'game_id' => 20
            ],
            [
                'url' => 'https://gaming-cdn.com/images/products/15086/screenshot/horizon-forbidden-west-complete-edition-complete-edition-pc-juego-steam-europe-wallpaper-1.jpg?v=1711041164',
                'type' => 'gallery',
                'game_id' => 20
            ],
            [
                'url' => 'https://gaming-cdn.com/images/products/15086/screenshot/horizon-forbidden-west-complete-edition-complete-edition-pc-juego-steam-europe-wallpaper-2.jpg?v=1711041164',
                'type' => 'gallery',
                'game_id' => 20
            ],
            [
                'url' => 'https://gaming-cdn.com/images/products/15086/screenshot/horizon-forbidden-west-complete-edition-complete-edition-pc-juego-steam-europe-wallpaper-3.jpg?v=1711041164',
                'type' => 'gallery',
                'game_id' => 20
            ],
            [
                'url' => 'https://gaming-cdn.com/images/products/15086/screenshot/horizon-forbidden-west-complete-edition-complete-edition-pc-juego-steam-europe-wallpaper-4.jpg?v=1711041164',
                'type' => 'gallery',
                'game_id' => 20
            ],
            [
                'url' => 'https://gaming-cdn.com/images/products/15086/screenshot/horizon-forbidden-west-complete-edition-complete-edition-pc-juego-steam-europe-wallpaper-5.jpg?v=1711041164',
                'type' => 'gallery',
                'game_id' => 20
            ]
        ]);
    }
}
