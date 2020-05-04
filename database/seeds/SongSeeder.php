<?php

use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            ['id' => '1', 'artist_id' => '3', 'country_id' => '2', 'name' => '2 Triệu Năm', 
            'image' => 'https://drive.google.com/uc?id=1L3nngWBU7yvUtssheLEGPusPJQ715HSM&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1UAwaS4-zU6pjdLotddiuq__dPPx94Q6R&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 1],

            ['id' => '2', 'artist_id' => '5', 'country_id' => '2', 'name' => '100 Year Love', 
            'image' => 'https://drive.google.com/uc?id=1oIvVIRNFxVp15Lgexn55wyrQ3PeePGVn&export=media', 
            'audio' => 'https://drive.google.com/uc?id=16am2vqjs_jgaPBnU32789DkdphSNBE_E&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 3],

            ['id' => '3', 'artist_id' => '1', 'country_id' => '1', 'name' => 'All Falls Down', 
            'image' => 'https://drive.google.com/uc?id=11sQT4LQORxwUbwiHSmNT-vBniJKQC84b&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1aqEZzxPCccbYMDGNT2hHMp8J543qN1Tu&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '4', 'artist_id' => '1', 'country_id' => '1', 'name' => 'Alone', 
            'image' => 'https://drive.google.com/uc?id=1DtyAgs2wd51uiXQkvaLvNLNPicONiMiT&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1aqEZzxPCccbYMDGNT2hHMp8J543qN1Tu&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '5', 'artist_id' => '3', 'country_id' => '2', 'name' => 'Bài Này Chill Phết', 
            'image' => 'https://drive.google.com/uc?id=1Bp8QMzBKsbTKIkS9mIGMeTir6HPEivw5&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1ZdhouWBERCsFtz-QA27gD7FhkvBhi9L7&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '6', 'artist_id' => '6', 'country_id' => '1', 'name' => 'Careless', 
            'image' => 'https://drive.google.com/uc?id=1x4_s8TaG-VYSL1YYH7XTdmuD9tWsbp_l&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1enZH_Rf-lViTOaZX-WND5jSnPswlq1ND&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '7', 'artist_id' => '6', 'country_id' => '1', 'name' => 'Cold', 
            'image' => 'https://drive.google.com/uc?id=1wsvnIb4g-WpGFrEkelwB5W1w0hOhh9f9&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1m8Hxco3bBHF9s3FWISMKgcDsAvOBzQYo&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '8', 'artist_id' => '3', 'country_id' => '2', 'name' => 'Đưa Nhau Đi Trốn', 
            'image' => 'https://drive.google.com/uc?id=1JF5nA68-a8ov6bzxUIBET12nNEYd1lUN&export=media', 
            'audio' => 'https://drive.google.com/uc?id=140oNZ2agUOSDqOsxKLIOa3mv-aSdZlY5&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '9', 'artist_id' => '4', 'country_id' => '1', 'name' => 'Hey', 
            'image' => 'https://drive.google.com/uc?id=1AjtDGZc-FpzuezAElZ9_CYJThHWzGFWF&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1GcCM7mavZ-AutaRhG3qnO9dGxuiYx5yb&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '10', 'artist_id' => '3', 'country_id' => '2', 'name' => 'Mười Năm', 'image' => 
            'https://drive.google.com/uc?id=1RI3d1BsKyRuedLCABNEGyaIO_ZhwUZ1x&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1SHuU7aZzzZBjfAwt6TqCf1HYFaa0I-XR&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '11', 'artist_id' => '5', 'country_id' => '2', 'name' => 'Rượu Tình', 
            'images' => 'https://drive.google.com/uc?id=1aeCxAibk7oomTccm8Ajtm8wX3QbGZRe7&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1tkxtxFrWkPxmANkjbaL4T1NWMWv6STgM&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '12', 'artist_id' => '1', 'country_id' => '1', 'name' => 'Sing Me To Sleep', 
            'images' => 'https://drive.google.com/uc?id=1uY-otC-nvuPIGEFkezDum0G2a96C8JR2&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1isz-Tpa_WXmSg90KTheGUT0ABVrRW2dT&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],
            
            ['id' => '13', 'artist_id' => '2', 'country_id' => '1', 'name' => 'The Nights', 
            'images' => 'https://drive.google.com/uc?id=1Zjr1jmF6773vuB6klqoztX1UUSCbmyQg&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1ySzUGtapREUYGfjXqZZdr6ALHxbXc39G&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '14', 'artist_id' => '1', 'country_id' => '1', 'name' => 'Unity', 
            'images' => 'https://drive.google.com/uc?id=182_fhYegsaTsjVn2kLlT6sb6GRonCcuj&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1yWDDvgbXgAb70nPy1d4F7zbFaW2-EK33&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '15', 'artist_id' => '2', 'country_id' => '1', 'name' => 'Waiting For Love', 
            'images' => 'https://drive.google.com/uc?id=1DwLfNRVr8HQzeypmY0tcAtV3mBLeq_b_&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1guIPThytKeQYAxFMGg7xr0m5o-Rwj8XX&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '16', 'artist_id' => '2', 'country_id' => '1', 'name' => 'Wake Me Up', 
            'images' => 'https://drive.google.com/uc?id=1RYdgl0B3BXvMOU02NeyTohcSZJpuykhi&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1lZe2X_YR7qGzzvxx4LQ7hDYD0ERNEVSm&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],
            
            ['id' => '17', 'artist_id' => '7', 'country_id' => '4', 'name' => 'Nocturnal', 
            'images' => 'https://drive.google.com/uc?id=1aMkPieqnSeBwvFZICSRO4z88aqUiuQzT&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1aMkPieqnSeBwvFZICSRO4z88aqUiuQzT&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '18', 'artist_id' => '7', 'country_id' => '4', 'name' => 'Lunisolar', 
            'images' => 'https://drive.google.com/uc?id=18IPccSUhySd-2CxFuqXAA23UjLfZ1HUJ&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1EbQVFtUOVFmDxhOhPkmKZ3xj5bLYEUNi&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '19', 'artist_id' => '7', 'country_id' => '4', 'name' => 'Way Back Home', 
            'images' => 'https://drive.google.com/uc?id=1ctMiQBtPlzGOtgkM55mKjdEHt0iRuM9K&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1NptxoDHSLWdDuYByyZzwNtqkUx1x5eiA&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '20', 'artist_id' => '8', 'country_id' => '3', 'name' => 'Nandemonaiya', 
            'images' => 'https://drive.google.com/uc?id=1ctMiQBtPlzGOtgkM55mKjdEHt0iRuM9K&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1ebNQsQUpX4FEb5ie3aBbY5UtaRIxPTK6&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '21', 'artist_id' => '8', 'country_id' => '3', 'name' => 'Sparkle', 
            'images' => 'https://drive.google.com/uc?id=1rElBMDf31syRGsxRD1JxmaMpg6T3IH3C&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1F28g3AIE97no08rE4FqL4RlwCd2b92h4&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '22', 'artist_id' => '8', 'country_id' => '3', 'name' => 'Zen zen zense', 
            'images' => 'https://drive.google.com/uc?id=16ZkjK4M3J19H-tbuZYLWp8JTudlMJhFC&export=media', 
            'audio' => 'https://drive.google.com/uc?id=1-bSeSbztYNwtNxlEsjkGub0GJJ0d7_W4&export=media', 'views' => '0', 'dowloads' => '0', 'likes' => 0],
        ]);
    }
}
