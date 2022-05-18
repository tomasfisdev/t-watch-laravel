<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'product_id' =>1 ,
            'brands_id' => 1,
            'imagen'=> 'day_date_40.jpg',
            'nombre' => 'Day Date 40',
            'genero' => 'Hombre',
            'descripcion' => 'El Day‑Date fue el primer reloj en indicar el día de la semana con todas las letras cuando se presentó por primera vez en 1956.El bisel estriado de Rolex es una marca de distinción. En un principio, el diseño estriado del bisel Oyster tenía una función específica: servía para atornillar el bisel a la caja garantizando la hermeticidad del reloj.',
            'precio' =>39500 ,
            'estrellas' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
            'product_id' =>2 ,
            'brands_id' => 1,
            'imagen'=> 'datejust_41.jpg',
            'nombre' => 'Datejust 41',
            'genero' => 'Hombre',
            'descripcion' => 'Los reflejos luminosos sobre las asas y los flancos de la carrura resaltan las refinadas formas de su caja Oyster 41 mm, coronada con un bisel estriado. En lo referente a la estética, el Datejust ha conservado con el paso de los años los códigos inmutables que aún hoy en día hacen de él, en su versión tradicional, uno de los relojes más reconocidos y reconocibles.',
            'precio' => 14300,
            'estrellas' =>5 ,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
            'product_id' =>3 ,
            'brands_id' => 1,
            'imagen'=> 'oyster_perpetual_41.jpg',
            'nombre' => 'Oyster Perpetual 41',
            'genero' => 'Hombre',
            'descripcion' => 'La estética de los modelos Oyster Perpetual los diferencia de los demás como símbolos de estilo clásico y universal. Respetando la línea de los orígenes pioneros de Rolex, encarnan la forma y función atemporales.',
            'precio' =>6400 ,
            'estrellas' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
            'product_id' =>4 ,
            'brands_id' => 1,
            'imagen'=> 'lady_datejust.jpg',
            'nombre' => 'Lady Datejust',
            'genero' => 'Mujer',
            'descripcion' => 'Los reflejos luminosos sobre las asas y los flancos de la carrura resaltan las refinadas formas de su caja Oyster de 28 mm, coronada con un biselengastado de diamantes. Arquetipo del clásico femenino de Rolex, el Lady‑Datejust pertenece a la línea del Datejust, modelo emblemático que impuso su estilo y sus prestaciones relojeras',
            'precio' =>41250 ,
            'estrellas' =>4 ,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
            'product_id' =>5,
            'brands_id' => 2,
            'imagen'=> 'porsche_chronograph.jpg',
            'nombre' => 'Porsche Chronograph',
            'genero' => 'Hombre',
            'descripcion' => 'Impulsado por una historia en común de innovación y automovilismo, el TAG Heuer Carrera Porsche Chronograph Special Edition es una combinación perfecta de los universos de Porsche y TAG Heuer. Un emblemático reloj de acero con múltiples referencias a los códigos de Porsche y TAG Heuer en las formas, los colores y el efecto asfaltado creado especialmente para este reloj que expresa la pasión por el asfalto.',
            'precio' => 6200,
            'estrellas' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
            'product_id' =>6 ,
            'brands_id' => 2,
            'imagen'=> 'monaco.jpg',
            'nombre' => 'Monaco',
            'genero' => 'Mujer',
            'descripcion' => 'Una pieza de estilo resuelto cuya estética atrae todas las miradas: 12 diamantes blancos en una esfera blanca nacarada con una correa moderna y extremadamente femenina de piel de cocodrilo blanca. Su distintiva caja cuadrada de 37 mm está elaborada en acero pulido y lleva la corona a las 3.',
            'precio' =>5120 ,
            'estrellas' =>3 ,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
            'product_id' =>7 ,
            'brands_id' => 2,
            'imagen'=> 'formula_1.jpg',
            'nombre' => 'Formula 1',
            'genero' => 'Hombre',
            'descripcion' => 'Un cronógrafo inspirado en el mundo del motor con esfera de efecto asfaltado, perfecto para los amantes de la velocidad. Versátil, robusto y diseñado para triunfar, este reloj de carreras es estanco hasta los 200 metros gracias a la corona enroscada en color negro.',
            'precio' =>6120 ,
            'estrellas' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
            'product_id' =>8 ,
            'brands_id' => 2,
            'imagen'=> 'link.jpg',
            'nombre' => 'Link',
            'genero' => 'Mujer',
            'descripcion' => 'Un Link Lady Quartz de última tendencia con una elegante caja de acero de 32 mm. Los matices marrones y grises con efecto rayos de sol de la esfera color topo cambian de tonalidad con cada movimiento de muñeca. Unos detalles de espléndido oro rosa completan su suntuoso estilo.',
            'precio' => 4250,
            'estrellas' =>4 ,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ], 
        ]);
    }
}
