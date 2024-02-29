<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::create([
            'nombre' => 'Gan Tornado 2x2',
            'descripcion' => 'Un cubo de Rubik más pequeño pero igual de desafiante. Ideal para llevar contigo a todas partes.',
            'categoria' => '2x2',
            'marca' => 'GAN',
            'imagen' => 'cubo-2x2.jpg',
            'precio' => 7.99,
            'stock' => 75,
        ]);
        
        Product::create([
            'nombre' => 'MoYu Aolong 3x3',
            'descripcion' => 'Un cubo de Rubik 3x3 diseñado por MoYu. Conocido por su suavidad y velocidad.',
            'categoria' => '3x3',
            'marca' => 'MoYu',
            'imagen' => 'cubo-3x3-aolong.jpg',
            'precio' => 12.99,
            'stock' => 60,
        ]);

        Product::create([
            'nombre' => 'QiYi Thunderclap 4x4',
            'descripcion' => 'El cubo de Rubik 4x4 Thunderclap de QiYi es una opción popular entre los speedcubers por su rendimiento confiable.',
            'categoria' => '4x4',
            'marca' => 'QiYi',
            'imagen' => 'cubo-4x4-thunderclap.jpg',
            'precio' => 16.99,
            'stock' => 45,
        ]);

        Product::create([
            'nombre' => 'Gan XS 5x5',
            'descripcion' => 'El Gan XS 5x5 es un cubo de Rubik 5x5 de alta gama conocido por su rendimiento excepcional y diseño innovador.',
            'categoria' => '5x5',
            'marca' => 'GAN',
            'imagen' => 'cubo-5x5-xs.jpg',
            'precio' => 24.99,
            'stock' => 30,
        ]);

        Product::create([
            'nombre' => 'YJ YuLong 2x2',
            'descripcion' => 'El cubo de Rubik 2x2 YuLong de YJ es una opción económica pero de alta calidad para principiantes y speedcubers.',
            'categoria' => '2x2',
            'marca' => 'YJ',
            'imagen' => 'cubo-2x2-yulong.jpg',
            'precio' => 6.99,
            'stock' => 80,
        ]);

        Product::create([
            'nombre' => 'QiYi Warrior W 3x3',
            'descripcion' => 'El cubo de Rubik 3x3 Warrior W de QiYi es un cubo económico pero de gran rendimiento, perfecto para principiantes y speedcubers intermedios.',
            'categoria' => '3x3',
            'marca' => 'QiYi',
            'imagen' => 'cubo-3x3-warrior.jpg',
            'precio' => 8.99,
            'stock' => 90,
        ]);

        Product::create([
            'nombre' => 'MoFang JiaoShi MF3RS 4x4',
            'descripcion' => 'El cubo de Rubik 4x4 MF3RS de MoFang JiaoShi es un cubo económico con un buen rendimiento. Ideal para aquellos que buscan un 4x4 de calidad a un precio asequible.',
            'categoria' => '4x4',
            'marca' => 'MoFang JiaoShi',
            'imagen' => 'cubo-4x4-mf3rs.jpg',
            'precio' => 10.99,
            'stock' => 70,
        ]);

        Product::create([
            'nombre' => 'GAN 356 X 3x3',
            'descripcion' => 'El GAN 356 X es un cubo de Rubik 3x3 de alta gama con un ajuste personalizable y un rendimiento excepcional.',
            'categoria' => '3x3',
            'marca' => 'GAN',
            'imagen' => 'cubo-3x3-356x.jpg',
            'precio' => 29.99,
            'stock' => 40,
        ]);

        Product::create([
            'nombre' => 'QiYi MS 5x5',
            'descripcion' => 'El cubo de Rubik 5x5 MS de QiYi es un cubo de gama media con un rendimiento suave y estable, perfecto para speedcubers avanzados.',
            'categoria' => '5x5',
            'marca' => 'QiYi',
            'imagen' => 'cubo-5x5-ms.jpg',
            'precio' => 18.99,
            'stock' => 55,
        ]);

        Product::create([
            'nombre' => 'Yuxin Little Magic 2x2',
            'descripcion' => 'El cubo de Rubik 2x2 Little Magic de Yuxin es conocido por su precio asequible y su rendimiento sorprendentemente bueno. Perfecto para principiantes y speedcubers casuales.',
            'categoria' => '2x2',
            'marca' => 'Yuxin',
            'imagen' => 'cubo-2x2-little-magic.jpg',
            'precio' => 5.99,
            'stock' => 85,
        ]);

        Product::create([
            'nombre' => 'MoYu Weishi GTS 4x4',
            'descripcion' => 'El cubo de Rubik 4x4 Weishi GTS de MoYu es uno de los cubos 4x4 más populares entre los speedcubers. Con un diseño suave y robusto, es una excelente opción para competiciones y práctica.',
            'categoria' => '4x4',
            'marca' => 'MoYu',
            'imagen' => 'cubo-4x4-weishi-gts.jpg',
            'precio' => 21.99,
            'stock' => 35,
        ]);

    }
}
