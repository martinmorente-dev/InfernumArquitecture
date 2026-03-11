<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Requirement;

class RequirementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Requirement::insert([
            [
                'type' => 'minimum',
                'os' => 'Windows 7 64-bit, Service Pack 1',
                'cpu' => 'Intel Core i5-2300 2.8 GHz / AMD FX-6300, 3.5 GHz',
                'ram' => '6 GB',
                'gpu' => 'GeForce GTX 460, 1 GB / Radeon HD 6870, GB',
                'storage' => '18 GB',
                'game_id' => 1
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10 64-bit',
                'cpu' => 'Inter core i5-4570 3.2 GHz / AMD FX-8350 4.2 GHz',
                'ram' => '8 GB',
                'gpu' => 'GeForce GTX 660, 2GB / Radeon HD 7870, 2GB',
                'storage' => '18 GB',
                'game_id' => 1
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 11 (64bit required)',
                'cpu' => 'Intel corei5-8500 / AMD Ryzen 5 3500',
                'ram' => '16 GB',
                'gpu' => ' GeForce GTX 1660 6GB /  Radeon RX 5500 XT 8GB',
                'storage' => '20 GB',
                'game_id' => 2
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 11 (64bit required)',
                'cpu' => 'Intel Core i7-8700 / AMD Ryzen 5 5500',
                'ram' => '16 GB',
                'gpu' => 'GeForce RTX 2060 Super 8GB / Radeon RX 6600 8GB',
                'storage' => '20 GB',
                'game_id' => 2
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 10 64-bit',
                'cpu' => 'Intel Core i5-3570K / AMD FX-8310',
                'ram' => '8 GB',
                'gpu' => 'NVIDIA GTX 970 / AMD Radeon RX 470',
                'storage' => '70 GB',
                'game_id' => 3
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10 64-bit',
                'cpu' => 'Intel Core i7-4790 / AMD Ryzen 3 3200G',
                'ram' => '12 GB',
                'gpu' => 'NVIDIA RTX 2060 SUPER / AMD Radeon RX 5700 XT',
                'storage' => '70 GB',
                'game_id' => 3
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 10 64-bit',
                'cpu' => 'Intel i5 4690 / AMD FX 8350',
                'ram' => '8 GB',
                'gpu' => 'NVIDIA GTX 970 / AMD Radeon RX 480 (4GB+ VRAM)',
                'storage' => '150 GB',
                'game_id' => 4
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10 64-bit',
                'cpu' => 'Intel i7 8700K / AMD Ryzen 5 3600',
                'ram' => '16 GB',
                'gpu' => 'NVIDIA RTX 2060 Super / AMD RX 5700 XT (8GB+ VRAM)',
                'storage' => '150 GB',
                'game_id' => 4
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows Vista or greater',
                'cpu' => '2.0 Ghz',
                'ram' => '2 GB',
                'gpu' => '256 MB video memory, Shader Model 3.0+',
                'storage' => '500 MB',
                'game_id' => 5
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10',
                'cpu' => '2.5 Ghz',
                'ram' => '4 GB',
                'gpu' => '2 GB video memory',
                'storage' => '500 MB',
                'game_id' => 5
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 7 SP1',
                'cpu' => 'Dual Core 2.4 GHz',
                'ram' => '4 GB',
                'gpu' => '2 GB VRAM / Intel HD 4000 / GeForce 7600 / Radeon HD 2600',
                'storage' => '15 GB',
                'game_id' => 6
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10',
                'cpu' => 'Dual Core 3.5 GHz',
                'ram' => '8 GB',
                'gpu' => '2 GB VRAM / GeForce GTX 570',
                'storage' => '15 GB',
                'game_id' => 6
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 7/8.1 64-bit',
                'cpu' => 'Intel CPU Core i5-2500K 3.3GHz / AMD A10-5800K APU (3.8GHz)',
                'ram' => '6 GB',
                'gpu' => 'Nvidia GPU GeForce GTX 660 / AMD GPU Radeon HD 7870',
                'storage' => '35 GB',
                'game_id' => 7
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10 64-bit',
                'cpu' => 'Intel CPU Core i7 3770 3.4 GHz / AMD CPU AMD FX-8350 4 GHz',
                'ram' => '8 GB',
                'gpu' => 'Nvidia GPU GeForce GTX 770 / AMD GPU Radeon R9 290',
                'storage' => '35 GB',
                'game_id' => 7
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 10 64 Bit (latest update)',
                'cpu' => 'Intel Core i5 @ 3.30 GHz / AMD Ryzen 3 @ 3.1 GHz',
                'ram' => '8 GB',
                'gpu' => 'NVIDIA GTX 970 / AMD Radeon RX 470',
                'storage' => '50 GB',
                'game_id' => 8
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10 64 Bit (latest update)',
                'cpu' => 'Intel Core i7-6700K / AMD Ryzen 7 1800X',
                'ram' => '16 GB',
                'gpu' => 'NVIDIA GTX 1080 / AMD Radeon RX Vega 56',
                'storage' => '50 GB',
                'game_id' => 8
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 7 SP1+',
                'cpu' => 'SSE2 instruction set support',
                'ram' => '1 GB',
                'gpu' => 'DX9 (shader model 2.0) capable',
                'storage' => '250 MB',
                'game_id' => 9
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10',
                'cpu' => 'Any modern CPU',
                'ram' => '2 GB',
                'gpu' => 'DX10 (shader model 3.0) or better',
                'storage' => '250 MB',
                'game_id' => 9
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1',
                'cpu' => 'Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz',
                'ram' => '4 GB',
                'gpu' => 'NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11)',
                'storage' => '72 GB',
                'game_id' => 10
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10 64 Bit, Windows 8.1 64 Bit, Windows 8 64 Bit',
                'cpu' => 'Intel Core i5 3470 @ 3.40GHz (4 CPUs) / AMD X8 FX-8350 @ 4 GHz',
                'ram' => '8 GB',
                'gpu' => 'NVIDIA GTX 660 2GB / AMD HD 7870 2GB',
                'storage' => '72 GB',
                'game_id' => 10
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 10 - April 2018 Update (v1803)',
                'cpu' => 'Intel Core i5-2500K / AMD FX-6300',
                'ram' => '8 GB',
                'gpu' => 'Nvidia GeForce GTX 770 2GB / AMD Radeon R9 280 3GB',
                'storage' => '150 GB',
                'game_id' => 11
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10 - April 2018 Update (v1803)',
                'cpu' => 'Intel Core i7-4770K / AMD Ryzen 5 1500X',
                'ram' => '12 GB',
                'gpu' => 'Nvidia GeForce GTX 1060 6GB / AMD Radeon RX 480 4GB',
                'storage' => '150 GB',
                'game_id' => 11
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 10 64-bit',
                'cpu' => 'Intel Core i5-2500k (4 core 3.3 GHz) or AMD Ryzen 3 1200 (4 core 3.1 GHz)',
                'ram' => '8 GB',
                'gpu' => 'NVIDIA GTX 960 (4 GB) or AMD R9 290X (4 GB)',
                'storage' => '70 GB',
                'game_id' => 12
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10 64-bit',
                'cpu' => 'Intel Core i5-6600k (4 core 3.5 GHz) or AMD Ryzen 5 2400G (4 core 3.6 GHz)',
                'ram' => '16 GB',
                'gpu' => 'NVIDIA GTX 1060 (6 GB) or AMD RX 570 (8 GB)',
                'storage' => '70 GB',
                'game_id' => 12
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows XP, Vista, 7',
                'cpu' => '3.0 GHz P4, Dual Core 2.0 (or higher) / Athlon 64 X2 2.0 (or higher)',
                'ram' => '1 GB',
                'gpu' => 'DirectX 9 capable video card with 128 MB, Pixel Shader 2.0b (ATI 9600+ / NVIDIA 6600+ / Intel (Message)',
                'storage' => '8 GB',
                'game_id' => 13
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 7',
                'cpu' => 'Quad Core 2.6+ / Phenom II X4 3.0+',
                'ram' => '2 GB',
                'gpu' => 'DirectX 9 with 512 MB, Pixel Shader 2.0b (NVIDIA GeForce 8600+ / ATI Radeon HD2600+)',
                'storage' => '8 GB',
                'game_id' => 13
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 7 (32/64-bit)/Vista/XP',
                'cpu' => '3.0 GHz Intel Pentium 4 or AMD Athlon 64 3000+',
                'ram' => '512 MB',
                'gpu' => '6.0 Pixel Shader / DirectX 9 capable GPU',
                'storage' => '8 GB',
                'game_id' => 14
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 7 (32/64-bit)/Vista/XP',
                'cpu' => '3 GHz Intel Pentium 4 or AMD Athlon 64 3000+',
                'ram' => '1 GB',
                'gpu' => 'DirectX 9 capable with 128 MB, 60 Hz monitor',
                'storage' => '8 GB',
                'game_id' => 14
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 7 or newer',
                'cpu' => '2.0+ GHz Dual Core',
                'ram' => '2 GB',
                'gpu' => '256 MB VRAM / OpenGL 3.0+ compatible',
                'storage' => '1200 MB',
                'game_id' => 15
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10',
                'cpu' => '3.0+ GHz Quad Core',
                'ram' => '4 GB',
                'gpu' => '2 GB VRAM / OpenGL 3.0+ compatible',
                'storage' => '1200 MB',
                'game_id' => 15
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 7',
                'cpu' => 'Intel Core 2 Duo E5200',
                'ram' => '4 GB',
                'gpu' => 'GeForce 9800GTX+ (1GB)',
                'storage' => '9 GB',
                'game_id' => 16
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10',
                'cpu' => 'Intel Core i5-650',
                'ram' => '8 GB',
                'gpu' => 'GeForce GTX 560 (1GB)',
                'storage' => '9 GB',
                'game_id' => 16
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 7/8/10 (64-bit)',
                'cpu' => 'Intel Core 2 Duo Q6867 (2.7 GHz) or better',
                'ram' => '2 GB',
                'gpu' => 'DirectX 11 graphics device with 512 MB video memory',
                'storage' => '20 GB',
                'game_id' => 17
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10 (64-bit)',
                'cpu' => 'Intel Core i7-920 (2.67 GHz) or better',
                'ram' => '8 GB',
                'gpu' => 'DirectX 11 graphics device with 1 GB video memory',
                'storage' => '20 GB',
                'game_id' => 17
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 10 64-bit',
                'cpu' => 'Intel Core i3-4160 / AMD equivalent',
                'ram' => '8 GB',
                'gpu' => 'NVIDIA GTX 950 / AMD Radeon RX 470',
                'storage' => '75 GB',
                'game_id' => 18
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10 64-bit',
                'cpu' => 'Intel Core i5-4670 / AMD Ryzen 5 1600',
                'ram' => '16 GB',
                'gpu' => 'NVIDIA GTX 1060 / AMD Radeon RX 580',
                'storage' => '75 GB',
                'game_id' => 18
            ],
             [
                'type' => 'minimum',
                'os' => 'Windows 10 (64-bit, Version 1909)',
                'cpu' => 'Intel Core i5-4460 3.2 GHz / AMD Ryzen 3 1200 3.1 GHz',
                'ram' => '8 GB',
                'gpu' => 'NVIDIA GTX 960 (4GB VRAM) / AMD Radeon RX 570 (4GB VRAM)',
                'storage' => '50 GB',
                'game_id' => 19
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10 (64-bit, Version 1909)',
                'cpu' => 'Intel Core i7-4790 3.6 GHz / AMD Ryzen 5 3600 3.6 GHz',
                'ram' => '12 GB',
                'gpu' => 'NVIDIA GTX 1070 / AMD Radeon RX Vega 56',
                'storage' => '50 GB',
                'game_id' => 19
            ],
            [
                'type' => 'minimum',
                'os' => 'Windows 10 64-bit (versión 1909 o superior)',
                'cpu' => 'Intel Core i3-8100 / AMD Ryzen 3 1300X',
                'ram' => '16 GB',
                'gpu' => 'NVIDIA GTX 1650 / AMD Radeon RX 5500 XT (4GB VRAM)',
                'storage' => '150 GB',
                'game_id' => 20
            ],
            [
                'type' => 'recommended',
                'os' => 'Windows 10 64-bit (versión 1909 o superior)',
                'cpu' => 'Intel Core i5-8600 / AMD Ryzen 5 3600',
                'ram' => '16 GB',
                'gpu' => 'NVIDIA RTX 3060 / AMD Radeon RX 5700',
                'storage' => '150 GB',
                'game_id' => 20
            ],
        ]);
    }
}

