<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DigitalArt;

class DigitalArtSeeder extends Seeder
{
    public function run(): void
    {
        $artworks = [
            [
                'title' => 'Mecha Workshop',
                'artist' => 'Darren Tan',
                'resolution' => '3840x2160 px',
                'price' => 150000.00,
                'image' => 'assets/images/mecha_workshop.jpeg',
                'software_used' => 'Adobe Photoshop',
            ],
            [
                'title' => 'Cyber Samurai',
                'artist' => 'Wang Ling (Wlop)',
                'resolution' => '3000x4500 px',
                'price' => 200000.00,
                'image' => 'assets/images/cyber_samurai.jpg',
                'software_used' => 'Adobe Photoshop & Paint Tool SAI',
            ],
            [
                'title' => 'Forest Shrine',
                'artist' => 'Sora Kim',
                'resolution' => '4096x2304 px',
                'price' => 120000.00,
                'image' => 'assets/images/forest_shrine.jpg',
                'software_used' => 'Procreate & Adobe Photoshop',
            ],
            [
                'title' => 'Neon Alleyway',
                'artist' => 'Aleksandr Kuskov',
                'resolution' => '3840x2160 px',
                'price' => 175000.00,
                'image' => 'assets/images/neon_alleyway.jpg',
                'software_used' => 'Blender & Adobe Photoshop',
            ],
            [
                'title' => 'Astronaut in Dust',
                'artist' => 'Arkadiusz Rek',
                'resolution' => '2560x1440 px',
                'price' => 100000.00,
                'image' => 'assets/images/astronaut_dust.jpg',
                'software_used' => 'Adobe Photoshop',
            ],
            [
                'title' => 'Dragon Rider',
                'artist' => 'Donglu Yu',
                'resolution' => '3840x1600 px',
                'price' => 225000.00,
                'image' => 'assets/images/dragon_rider.jpg',
                'software_used' => 'Adobe Photoshop',
            ],
            [
                'title' => 'Steampunk Inventor',
                'artist' => 'Goro Fujita',
                'resolution' => '3000x3000 px',
                'price' => 130000.00,
                'image' => 'assets/images/steampunk_inventor.jpg',
                'software_used' => 'Procreate',
            ],
            [
                'title' => 'Ancient Ruin',
                'artist' => 'Raphael Lacoste',
                'resolution' => '4096x2160 px',
                'price' => 250000.00,
                'image' => 'assets/images/ancient_ruin.jpg',
                'software_used' => 'Adobe Photoshop',
            ],
            [
                'title' => 'Mystic Forest',
                'artist' => 'Lois van Baarle (Loish)',
                'resolution' => '3000x4000 px',
                'price' => 190000.00,
                'image' => 'assets/images/mystic_forest.jpg',
                'software_used' => 'Adobe Photoshop & Wacom',
            ],
            [
                'title' => 'Cyber Runner',
                'artist' => 'Johnson Ting',
                'resolution' => '3840x2160 px',
                'price' => 210000.00,
                'image' => 'assets/images/cyber_runner.jpg',
                'software_used' => 'Adobe Photoshop & Keyshot',
            ],
        ];

        foreach ($artworks as $art) {
            DigitalArt::updateOrCreate(
                ['title' => $art['title'], 'artist' => $art['artist']],
                $art
            );
        }
    }
}