<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TiposHackers;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=new TiposHackers();
        $data->titulo='Tipos de Hackers';
        $data->tipo_hacker='White hat';
        $data->imagen='https://pbs.twimg.com/profile_images/1052228000958337024/qTPCE968_400x400.jpg';
        $data->descripcion='Son un tipo de hackers con experiencia en ciberseguridad. Están autorizados a hackear los sistemas de seguridad informática de gobiernos u organizaciones con el fin de comprobar fallos de ciberseguridad. Al hacerlo identifican los puntos débiles y los corrigen para evitar futuros ataques de fuentes externas.

        Estos hackers informáticos funcionan según las reglas y regulaciones que establecen los gobiernos y también son conocidos como hackers éticos.';
        $data->save();

        $data=new TiposHackers();
        $data->titulo='';
        $data->tipo_hacker='Black hat';
        $data->imagen='https://media.kasperskydaily.com/wp-content/uploads/sites/87/2014/08/05211404/hat.min_.png';
        $data->descripcion='Los Black Hat también son expertos en informática, sin embargo, su intención es completamente distinta. Estos tipos de hackers atacan otros sistemas para obtener acceso a sistemas donde no tienen una entrada autorizada. Con su acceso pueden robar datos o destruir el sistema.

        Estas prácticas de hackeo dependen de la capacidad y el conocimiento de informática del individuo. La acción malintencionada del hacker Black Hat no se puede medir ni tampoco el alcance de la infracción durante el hackeo.';
        $data->save();

        $data=new TiposHackers();
        $data->titulo='';
        $data->tipo_hacker='Grey hat';
        $data->imagen='https://cdn.akamai.steamstatic.com/steam/apps/605230/capsule_616x353.jpg?t=1595559643';
        $data->descripcion='Los hackers Grey Hat se encuentran entre los Black Hat y los White Hat. Este tipo de hackers informáticos trabajan con buenas y con malas intenciones. La intención que hay detrás de la piratería decide el tipo de pirata informático.

        La diferencia con los otros hackers es que no quieren robar a las personas ni quieren ayudar a alguien en particular. Estos tipos de hackers disfrutan experimentando con sistemas para encontrar lagunas, romper defensas y, en general, encontrar una experiencia divertida en el hacking.';
        $data->save();

        $data=new TiposHackers();
        $data->titulo='';
        $data->tipo_hacker='Blue hat';
        $data->imagen='https://blarrow.tech/wp-content/uploads/2019/10/104906175-GettyImages-843466180.jpg';
        $data->descripcion='Los Blue Hat o script-kiddie son un tipo de hackers informáticos que no tienen intención de aprender. Sino que utilizan el hacking como arma para ganar popularidad entre sus semejantes y para ajustar cuentas con sus adversarios. Los Blue hat son peligrosos debido a sus intenciones maliciosas, puesto que las anteponen a adquirir conocimiento.

        Son personas que carecen de conocimientos profundos y de base y solo usan herramientas de forma dañina. Pueden hacer cibervandalismo y propagar software malicioso sin tener demasiado claro el funcionamiento del sistema.';
        $data->save();

        $data=new TiposHackers();
        $data->titulo='';
        $data->tipo_hacker='Red hat';
        $data->imagen='https://st3.depositphotos.com/29881388/32716/v/380/depositphotos_327166958-stock-illustration-mysterious-computer-hacker-icon-logo.jpg?forcejpeg=true';
        $data->descripcion='Realiza un proceso de simulación de escenarios de amenazas a los que se puede enfrentar una organización, analizando la seguridad desde el punto de vista de los atacantes, los pentesters realizan un proceso de intrusión con técnicas de pivoting, ingeniería social y otras pruebas de hacking y que finaliza con un informe en el que se identifican vulnerabilidades.Los Red Hat son un tipo de hackers informáticos que no tienen intención de aprender. Sino que utilizan el hacking como arma para ganar popularidad entre sus semejantes y para ajustar cuentas con sus adversarios. Los Red hat son peligrosos debido a sus intenciones maliciosas, puesto que las anteponen a adquirir conocimiento.';
        $data->save();

        $data=new TiposHackers();
        $data->titulo='';
        $data->tipo_hacker='Hacktivistas';
        $data->imagen='https://revistadigital.inesem.es/informatica-y-tics/files/2016/05/hack-813290_960_720.jpg';
        $data->descripcion='Este tipo de hackers informáticos tienen la intención de hackear sitios web gubernamentales. Un hacktivista puede ser un individuo o un grupo de hackers sin nombre cuya intención es obtener acceso a sitios web y redes gubernamentales. Los datos obtenidos se suelen utilizar para obtener beneficios políticos o sociales.';
        $data->save();



    }
}
