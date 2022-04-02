<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GruposHackers;

class GruposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=new GruposHackers();
        $data->titulo='Grupos';
        $data->nombre_grupo='Los iraníes Tarh Andishan';
        $data->imagen='https://st.depositphotos.com/1049549/3948/i/600/depositphotos_39481703-stock-photo-the-iranian-flag.jpg';
        $data->descripcion='Todo parece indicar que el objetivo de los Tarh Andishan, con unos 20 miembros entre sus filas, es controlar todos los sistemas web del mundo. 

        El grupo parece haber surgido a raíz de la extensión de Stuxnet, un virus que causó mucho daño algunas instalaciones iraníes.
        
        En su momento, todas las pruebas señalaban a Estados Unidos e Israel como principales desarrolladores de este gusano. ¿La razón? Espiar y atacar al país asiático. 
        
        Fue entonces cuando el gobierno iraní decidió duplicar sus esfuerzos en lo que se conoció como la "ciberguerra", momento en el que surgió el grupo Tarh Andishan.
        
        Los ciberdelincuentes utilizan múltiples formas de ataque para sorprender a sus víctimas, por lo que no tienen un patrón reconocible.
        
        Parecen estar detrás del hackeo de varios sistemas de seguridad relacionados con el mundo de la aviación, transporte, servicios públicos, aerolíneas, empresas químicas, aeropuertos o gobiernos. También han atacado compañías petroleras, de gas, de energía, de transporte, de telecomunicaciones y de tecnología.
        
        Durante los dos últimos años se han recogido más de 8 GB de información, que incluyen más de 80.000 archivos de datos extraídos, herramientas, registros de las víctimas y datos de reconocimiento altamente sensibles. A estos ciberataques se les ha denominado "Operación Cleaver".';
        $data->save();

        $data=new GruposHackers();
        $data->titulo='';
        $data->nombre_grupo='TeaMp0isoN';
        $data->imagen='https://www.hackread.com/wp-content/uploads/2012/02/safe_image.jpg';
        $data->descripcion='Un joven hacker de 16 años, bajo el pseudónimo TriCk, fundó este grupo en 2010. TeaMp0isoN realizó varios ataques a Facebook, la OTAN, y la Liga de Defensa Inglesa, incluído el e-mail de Tony Blair, por aquel entonces Primer Ministro Británico.

        Se les ha clasificado de hacktivistas, ya que publicaron alguna que otra información comprometida relacionada con políticos o sistemas gubernamentales.
        
        El grupo se disolvió en 2012 y, durante unos años, no se volvió a saber nada de ellos.
        
        Y es que en 2015 se transformaron en una banda de sombreros blancos o hackers éticos. Ahora se dedican a buscar y corregir fallos de seguridad o vulnerabilidades.';
        $data->save();

        $data=new GruposHackers();
        $data->titulo='';
        $data->nombre_grupo='Chaos Computer Club (CCC)';
        $data->imagen='https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/styles/855/public/media/image/2015/11/131151-ccc-grupos-hackers-famosos.jpg?itok=zxiIcRXY';
        $data->descripcion='El objetivo principal de Chaos Computer Club (CCC) es descubrir fallos de seguridad o vulnerabilidades en los sistemas informáticos de las empresas, que no implica necesariamente actividades ilegales. 

        Fue fundada en Berlín a principios de los 80 y es uno de los grupos de hackers más antiguos de Europa.
        
        Se hicieron conocidos después de que robaran más de 134.000 marcos alemanes a un banco de Hamburgo. La banda devolvió el dinero a las 24 horas de haber cometido el delito, y la explicación que dieron fue que querían demostrar que había un fallo grave en el sistema de seguridad de la compañía. 
        
        En una entrevista a Andy Müller-Maguhn, uno de sus miembros, aseguró que esta acción no fue nada fácil a nivel legal. 
        
        "Necesitamos varios expertos en el tema para saber qué era lo que podíamos o no podíamos hackear. Eso nos ayudó a distinguir entre la frontera de la legalidad y las áreas grises de la misma", señaló el hacker.';
        $data->save();

        $data=new GruposHackers();
        $data->titulo='';
        $data->nombre_grupo='Network Crack Program Hacker (NCPH)';
        $data->imagen='https://cystory-images.s3.amazonaws.com/iStock-459384615.jpg';
        $data->descripcion='Se dice que el grupo de hackers NCPH se formó en China en 1994, y estaba liderado por Ran Dailin, que supuestamente trabajaba para el ejército chino. 

        Se cree que el Ejército Popular de Liberación fue financiado por el NCPH. 
        
        Contaba con cuatro miembros principales en 2006: Wicked Rose, KuNgBim, Charles y Rodag.
        
        El grupo ha ido reclutando miembros desde entonces y, a día de hoy, se desconoce cuántas personas lo forman. ';
        $data->save();

        $data=new GruposHackers();
        $data->titulo='';
        $data->nombre_grupo='Anonymous';
        $data->imagen='https://www.clarin.com/img/2020/06/01/anonymous-2020-quienes-son-y___SB6rIPsfr_1200x630__1.jpg';
        $data->descripcion='"Somos Anonymous. Somos Legión. No olvidamos. No perdonamos...Espéranos".

        Con ese leman se presenta Anonymous, uno de los grupo de hackers más famosos del mundo.
        
        Seguramente te suenen por sus peculiares máscaras o por haber atacado a varias webs gubernamentales, alguna página corporativa o relacionada con el fundamentalismo religioso.
        
        El grupo ha declarado la guerra a la Cienciología y ha hackeado el Pentágono, por lo que no hay que perderlos de vista. 
        
        En 2012 también atacaron MasterCard, Visa y PayPal por negarse a procesar los pagos de WikiLeaks.
        
        Se han arrestado a varios grupos de personas pertenecientes a la organización en Estados Unidos, Inglaterra, España, Turquía, Australia y los Países Bajos.';
        $data->save();

        $data=new GruposHackers();
        $data->titulo='';
        $data->nombre_grupo='LuIzSec';
        $data->imagen='http://wikis.fdi.ucm.es/ELP/images/7/7b/Lulzsec1.jpg';
        $data->descripcion='LuIzSec se creó como un spin-off de Anonymous, y ya sabéis lo que dicen: "De tal palo, tal astilla". 

        El slogan del grupo es: "Riéndonos de tu seguridad desde 2011". Y de ese lema no puede salir nada bueno. 
        
        La banda se dio a conocer después de que hackearan las webs oficiales de Fox y de Sony Pictures. Además, el grupo consiguió que la página de la CIA se cayera durante varias horas.
        
        LuIzSec es bastante conocido por ridiculizar a sus víctimas después de sus ataques. Los expertos han llegado a comparar sus ataques a las bromas que circulan por la Red. 
        
        Se suponía que el grupo se había disuelto en junio de 2011 pero, el 18 de julio de ese mismo año, News Corporation fue hackeada por la banda, y publicó información falsa sobre la muerte de Rupert Murdoch. 
        
        En 2012, todos los miembros de LuIzSec fueron arrestados y procesados después de que su líder, Sabu, les delatara. ';
        $data->save();

        $data=new GruposHackers();
        $data->titulo='';
        $data->nombre_grupo='Lizard Squad';
        $data->imagen='https://i0.wp.com/codigoespagueti.com/wp-content/uploads/2014/12/lizardsquad.jpg?resize=640%2C360&quality=80&ssl=1';
        $data->descripcion='Sin duda alguna, el grupo de hackers más popular de los últimos tiempos es Lizard Squad. 

        Esta banda no sólo está detrás de las últimas caídas de Facebook, sino también de los ataques a la web de Malaysia Airlines que dirigían a los visitantes de la web a una página que decía: "Error 404: avión no encontrado". 
        
        Lizard Squad también es responsable de varios ataques a Sony y Microsoft.
        
        Las intenciones de Lizard Squad son tan oscuras como diversas. No son unos Black Hat al uso, ya que la mayoría de sus ataques están realizados en tono cómico.
        
        Por ejemplo, en agosto de 2014, el grupo publicó la bandera de ISIS en los servidores de Sony e hizo varias referencias en la web al "califato cibernético". 
        
        Lizard Squad fue arrestado por las autoridades después de los ataques a Xbox y PlayStation.';
        $data->save();
    }
}
