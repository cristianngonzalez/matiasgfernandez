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
            'date' => '',
            'custom_date' => '2023-03-23',
            'published' => true,
            'category_id' => 1
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
            'date' => '',
            'custom_date' => '2023-03-23',
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
            'date' => '',
            'custom_date' => '2023-03-23',
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
            'date' => '',
            'custom_date' => '2023-03-23',
            'published' => true,
            'category_id' => 1,
        ]);

        Blog::create([
            'title' => 'La Gamificación : conceptos',
            'blog' =>
            '<p class="MsoNormal" style="text-align: left;" align="center"><span lang="ES-NI">Hoy hablaremos de un tema interesante en el &aacute;mbito laboral: la gamificaci&oacute;n. Si bien suena como una palabra complicada, la gamificaci&oacute;n es una estrategia que puede hacer que las actividades y el aprendizaje en la empresa sea m&aacute;s divertido y mucho m&aacute;s motivador.&nbsp;</span></p>
            <p class="MsoNormal"><span lang="ES-NI">La gamificaci&oacute;n es el uso de elementos y t&eacute;cnicas de los juegos en entornos no l&uacute;dicos, como el &aacute;mbito de las empreas. Con la gamificaci&oacute;n, se busca incentivar la participaci&oacute;n, la colaboraci&oacute;n, la competencia y el logro de metas.&nbsp;</span></p>
            <p class="MsoNormal"><span lang="ES-NI">Te presentamos los elementos de la gamificaci&oacute;n que puedes implementar, de manera moderna y escalable a trav&eacute;s del desarrollo de Apps Gamificadas en tu lugar de trabajo para hacer que la jornada laboral sea m&aacute;s divertida y estimulante:</span></p>
            <p class="MsoListParagraph" style="text-indent: -18.0pt; mso-list: l0 level1 lfo1;"><!-- [if !supportLists]--><span lang="ES-NI" style="mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;"><span style="mso-list: Ignore;">1.<span style="font: 7.0pt;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang="ES-NI">Establecer metas y recompensas</span></p>
            <p class="MsoNormal"><span lang="ES-NI">Al igual que en un juego est&aacute;ndar, establecer metas claras y definir recompensas atractivas puede ser una excelente manera de motivar a los empleados. Pueden ser metas individuales o de equipo, y las recompensas pueden ser desde premios f&iacute;sicos hasta reconocimientos.</span></p>
            <p class="MsoListParagraph" style="text-indent: -18.0pt; mso-list: l0 level1 lfo1;"><!-- [if !supportLists]--><span lang="ES-NI" style="mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;"><span style="mso-list: Ignore;">2.<span style="font: 7.0pt;"> &nbsp;&nbsp;&nbsp; </span></span></span><span lang="ES-NI">Rankings</span></p>
            <p class="MsoNormal"><span lang="ES-NI">Crear rankings para mostrar los logros y progresos de los colaboradores puede ser una forma emocionante de incentivar la competencia. La idea de tener tu nombre en lo m&aacute;s alto del tablero como el mejor jugador del mes es muy alentadora.</span></p>
            <p class="MsoListParagraph" style="text-indent: -18.0pt; mso-list: l0 level1 lfo1;"><!-- [if !supportLists]--><span lang="ES-NI" style="mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;"><span style="mso-list: Ignore;">3.<span style="font: 7.0pt;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang="ES-NI">Desbloquear niveles</span></p>
            <p class="MsoNormal"><span lang="ES-NI">Como sucede en otros juegos, puedes establecer niveles de logros o habilidades en el trabajo. A medida que los empleados avancen en su desarrollo profesional o alcancen objetivos, podr&aacute;n desbloquear nuevos niveles y acceder a m&aacute;s privilegios o beneficios.</span></p>
            <p class="MsoListParagraph" style="text-indent: -18.0pt; mso-list: l0 level1 lfo1;"><!-- [if !supportLists]--><span lang="ES-NI" style="mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;"><span style="mso-list: Ignore;">4.<span style="font: 7.0pt;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang="ES-NI">Puntaje y puntos de experiencia</span></p>
            <p class="MsoNormal"><span lang="ES-NI">Asignar puntaje o puntos de experiencia a las tareas completadas o a los hitos alcanzados puede ser una forma divertida de medir el progreso y la productividad de los colaboradores. &iexcl;Adem&aacute;s, se pueden canjear luegos por premios o incentivos!</span></p>
            <p class="MsoListParagraph" style="text-indent: -18.0pt; mso-list: l0 level1 lfo1;"><!-- [if !supportLists]--><span lang="ES-NI" style="mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;"><span style="mso-list: Ignore;">5.<span style="font: 7.0pt;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang="ES-NI">Retos y competencias</span></p>
            <p class="MsoNormal"><span lang="ES-NI">Organizar retos o competencias entre los empleados puede ser una excelente forma de fomentar la colaboraci&oacute;n y la creatividad en el trabajo. Pueden ser retos de resoluci&oacute;n de problemas, de mejora de procesos o de generaci&oacute;n de ideas.</span></p>
            <p class="MsoListParagraph" style="text-indent: -18.0pt; mso-list: l0 level1 lfo1;"><!-- [if !supportLists]--><span lang="ES-NI" style="mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;"><span style="mso-list: Ignore;">6.<span style="font: 7.0pt;">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span lang="ES-NI">Narrativa interesante</span></p>
            <p class="MsoNormal"><span lang="ES-NI">Crear una historia alrededor de los objetivos puede ser una manera emocionante de involucrarse. Una historia interesante puede despertar la curiosidad y el inter&eacute;s de los colaboradores, haci&eacute;ndolos sentir parte de una aventura &oacute; misi&oacute;n</span></p>
            <p class="MsoListParagraph" style="text-indent: -18.0pt; mso-list: l0 level1 lfo1;"><!-- [if !supportLists]--><span lang="ES-NI" style="mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin;"><span style="mso-list: Ignore;">8.<span style="font: 7.0pt;"> &nbsp;&nbsp;&nbsp; </span></span></span><span lang="ES-NI">Feedback inmediato</span></p>
            <p class="MsoNormal"><span lang="ES-NI">Recibir evaluaciones de inmediato sobre el progreso y el desempe&ntilde;o puede ser muy motivador. Puedes implementar sistemas de retroalimentaci&oacute;n r&aacute;pida y constante para que los empleados sepan c&oacute;mo est&aacute;n avanzando en sus metas y qu&eacute; &aacute;reas pueden mejorar. Esto les permitir&aacute; ajustar su enfoque y esforzarse por obtener mejores resultados.</span></p>
            <p class="reader-text-block__paragraph">La Gamificaci&oacute;n es una soluci&oacute;n innovadora para las capacitaciones en las empresas, que puede mejorar significativamente el compromiso y la retenci&oacute;n del conocimiento de los colaboradores. La combinaci&oacute;n de videojuegos y aprendizaje permite aprender de manera divertida, activa y pr&aacute;ctica, lo que resulta muy efectivo para cptar la voluntad de los colaboradores.</p>
            <p class="reader-text-block__paragraph">Si bien la implementaci&oacute;n de la Gamificaci&oacute;n en las empresas puede requerir una inversi&oacute;n inicial, los beneficios a largo plazo son significativos. Gracias.&nbsp;<a href="https://www.tgacompany.com/">TGA</a></p>',
            
            'picture' =>'blog-seed-picture-5.jpg',
            'date' => '',
            'custom_date' => '2023-04-16',
            'published' => true,
            'category_id' => 1,
        ]);

        Blog::create([
            'title' => 'La Gamificación en las capacitaciones',
            'blog' => '<p class="MsoNormal" style="text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; sans-serif; color: black; mso-themecolor: text1;">De una manera muy simple podemos decir que Gamificaci&oacute;n consiste en usar t&eacute;cnicas y elementos presentes en los juegos para cosas serias. En los &uacute;ltimos a&ntilde;os, grandes empresas en todo del mundo han incorporado la gamificaci&oacute;n a m&uacute;ltiples procesos para alcanzar objetivos tanto internos como externos, lo que ha convertido esta pr&aacute;ctica en una tendencia global.&nbsp;</span></p>
            <p class="MsoNormal" style="text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; sans-serif; color: black; mso-themecolor: text1; background: white;">El uso de la gamificaci&oacute;n para empresas fomenta la creatividad y productividad en grupo as&iacute; como el desarrollo de competencias, como resultado, aplicando gamificaci&oacute;n a la formaci&oacute;n tendremos una mejor curva de aprendizaje. La gamificaci&oacute;n es un generador de emociones positivas, esto redunda en un mayor compromiso de las personas, adem&aacute;s, junto con el feedback inmediato son un disparador del cambio de conducta voluntario.</span></p>
            <p class="MsoNormal" style="text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; sans-serif; color: black; mso-themecolor: text1; background: white;">&nbsp;En el estudio <em><span style="sans-serif;">The 2018 Gamification At Work&nbsp;</span></em>de<em><span style="sans-serif;">&nbsp;</span></em><em><span style="sans-serif;"><a href="https://www.talentlms.com/blog/gamification-survey-results/" target="_blank" rel="noopener"><span style="color: black; mso-themecolor: text1;">T</span></a></span></em><em><span style="sans-serif;"><a href="https://www.talentlms.com/blog/gamification-survey-results/" target="_blank" rel="noopener"><span style="color: black; mso-themecolor: text1;">alen</span></a></span></em></span><a href="https://www.talentlms.com/blog/gamification-survey-results/"><em><span style="font-size: 12.0pt; line-height: 107%; sans-serif; color: black; mso-themecolor: text1; background: white;">t LMS</span></em></a><em><span style="font-size: 12.0pt; line-height: 107%; sans-serif; color: black; mso-themecolor: text1; background: white;">&nbsp;</span></em><span style="font-size: 12.0pt; line-height: 107%; sans-serif; color: black; mso-themecolor: text1; background: white;">podemos visualizar&nbsp;por qu&eacute; esta soluci&oacute;n es tendencia.</span></p>
            <p style="text-align: justify; background: white;"><span style="sans-serif; color: black; mso-themecolor: text1;">La gamificaci&oacute;n en una empresa se basa en aplicar las mec&aacute;nicas y din&aacute;micas de los juegos al contexto de trabajo y funciones laborales del d&iacute;a a d&iacute;a, con el prop&oacute;sito de fomentar la motivaci&oacute;n e implicaci&oacute;n de los empleados con los contenidos&nbsp; de la organizaci&oacute;n.</span></p>
            <p style="text-align: justify; background: white;"><span style="sans-serif; color: black; mso-themecolor: text1;">Son precisamente estas mec&aacute;nicas de juego las que aportan experiencias de usuario motivadoras y retadoras, ya que despiertan valores como la competitividad, la excelencia, el reconocimiento y la recompensa.</span></p>
            <p style="text-align: justify; background: white;"><span style="sans-serif; color: black; mso-themecolor: text1;">Si te preguntas &iquest;C&oacute;mo puedo cambiar procesos ineficientes o aburridos? o &iquest;C&oacute;mo puedo motivar a los empleados con respecto a alg&uacute;n tema relevante en la organizaci&oacute;n?. Con las siguientes mec&aacute;nicas de la gamificaci&oacute;n, tendr&aacute;s una idea de c&oacute;mo convertir tu contenido y actividades regulares en un contexto motivador para tus empleados, y as&iacute; empieces a obtener los beneficios de esta tendencia&nbsp;</span></p>
            <p style="margin: 0cm; text-align: justify; line-height: 19.2pt; background: white; vertical-align: baseline;"><span style="sans-serif; color: black; mso-themecolor: text1;">Para que un proceso de gamificaci&oacute;n tenga &eacute;xito debe considerar al menos tres aspectos:</span></p>
            <p style="margin: 0cm; text-align: justify; line-height: 19.2pt; background: white; vertical-align: baseline;">&nbsp;</p>
            <p style="margin: 0cm; text-align: justify; line-height: 19.2pt; background: white; vertical-align: baseline;"><strong><span style="sans-serif; color: black; mso-themecolor: text1; border: none windowtext 1.0pt; mso-border-alt: none windowtext 0cm; padding: 0cm;">Debe ser social</span></strong><span style="sans-serif; color: black; mso-themecolor: text1;">: Los usuarios del proceso de gamificaci&oacute;n deben poder tener nuevas identidades, roles y avatares personalizados en el juego. Se debe proporcionar reconocimiento de los logros y poder compartir los mismos. El proceso debe adem&aacute;s permitir la competici&oacute;n y la recompensa.</span></p>
            <p style="margin: 0cm; text-align: justify; line-height: 19.2pt; background: white; vertical-align: baseline;"><strong><span style="sans-serif; color: black; mso-themecolor: text1; border: none windowtext 1.0pt; mso-border-alt: none windowtext 0cm; padding: 0cm;">Debe provocar emociones</span></strong><span style="sans-serif; color: black; mso-themecolor: text1;">: Un proceso de gamificaci&oacute;n debe proporcionar emociones a los participantes, el optimismo, el orgullo, la superaci&oacute;n de los fallos, etc. La neuroeducaci&oacute;n, nueva disciplina en la que se une la educaci&oacute;n, la psicolog&iacute;a y la neurociencia pone de manifiesto la importancia de las emociones en el aprendizaje.</span></p>
            <p style="margin: 0cm; text-align: justify; line-height: 19.2pt; background: white; vertical-align: baseline;"><strong><span style="sans-serif; color: black; mso-themecolor: text1; border: none windowtext 1.0pt; mso-border-alt: none windowtext 0cm; padding: 0cm;">Debe trabajar sobre capacidades cognitivas</span></strong><span style="sans-serif; color: black; mso-themecolor: text1;">: El proceso de gamificaci&oacute;n debe proporcionar sistemas de reglas para que los usuarios experimenten y descubran, guiando a los jugadores a trav&eacute;s de un proceso evolutivo de aprendizaje.</span></p>
            <p class="reader-text-block__paragraph">En conclusi&oacute;n, el uso de la gamificaci&oacute;n en la formaci&oacute;n corporativa, es una excelente opci&oacute;n para las empresas que buscan mejorar la experiencia de sus colaboradores, y la eficiencia en la adopci&oacute;n del contenido de las capacitaciones.</p>
            <p class="reader-text-block__paragraph">Se crea un ambiente de aprendizaje innovador, atractivo y motivador, acorde con las expectativas de un mercado laboral cada vez mas gamer. Gracias.&nbsp;<a href="https://www.tgacompany.com/">TGA</a></p>',
            
            'picture' =>'blog-seed-picture-6.jpg',
            'date' => '',
            'custom_date' => '2023-04-16',
            'published' => true,
            'category_id' => 1,
        ]);

        Blog::create([
            'title' => 'Onboarding: Cómo el Game Based Learning puede mejorar la experiencia de los nuevos colaboradores',
            'blog' => '<h3 class="reader-text-block__heading2"><em>El proceso de onboarding es un proceso clave ya que puede afectar directamente el rendimiento y permanencia de los nuevos colaboradores. Y sin duda crea una primera impresi&oacute;n de la cultura de la empresa. El Game Based Learning es una herramienta efectiva para mejorar esta experiencia.</em></h3>
            <p class="reader-text-block__paragraph">En este art&iacute;culo, exploraremos c&oacute;mo el GBL puede mejorar este proceso.&nbsp;</p>
            <p class="reader-text-block__paragraph">El proceso de onboarding es un aspecto cr&iacute;tico del ciclo de vida del colaborador y tambi&eacute;n lo es para la empresa. Es el primer contacto que se tiene con la empresa y es fundamental para su integraci&oacute;n en la cultura y el entorno de trabajo. Sin embargo, el proceso de onboarding puede ser aburrido, mon&oacute;tono, e ineficiente en la transmisi&oacute;n de informaci&oacute;n, lo que puede afectar negativamente el entusiasmo, compromiso y rendimiento del nuevo ingresante.</p>
            <p class="reader-text-block__paragraph">Es aqu&iacute; donde el GBL puede hacer una gran diferencia, mejorando significativamente el proceso al aumentar la calidad de la experiencia y el engagement.</p>
            <p class="reader-text-block__paragraph">Toda inversi&oacute;n que se realice en este proceso es claramente una apuesta por el talento y el futuro de la compa&ntilde;&iacute;a. Un buen proceso de onboarding puede llegar a mejorar la tasa de retenci&oacute;n de los nuevos empleados hasta un 82% y la productividad de los mismos en un 70% (Linkedin).</p>
            <p class="reader-text-block__paragraph">Sin duda, adem&aacute;s, un es proceso clave en la transmisi&oacute;n de la marca empleadora y cultura organizacional</p>
            <p class="reader-text-block__paragraph">&nbsp;</p>
            <p class="reader-text-block__paragraph"><strong>El desaf&iacute;o de la retenci&oacute;n de empleados durante el Onboarding</strong></p>
            <p class="reader-text-block__paragraph">El entusiasmo y retenci&oacute;n de los nuevos colaboradores es un desaf&iacute;o com&uacute;n en el proceso de onboarding. Muchas empresas invierten una gran cantidad de recursos en la contrataci&oacute;n y el entrenamiento de nuevos empleados, solo para que estos abandonen la empresa poco despu&eacute;s de ser incorporados.</p>
            <p class="reader-text-block__paragraph">Seg&uacute;n una encuesta de la Society for Human Resource Management (SHRM),&nbsp;<strong>el 69% de los empleados son m&aacute;s propensos a permanecer en la empresa por m&aacute;s de tres a&ntilde;os si experimentan un proceso de onboarding efectivo.</strong>&nbsp;Por lo tanto, mejorar el proceso de onboarding puede tener un impacto significativo en la retenci&oacute;n de talentos.</p>
            <p class="reader-text-block__paragraph"><strong>La relaci&oacute;n entre el GBL y el Onboarding</strong></p>
            <p class="reader-text-block__paragraph">El GBL consiste en aprender a trav&eacute;s de juegos, lo que puede ser una excelente manera de involucrar a los colaboradores y mejorar su motivaci&oacute;n con el proceso. Incluyendo la reducci&oacute;n del estr&eacute;s y la ansiedad, mejorar la adopci&oacute;n del contenido, la integraci&oacute;n a equipos, la satisfacci&oacute;n con el desaf&iacute;o, y la personalizaci&oacute;n del proceso seg&uacute;n cada rol.</p>
            <p class="reader-text-block__paragraph"><strong>Reducci&oacute;n del estr&eacute;s y la ansiedad</strong></p>
            <p class="reader-text-block__paragraph">El proceso de onboarding puede ser estresante y abrumador para los nuevos colaboradores. El GBL puede ayudar a reducir el estr&eacute;s y la ansiedad al hacer que el proceso sea m&aacute;s atractivo y emocionante. En lugar de leer y escuchar informaci&oacute;n aburrida, los empleados pueden participar en juegos y desaf&iacute;os divertidos. Esto puede ayudar a los nuevos empleados a relajarse y a sentirse mas c&oacute;modos en su nuevo entorno de trabajo.</p>
            <p class="reader-text-block__paragraph"><strong>Aumento de la retenci&oacute;n de informaci&oacute;n</strong></p>
            <p class="reader-text-block__paragraph">El GBL mejora la retenci&oacute;n de informaci&oacute;n, ya que al utilizar t&eacute;cnicas de juego, es posible hacer que el proceso de aprendizaje sea m&aacute;s atractivo y memorable.</p>
            <p class="reader-text-block__paragraph">Presentar la informaci&oacute;n de una manera interactiva y desafiante, ayuda a que los nuevos colaboradores pueden recordarla m&aacute;s f&aacute;cilmente y se sentir&aacute;n m&aacute;s motivados para completar su proceso de onboarding r&aacute;pidamente.</p>
            <p class="reader-text-block__paragraph"><strong>El GBL permite feedback continuo</strong></p>
            <p class="reader-text-block__paragraph">Permite una evaluaci&oacute;n continua del progreso del jugador. El feedback inmediato sobre su desempe&ntilde;o, ayuda a ajustar sus decisiones en tiempo real, para acelerar as&iacute; su progreso.</p>
            <p class="reader-text-block__paragraph">&nbsp;</p>
            <p class="reader-text-block__paragraph">En conclusi&oacute;n, el uso de videojuegos en la formaci&oacute;n corporativa, es una excelente opci&oacute;n para las empresas que buscan mejorar la experiencia de sus colaboradores, y la eficiencia en la adopci&oacute;n del contenido. Los colaboradores pueden sentirse abrumados en su primer d&iacute;a de trabajo, pero los videojuegos pueden ayudar a aliviar esta ansiedad al proporcionar un ambiente seguro y divertido en el que pueden aprender a su propio ritmo.</p>
            <p class="reader-text-block__paragraph">El GBL ofrece un ambiente de aprendizaje innovador, atractivo y motivador, acorde con las expectativas de un mercado laboral cada vez mas gamer.</p>
            <p class="reader-text-block__paragraph">En resumen, evolucionar el proceso de onboarding, es fortalecer las bases para el crecimiento de la empresa. Gracias. &nbsp;<a href="https://www.tgacompany.com/">TGA</a></p>',
            
            'picture' =>'blog-seed-picture-7.jpg',
            'date' => '',
            'custom_date' => '2023-04-18',
            'published' => true,
            'category_id' => 1,
        ]);

        Blog::create([
            'title' => 'Deja el aburrimiento atrás: cómo el Game Based Learning puede mejorar la productividad en tu empresa',
            'blog' => '<h3 class="reader-text-block__heading2"><em>&iquest;Alguna vez te has sentido aburrido en el trabajo? &iquest;Te has preguntado si hay una manera de hacer las tareas diarias m&aacute;s emocionantes y productivas? La respuesta es s&iacute;: &iexcl;el Game Based Learning (GBL) puede ayudarte a mejorar la productividad en tu empresa!&nbsp;</em></h3>
            <p class="reader-text-block__paragraph">El GBL consiste en aprender a trav&eacute;s de juegos, lo que puede ser una excelente manera de involucrar a los colaboradores y mejorar su motivaci&oacute;n, por ejemplo, con los ciclos de capacitaci&oacute;n. Adem&aacute;s, se ha demostrado que el GBL mejora la productividad y reduce el tiempo de capacitaci&oacute;n hasta un 60%.</p>
            <p class="reader-text-block__paragraph">En este art&iacute;culo, vamos a explorar c&oacute;mo el GBL puede mejorar la productividad en tu empresa</p>
            <p class="reader-text-block__paragraph"><strong>1. Mejora la motivaci&oacute;n y el compromiso de los colaboradores</strong></p>
            <p class="reader-text-block__paragraph">El GBL puede ayudar a mejorar la motivaci&oacute;n y el compromiso de los colaboradores al hacer que el aprendizaje sea m&aacute;s divertido y emocionante. Los videojuegos pueden desafiar de manera m&aacute;s efectiva que los m&eacute;todos tradicionales. &nbsp;El proceso de capacitaci&oacute;n sea vuelve m&aacute;s atractivo y entretenido, lo que aumenta el entusiasmo de los empleados para participar y aprender. Adem&aacute;s, el GBL mejora la retenci&oacute;n de informaci&oacute;n, ya que los empleados son m&aacute;s propensos a recordar lo que aprendieron en un ambiente de juego.</p>
            <p class="reader-text-block__paragraph"><strong>2. Reduce el tiempo de capacitaci&oacute;n</strong></p>
            <p class="reader-text-block__paragraph">Puede contribuir a reducir el tiempo de entrenamiento en un 60%. Los videojuegos ayudan principalmente porque los colaboradores tienen mayor predisposici&oacute;n por completar las actividades, lo que significa que pueden estar completamente capacitados en menos tiempo.&nbsp;</p>
            <p class="reader-text-block__paragraph"><strong>3. Mejora las habilidades de decisi&oacute;n</strong></p>
            <p class="reader-text-block__paragraph">El GBL ayuda a simular situaciones pr&aacute;cticas y as&iacute; permitir a los colaboradores a desarrollar habilidades de una manera m&aacute;s efectiva, segura y sin riesgo. Los videojuegos consiguen practicar situaciones en un entorno controlado, lo que significa que van a estar mejor preparados para enfrentar luego las mismas situaciones de la vida real.</p>
            <p class="reader-text-block__paragraph"><strong>4. Facilita el feedback y la evaluaci&oacute;n</strong></p>
            <p class="reader-text-block__paragraph">Facilita la retroalimentaci&oacute;n y la evaluaci&oacute;n al proporcionar informaci&oacute;n instant&aacute;nea y detallada sobre el desempe&ntilde;o del usuario. Los videojuegos realizan un seguimiento del progreso y proporcionan informaci&oacute;n en tiempo real, lo que ayuda a mejorar y desarrollar habilidades de manera m&aacute;s efectiva.</p>
            <p class="reader-text-block__paragraph">&nbsp;</p>
            <p class="reader-text-block__paragraph">En conclusi&oacute;n, el Game Based Learning es una t&eacute;cnica de aprendizaje innovadora y efectiva que mejorar&aacute; la productividad en tu empresa ya que permite a los colaboradores aprender de manera m&aacute;s divertida y efectiva, e incorporar la informaci&oacute;n de manera m&aacute;s r&aacute;pida e eficiente.</p>
            <p class="reader-text-block__paragraph">Mejora la motivaci&oacute;n, la creatividad, la colaboraci&oacute;n y el trabajo en equipo. Incorporar el aprendizaje basado en videojuegos en la formaci&oacute;n de los colaboradores, va a ayudar a tu empresa a alcanzar nuevos niveles de productividad.</p>
            <p class="reader-text-block__paragraph">As&iacute; que no esperes m&aacute;s, deja el aburrimiento atr&aacute;s y comienza a disfrutar de los beneficios del Game Based Learning.&nbsp;Gracias.&nbsp;<a href="https://www.tgacompany.com/">TGA</a></p>',
            
            'picture' =>'blog-seed-picture-8.jpg',
            'date' => '',
            'custom_date' => '2023-04-18',
            'published' => true,
            'category_id' => 1,
        ]);

        Blog::create([
            'title' => 'Cómo el Game Based Learning puede evolucionar el proceso de selección',
            'blog' => '<h3 class="reader-text-block__heading2">Existe una herramienta innovadora que est&aacute; cambiando la forma en que se lleva a cabo el proceso de selecci&oacute;n: el Game Based Learning.</h3>
            <p class="reader-text-block__paragraph">El GBL, es una experiencia motivadora, que puede ayudar a los equipos de reclutamiento en la evaluaci&oacute;n de habilidades, como resoluci&oacute;n de problemas, pensamiento cr&iacute;tico y trabajo en equipo, a trav&eacute;s de una experiencia m&aacute;s atractiva. EL GBL ayuda a construir una marca empleadora innovadora y moderna, alineada a un mercado laboral cada vez mas gamer.</p>
            <p class="reader-text-block__paragraph">&iquest;C&oacute;mo puede el GBL mejorar el proceso de selecci&oacute;n de las empresas?</p>
            <p class="reader-text-block__paragraph"><strong>1. Medici&oacute;n de habilidades y competencias:</strong>&nbsp;A trav&eacute;s de un videojuego dise&ntilde;ado espec&iacute;ficamente para evaluar habilidades y competencias, los empleadores pueden obtener una medici&oacute;n m&aacute;s objetiva de las capacidades de los candidatos. Adem&aacute;s, los videojuegos tambi&eacute;n permiten demostrar sus habilidades en lugar de simplemente hablar sobre ellas en una entrevista tradicional.</p>
            <p class="reader-text-block__paragraph"><strong>2. Mayor engagement y motivaci&oacute;n:&nbsp;</strong>El GBL aumenta la motivaci&oacute;n y el engagement de los candidatos. Al involucrarlos en actividades divertidas y desafiantes, se sentir&aacute;n mas motivados para participar y comprometerse en el proceso de selecci&oacute;n. Disfrutar&aacute;n del momento, sinti&eacute;ndose mas c&oacute;modos y relajados, dejando de lado los nervios y el stress.</p>
            <p class="reader-text-block__paragraph"><strong>3. Identificaci&oacute;n de rasgos de personalidad:&nbsp;</strong>Los videojuegos dise&ntilde;ados para evaluar habilidades tambi&eacute;n pueden ayudar a identificar ciertos rasgos de personalidad. Por ejemplo, un videojuego que requiere pensamiento estrat&eacute;gico puede indicar que un candidato es anal&iacute;tico y met&oacute;dico en su enfoque.</p>
            <p class="reader-text-block__paragraph"><strong>4. Reducci&oacute;n de prejuicios y sesgos:&nbsp;</strong>El GBL puede ayudar a reducir los prejuicios y sesgos que pueden existir en el proceso de selecci&oacute;n. Al utilizar videojuegos, que no se basan en la apariencia o la experiencia previa, los empleadores pueden evaluar a los candidatos de manera m&aacute;s objetiva.</p>
            <p class="reader-text-block__paragraph">&nbsp;</p>
            <p class="reader-text-block__paragraph">En conclusi&oacute;n, el GBL es una herramienta innovadora que puede mejorar significativamente el proceso de selecci&oacute;n de personal. Al involucrar a los candidatos en actividades divertidas y desafiantes, aumenta el compromiso y la motivaci&oacute;n de los candidatos, haciendo del proceso de selecci&oacute;n un momento memorable y atractivo en el mercado.</p>
            <p class="reader-text-block__paragraph">As&iacute; que si est&aacute;s buscando una forma de mejorar tu proceso de selecci&oacute;n de colaboradores, definitivamente deber&iacute;as considerar el GBL. Gracias.&nbsp;<a href="https://www.tgacompany.com/">TGA</a></p>',
            'picture' =>'blog-seed-picture-9.jpg',
            'date' => '',
            'custom_date' => '2023-04-18',
            'published' => true,
            'category_id' => 1,
        ]);




    }
}
