<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

use App\Models\Blog;

class blog_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        

        Blog::create([
            'title' => 'El éxito está en el juego: cómo el Game Based Learning puede potenciar el liderazgo y el trabajo en equipo en las empresas',
            'blog' => '<p><em><strong>En los &uacute;ltimos a&ntilde;os, el Game Based Learning (aprendizaje basado en juegos) se ha convertido en una herramienta cada vez m&aacute;s popular en el mundo empresarial. El uso de juegos en la formaci&oacute;n de los trabajadores no solo mejora la motivaci&oacute;n y el inter&eacute;s en el aprendizaje, sino que tambi&eacute;n puede potenciar el liderazgo y el trabajo en equipo en las empresas.</strong></em></p>
            <p>En este art&iacute;culo, exploraremos c&oacute;mo el Game Based Learning puede ayudar a las empresas a desarrollar estas habilidades en sus colaboradores.</p>
            <p><strong>1. Liderazgo a trav&eacute;s de la toma de decisiones</strong></p>
            <p>El GBL ayuda a los colaboradores a desarrollar habilidades de liderazgo a trav&eacute;s de la toma de decisiones. En muchos situaciones, los jugadores deben elegir sobre su progreso en el juego en situaciones de presi&oacute;n, lo que les permite practicar y desarrollar habilidades en un ambiente controlado. De esta manera ganar&aacute;n la confianza necesaria para enfrentar situaciones en el mundo real.</p>
            <p><strong>2. Fomento del trabajo en equipo</strong></p>
            <p>Es una herramienta efectiva para fomentar el trabajo en equipo. Las din&aacute;micas de los juegos requieren que los jugadores trabajen juntos para lograr un objetivo com&uacute;n, lo que ayuda a los colaboradores a desarrollar habilidades de colaboraci&oacute;n y comunicaci&oacute;n efectiva en un ambiente l&uacute;dico.</p>
            <p><strong>3. Entrenamiento de habilidades espec&iacute;ficas&nbsp;</strong></p>
            <p>El Game Based Learning tambi&eacute;n puede ser utilizado para entrenar habilidades espec&iacute;ficas. Por ejemplo, los juegos de simulaci&oacute;n son muy utilizados para permitir a los colaboradores prepararse al representar distintas situaciones y contextos, que ayuden a los usuarios a anticiparse a las decisiones del mundo real. Desde capacitaciones t&eacute;cnicas hasta habilidades blandas, son ideales para entrenar en un ambiente controlado, sin riesgos y entretenido.</p>
            <p><strong>4. Retroalimentaci&oacute;n y mejora continua</strong></p>
            <p>El uso de videojuegos en la formaci&oacute;n permite un feedback inmediato. Los colaboradores pueden recibir retroalimentaci&oacute;n en tiempo real sobre su desempe&ntilde;o y habilidades, lo que les permite identificar &aacute;reas de mejora y ajustar sus decisiones en el juego de manera efectiva.</p>
            <p>En conclusi&oacute;n, el Game Based Learning puede ser una herramienta efectiva para el desarrollo de los colaboradores. Al utilizar videojuegos en la formaci&oacute;n, se pueden desarrollar habilidades cr&iacute;ticas de liderazgo y colaboraci&oacute;n en un ambiente l&uacute;dico y controlado.</p>
            <p>Son una forma divertida de aprender, ya que implican retos y recompensas que generan una motivaci&oacute;n intr&iacute;nseca en el jugador. Adem&aacute;s, pueden ser dise&ntilde;ados de forma personalizada para adaptarse a las necesidades espec&iacute;ficas de la empresa y de sus colaboradores. B&aacute;sicamente, el &eacute;xito est&aacute; en el juego, y las empresas que lo implementen en sus formaciones de empleados podr&aacute;n cosechar grandes beneficios.&nbsp;Gracias.&nbsp;<a href="https://www.tgacompany.com/">TGA</a></p>',
            
            'picture' =>'blog-seed-picture-1.jpeg',
            'published' => true,
            'category_id' => 1,
        ]);

        Blog::create([
            'title' => '¡A jugar se ha dicho! Cómo los videojuegos pueden revolucionar la formación en las empresas',
            'blog' => '<h3 class="reader-text-block__heading2"><strong><em>En un mundo cada vez m&aacute;s digital, las empresas buscan formas innovadoras de mejorar la formaci&oacute;n de sus colaboradores. Una de las opciones que ha cobrado fuerza en los &uacute;ltimos a&ntilde;os es el uso de videojuegos como herramienta de aprendizaje.&nbsp;</em></strong></h3>
            <p class="reader-text-block__heading2">A continuaci&oacute;n, exploraremos c&oacute;mo los videojuegos pueden impactar en las capacitaciones en las empresas.</p>
            <p class="reader-text-block__paragraph"><strong>El aprendizaje se vuelve m&aacute;s atractivo y motivador</strong></p>
            <p class="reader-text-block__paragraph">Son una forma divertida de aprender, ya que implican desaf&iacute;os y recompensas que generan una motivaci&oacute;n intr&iacute;nseca en el jugador. Adem&aacute;s, pueden ser dise&ntilde;ados de forma personalizada para adaptarse a las necesidades espec&iacute;ficas de la empresa, el contenido y el perfil de sus colaboradores.</p>
            <p class="reader-text-block__paragraph"><strong>Los videojuegos fomentan el trabajo en equipo</strong></p>
            <p class="reader-text-block__paragraph">Muchos videojuegos requieren que los jugadores trabajen juntos para lograr objetivos comunes. Al utilizar videojuegos en las capacitaciones, se pueden desarrollar habilidades de trabajo en equipo de una manera m&aacute;s pr&aacute;ctica y entretenida.&nbsp;</p>
            <p class="reader-text-block__paragraph"><strong>Los videojuegos permiten feedback continuo</strong></p>
            <p class="reader-text-block__paragraph">Permiten una evaluaci&oacute;n continua del progreso del jugador, lo que resulta muy necesario en los procesos de formaci&oacute;n de los colaboradores.&nbsp;El feedback inmediato sobre su desempe&ntilde;o, ayuda a ajustar sus decisiones en tiempo real.</p>
            <p class="reader-text-block__paragraph"><strong>Los videojuegos pueden simular situaciones de la vida real</strong></p>
            <p class="reader-text-block__paragraph">Al utilizar videojuegos en la capacitaci&oacute;n, se consigue simular situaciones de la vida real en un ambiente controlado. Los usuarios pueden practicar habilidades espec&iacute;ficas en situaciones simuladas, sin riesgo, y esto les dar&aacute; la confianza necesaria para enfrentar luego situaciones en el mundo real.</p>
            <p class="reader-text-block__paragraph">En conclusi&oacute;n, el uso de videojuegos en la formaci&oacute;n corporativa, es una excelente opci&oacute;n para las empresas que buscan mejorar la experiencia de sus colaboradores, y la eficiencia en la adopci&oacute;n del contenido de las capacitaciones.</p>
            <p class="reader-text-block__paragraph">Ofrecen un ambiente de aprendizaje innovador, atractivo y motivador, acorde con las expectativas de un mercado laboral cada vez mas gamer. En resumen, &iexcl;a jugar se ha dicho!. Gracias.&nbsp;<a href="https://www.tgacompany.com/">TGA</a></p>',
            
            'picture' =>'blog-seed-picture-2.jpeg',
            'published' => true,
            'category_id' => 1,
        ]);

        Blog::create([
            'title' => 'Game Based Learning: cómo convertir el aprendizaje en una experiencia divertida y efectiva en las empresas',
            'blog' => '<p class="reader-text-block__paragraph">En la era digital, la formaci&oacute;n en las empresas debe adaptarse a los cambios que la tecnolog&iacute;a y las generaciones traen consigo. El aprendizaje se vuelve m&aacute;s efectivo cuando es interactivo, divertido y atractivo, y es aqu&iacute; donde el Game Based Learning (GBL) se convierte en una soluci&oacute;n ideal. Este enfoque combina el aprendizaje y los juegos.&nbsp;</p>
            <h3 class="reader-text-block__heading2"><strong>&iquest;Qu&eacute; es el Game Based Learning?</strong></h3>
            <p class="reader-text-block__paragraph">Es una metodolog&iacute;a de ense&ntilde;anza que mezcla los elementos de los juegos con los objetivos de aprendizaje, por ejemplo en las capacitaciones corporativas. No es solo una soluci&oacute;n innovadora, sino que tambi&eacute;n es muy efectivo para atraer, fidelizar al talento y mejorar la adopci&oacute;n del conocimiento a largo plazo.</p>
            <h3 class="reader-text-block__heading2"><strong>Ventajas</strong></h3>
            <p class="reader-text-block__paragraph"><strong>Fomenta el aprendizaje activo:&nbsp;</strong>Promueve la participaci&oacute;n activa de los colaboradores en su propio aprendizaje, lo que aumenta su inter&eacute;s, entusiasmo y compromiso con los ciclos de formaci&oacute;n.</p>
            <p class="reader-text-block__paragraph"><strong>Crea una experiencia atractiva:&nbsp;</strong>Son una forma natural de aprendizaje, ya que ofrecen una experiencia divertida y atractiva que puede mantener a los usuarios de manera voluntaria comprometidos con el contenido.</p>
            <p class="reader-text-block__paragraph"><strong>Permite el aprendizaje pr&aacute;ctico:&nbsp;</strong>La simulaci&oacute;n de situaciones reales en los videojuegos permite aplicar los conocimientos y habilidades adquiridos en ambientes controlados y libres de riesgo.</p>
            <p class="reader-text-block__paragraph"><strong>Facilita la retroalimentaci&oacute;n inmediata:&nbsp;</strong>Ofrecen feedback inmediato y constante, lo que permite saber si est&aacute;n en el camino correcto o necesitan mejorar en alg&uacute;n aspecto.&nbsp;</p>
            <p class="reader-text-block__paragraph"><strong>Mejora la retenci&oacute;n del conocimiento:&nbsp;</strong>Mejoran la retenci&oacute;n del conocimiento a largo plazo, ya que la repetici&oacute;n constante de desaf&iacute;os y elecciones, mejora la capacidad del cerebro para recordar la informaci&oacute;n.</p>
            <h3 class="reader-text-block__heading2"><strong>C&oacute;mo implementar el Game Based Learning en las empresas</strong></h3>
            <p class="reader-text-block__paragraph">▸&nbsp;<strong>Identificar los objetivos de aprendizaje:</strong></p>
            <p class="reader-text-block__paragraph">Antes de comenzar con la formaci&oacute;n, es importante identificar los objetivos y metas espec&iacute;ficas que se desean alcanzar con el GBL.</p>
            <p class="reader-text-block__paragraph">▸&nbsp;<strong>Selecci&oacute;n de los juegos adecuados:</strong></p>
            <p class="reader-text-block__paragraph">Elegir juegos que sean interesantes y desafiantes, pero tambi&eacute;n que ofrezcan una experiencia de aprendizaje efectiva para los objetivos definidos.</p>
            <p class="reader-text-block__paragraph">▸&nbsp;<strong>Integraci&oacute;n de la tecnolog&iacute;a:</strong></p>
            <p class="reader-text-block__paragraph">Esto puede incluir la instalaci&oacute;n de software espec&iacute;fico y dispositivos adecuados necesarios para la implementaci&oacute;n.</p>
            <p class="reader-text-block__paragraph"><strong>▸ Evaluaci&oacute;n</strong>&nbsp;<strong>de resultados:</strong></p>
            <p class="reader-text-block__paragraph">Medir los resultados del Game Based Learning, para poder evaluar la efectividad de la formaci&oacute;n y realizar mejoras en el futuro.</p>
            <p class="reader-text-block__paragraph">El GBL es una soluci&oacute;n innovadora para las capacitaciones en las empresas, que puede mejorar significativamente el compromiso y la retenci&oacute;n del conocimiento de los colaboradores. La combinaci&oacute;n de videojuego y aprendizaje permite aprender de manera divertida, activa y pr&aacute;ctica, lo que resulta muy efectivo para cptar la voluntad de los colaboradores.</p>
            <p class="reader-text-block__paragraph">Si bien la implementaci&oacute;n del Game Based Learning en las empresas puede requerir una inversi&oacute;n inicial, los beneficios a largo plazo son significativos.&nbsp;Gracias.&nbsp;<a href="https://www.tgacompany.com/">TGA</a></p>',
            
            'picture' =>'blog-seed-picture-3.jpeg',
            'published' => true,
            'category_id' => 1,
        ]);


        Blog::create([
            'title' => 'El impacto positivo del gaming en la sociedad y la educación',
            'blog' => '<h3 class="reader-text-block__heading2"><em>El gaming ha sido una de las industrias que m&aacute;s ha crecido en los &uacute;ltimos a&ntilde;os, no solo ha cambiado la forma en que nos entretenemos, sino tambi&eacute;n como interactuamos con los dem&aacute;s y aprendemos.</em></h3>
            <p class="reader-text-block__paragraph">Aunque a menudo se critica a los videojuegos por ser adictivos o violentos, m&uacute;ltiples estudios demuestran que tienen beneficios tanto para las personas como para la sociedad en general. En este breve art&iacute;culo, exploraremos algunos de los beneficios del gaming y c&oacute;mo ha impactado en nuestra vida diaria.</p>
            <p class="reader-text-block__paragraph"><strong>Mejora de habilidades cognitivas:</strong>&nbsp;Son una forma divertida de mejorar la concentraci&oacute;n, la memoria y la toma de decisiones. Seg&uacute;n un estudio realizado por la Universidad de Rochester, los videojuegos pueden mejorar la capacidad de los jugadores para detectar cambios en el entorno y resolver problemas m&aacute;s r&aacute;pidamente, contribuyen a mejorar la atenci&oacute;n y la memoria a corto plazo.</p>
            <p class="reader-text-block__paragraph"><strong>Desarrollo de habilidades sociales:</strong>&nbsp;A menudo se piensa que los videojuegos son una actividad solitaria, pero muchos promueven el trabajo en equipo y la comunicaci&oacute;n. Por ejemplo los multijugador en l&iacute;nea pueden ser una forma de construir amistades y relaciones a trav&eacute;s de la cooperaci&oacute;n y la competencia, as&iacute; como una forma de aprender a trabajar en equipo y comunicarse de manera efectiva.</p>
            <p class="reader-text-block__paragraph"><strong>Mejora el aprendizaje:</strong>&nbsp;Los videojuegos educativos tienen una forma divertida de ense&ntilde;ar habilidades y conceptos complejos. Los de simulaci&oacute;n pueden ayudar a los usuarios a aprender, por ejemplo, &nbsp;sobre resoluci&oacute;n de situaciones o casos, &nbsp;y los de cultura a aprender sobre eventos hist&oacute;ricos de manera interactiva y atractiva. Son una forma de motivar a los estudiantes y mejorar su capacidad para retener informaci&oacute;n.</p>
            <p class="reader-text-block__paragraph"><strong>Fomento de la creatividad:</strong>&nbsp;Son una forma efectiva de fomentar la creatividad y la imaginaci&oacute;n, de explorar y experimentar con nuevas ideas y conceptos de manera segura y sin riesgo. Los videojuegos de construcci&oacute;n pueden inspirar a los jugadores a crear e imaginar cosas nuevas.</p>
            <p class="reader-text-block__paragraph"><strong>Alivio del estr&eacute;s:&nbsp;</strong>Son una forma efectiva de aliviar el estr&eacute;s y la ansiedad, ya que pueden proporcionar un escape de la realidad y ayudar a las personas a relajarse y distraerse.&nbsp;&nbsp;&nbsp;</p>
            <p class="reader-text-block__paragraph">&nbsp;<strong>Beneficios para la sociedad:</strong>&nbsp;Son una forma de promover la inclusi&oacute;n y la diversidad, y representan una amplia variedad de culturas y perspectivas. Ayudan a difundir informaci&oacute;n y conciencia sobre temas importantes, como el bienestar o el cambio clim&aacute;tico, as&iacute; como a tambi&eacute;n colaborar a recaudar fondos para organizaciones y causas ben&eacute;ficas.</p>
            <p class="reader-text-block__paragraph">En conclusi&oacute;n, el gaming puede mejorar las habilidades cognitivas y sociales, ser una herramienta efectiva para la educaci&oacute;n, fomentar la creatividad y tener un impacto positivo en la sociedad.</p>
            <p class="reader-text-block__paragraph">Si bien es importante tener en cuenta los posibles riesgos asociados con el gaming, es igualmente importante reconocer los beneficios y el potencial positivo que puede tener esta industria en nuestra vida diaria. Gracias.&nbsp;<a href="https://www.tgacompany.com/">TGA</a></p>',
            
            'picture' =>'blog-seed-picture-4.jpeg',
            'published' => true,
            'category_id' => 1,
        ]);

    }
}
