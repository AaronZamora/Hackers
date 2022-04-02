<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HistoriaHacker;


class HistoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Informacion a almacenar en la tabla historia por el seeder en las DB
        $data=new HistoriaHacker();

        $data->titulo='Origen';
        $data->imagen='https://mcdn.wallpapersafari.com/medium/99/79/XtJAGN.jpg';
        $data->descripcion='En 1941, el MIT adquiere un nuevo ordenador, la microcomputadora PDP-1 pero, un grupo de alumnos sintió una gran curiosidad acerca de esta nueva adquisición: tardaba tanto en encender que debía quedarse toda la noche en funcionamiento, tiempo que aprovechaban para interactuar con ella.
        Este grupo de alumnos llegaría a formar parte del Laboratorio de Inteligencia Artificial del MIT. Entre ellos era habitual que se gastaran bromas, éticas e inocentes. Ellos fueron también pioneros en el lanzamiento de software libre y en la creación de lo que hoy conocemos todos como internet.';
        $data->save();

        $data=new HistoriaHacker();
        $data->titulo='ARPANET';
        $data->imagen='https://i.discogs.com/RpRfIuFC3H2rB_-80xQWgwiGtFKyo60RZe8r4W3ASHU/rs:fit/g:sm/q:90/h:600/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTIwMDY4/MTExLTE2MzA0NDI3/ODMtNTI4NC5qcGVn.jpeg';
        $data->descripcion='ARPANET fue un proyecto del Departamento de Defensa que acabó convirtiéndose en toda una red de ordenadores transcontinentales de alta velocidad: hacía posible la comunicación entre universidades, laboratorios de investigación, etc. En ella se reunían todos los hackers de Estados Unidos, creando un foro en el que se llegó a crear un diccionario de terminología específica que aún a día de hoy se sigue actualizando, The New Hackers Dictionary.';
        $data->save();

        $data=new HistoriaHacker();
        $data->titulo='Impacto en los años 80s';
        $data->imagen='';
        $data->descripcion='Durante la década de los 80 tuvieron lugar las primeras grandes oleadas de ataques informáticos. Por ejemplo, en 1986 se lanzó el primer virus que atacaba a plataformas IBM PC, conocido como Brain. Dos años después, se crearía el primer gusano (justamente en el MIT) que se propagó a través de internet, conocido como Morris. Se llegaron a contagiar 6.000 servidores (de los 60.000 que conformaban la aún primitiva internet) que paralizaron gran parte de las comunicaciones de Estados Unidos.';
        $data->save();

    }
}
