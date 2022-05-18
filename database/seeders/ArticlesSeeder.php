<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
            'article_id' => 1,
            'titulo' => '¿Cuando incorporaremos otras marcas?',
            'imagen' => 'articulo-1.jpg',
            'articulo' => 'En T-Watch tratamos de brindar la mejor calidad y atención posible, y también nos encargamos de garantizarle un precio justo al cliente acorde al reloj. Dicho esto, todavía estamos trabajando en incorporar nuevas marcas, tratando de llegar a acuerdos con nuevos proveedores. A medida que fuimos comunicándonos con las distintas empresas, se han establecido  distintas resoluciones a través del tiempo, las cuales se verán reflejadas para fines de este año. Estamos muy ansiosos de anunciar que para el fin de 2021 5 nuevas marcas se unirán a la familia de T-Watch y en inicios de 2022 2 nuevas marcas se empezarán a comercializar también. Como siempre, T-Watch fue destacada por estar al lado del cliente desde el primer momento y escuchar la nuevas necesidades tendencias del mercado.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
            'article_id' => 2,
            'titulo' => 'Nuevos relojes que se vienen para 2022',
            'imagen' => 'articulo-2.jpg',
            'articulo' => 'Que Rolex llegue a la fiesta con una nueva versión de su resistente reloj de aventuras, el Explorer II, era de esperarse: el reloj cumple 50 años este año y no había recibido una actualización en eones. Efectivamente, ha caído un nuevo Explorer II … y es prácticamente igual que el anterior, al menos en el exterior. Todavía 42 mm, con una caja y un bisel de acero cepillado y esa inconfundible manecilla naranja GMT para una segunda zona horaria, tanto en la versión de esfera blanca como en la negra. En el interior, sin embargo, el nuevo movimiento Calibre 3285 refleja lo mejor de la ingeniería de Rolex, con 70 horas de reserva de marcha, espiral de silicona, el sistema antichoque patentado Paraflex, mejor eficiencia, más precisión. En otras palabras, es exactamente el mismo reloj, solo que un poco mejor. Suerte al intentar conseguir uno.
            Destacando entre otras siete nuevas referencias, la edición limitada de TAG Aquaracer Professional 300 Ref 844 se basa en el nuevo diseño de 43 mm completo con caja de titanio y reserva de marcha de 38 horas, pero lo más importante es que este modelo ha sido diseñado para hacer referencia a la estética del clásico buzo 844 de Heuer desde 1978.Junto con esa caja a prueba de presión en titanio de grado 5, los elementos de la esfera que hacen eco del original incluyen lume bronceado falso, una escala roja de 24 horas y una correa de caucho negra con perforaciones octogonales a juego con la caja, pero ahora con un sistema de ajuste en el cierre. Esta versión está limitada a solo 844 piezas.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
