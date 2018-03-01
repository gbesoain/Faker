<?php

namespace Faker\Provider\es_CL;

class Address extends \Faker\Provider\es_ES\Address
{
    protected static $cityPrefix = array('San', 'Puerto', 'Villa', 'Gral.', 'Don', 'Los');
    protected static $citySuffix = array('del Mar', 'del Norte', 'del Este', 'del Sur', 'del Oeste', 'del Mirador');
    protected static $buildingNumber = array('####', '###', '##');
    protected static $streetSuffix = array('Pasaje', 'Calle', 'Avenida');
    protected static $postcode = array('######');
    protected static $state = array(
                    'Arica',
                    'Camarones',
                    'General Lagos',
                    'Putre',
                    'Alto Hospicio',
                    'Iquique',
                    'Camiña',
                    'Colchane',
                    'Huara',
                    'Pica',
                    'Pozo Almonte',
                    'Antofagasta',
                    'Mejillones',
                    'Sierra Gorda',
                    'Taltal',
                    'Calama',
                    'Ollague',
                    'San Pedro de Atacama',
                    'María Elena',
                    'Tocopilla',
                    'Chañaral',
                    'Diego de Almagro',
                    'Caldera',
                    'Copiapó',
                    'Tierra Amarilla',
                    'Alto del Carmen',
                    'Freirina',
                    'Huasco',
                    'Vallenar',
                    'Canela',
                    'Illapel',
                    'Los Vilos',
                    'Salamanca',
                    'Andacollo',
                    'Coquimbo',
                    'La Higuera',
                    'La Serena',
                    'Paihuaco',
                    'Vicuña',
                    'Combarbalá',
                    'Monte Patria',
                    'Ovalle',
                    'Punitaqui',
                    'Río Hurtado',
                    'Isla de Pascua',
                    'Calle Larga',
                    'Los Andes',
                    'Rinconada',
                    'San Esteban',
                    'La Ligua',
                    'Papudo',
                    'Petorca',
                    'Zapallar',
                    'Hijuelas',
                    'La Calera',
                    'La Cruz',
                    'Limache',
                    'Nogales',
                    'Olmué',
                    'Quillota',
                    'Algarrobo',
                    'Cartagena',
                    'El Quisco',
                    'El Tabo',
                    'San Antonio',
                    'Santo Domingo',
                    'Catemu',
                    'Llaillay',
                    'Panquehue',
                    'Putaendo',
                    'San Felipe',
                    'Santa María',
                    'Casablanca',
                    'Concón',
                    'Juan Fernández',
                    'Puchuncaví',
                    'Quilpué',
                    'Quintero',
                    'Valparaíso',
                    'Villa Alemana',
                    'Viña del Mar',
                    'Colina',
                    'Lampa',
                    'Tiltil',
                    'Pirque',
                    'Puente Alto',
                    'San José de Maipo',
                    'Buin',
                    'Calera de Tango',
                    'Paine',
                    'San Bernardo',
                    'Alhué',
                    'Curacaví',
                    'María Pinto',
                    'Melipilla',
                    'San Pedro',
                    'Cerrillos',
                    'Cerro Navia',
                    'Conchalí',
                    'El Bosque',
                    'Estación Central',
                    'Huechuraba',
                    'Independencia',
                    'La Cisterna',
                    'La Granja',
                    'La Florida',
                    'La Pintana',
                    'La Reina',
                    'Las Condes',
                    'Lo Barnechea',
                    'Lo Espejo',
                    'Lo Prado',
                    'Macul',
                    'Maipú',
                    'Ñuñoa',
                    'Pedro Aguirre Cerda',
                    'Peñalolén',
                    'Providencia',
                    'Pudahuel',
                    'Quilicura',
                    'Quinta Normal',
                    'Recoleta',
                    'Renca',
                    'San Miguel',
                    'San Joaquín',
                    'San Ramón',
                    'Santiago',
                    'Vitacura',
                    'El Monte',
                    'Isla de Maipo',
                    'Padre Hurtado',
                    'Peñaflor',
                    'Talagante',
                    'Codegua',
                    'Coínco',
                    'Coltauco',
                    'Doñihue',
                    'Graneros',
                    'Las Cabras',
                    'Machalí',
                    'Malloa',
                    'Mostazal',
                    'Olivar',
                    'Peumo',
                    'Pichidegua',
                    'Quinta de Tilcoco',
                    'Rancagua',
                    'Rengo',
                    'Requínoa',
                    'San Vicente de Tagua Tagua',
                    'La Estrella',
                    'Litueche',
                    'Marchihue',
                    'Navidad',
                    'Peredones',
                    'Pichilemu',
                    'Chépica',
                    'Chimbarongo',
                    'Lolol',
                    'Nancagua',
                    'Palmilla',
                    'Peralillo',
                    'Placilla',
                    'Pumanque',
                    'San Fernando',
                    'Santa Cruz',
                    'Cauquenes',
                    'Chanco',
                    'Pelluhue',
                    'Curicó',
                    'Hualañé',
                    'Licantén',
                    'Molina',
                    'Rauco',
                    'Romeral',
                    'Sagrada Familia',
                    'Teno',
                    'Vichuquén',
                    'Colbún',
                    'Linares',
                    'Longaví',
                    'Parral',
                    'Retiro',
                    'San Javier',
                    'Villa Alegre',
                    'Yerbas Buenas',
                    'Constitución',
                    'Curepto',
                    'Empedrado',
                    'Maule',
                    'Pelarco',
                    'Pencahue',
                    'Río Claro',
                    'San Clemente',
                    'San Rafael',
                    'Talca',
                    'Arauco',
                    'Cañete',
                    'Contulmo',
                    'Curanilahue',
                    'Lebu',
                    'Los Álamos',
                    'Tirúa',
                    'Alto Biobío',
                    'Antuco',
                    'Cabrero',
                    'Laja',
                    'Los Ángeles',
                    'Mulchén',
                    'Nacimiento',
                    'Negrete',
                    'Quilaco',
                    'Quilleco',
                    'San Rosendo',
                    'Santa Bárbara',
                    'Tucapel',
                    'Yumbel',
                    'Chiguayante',
                    'Concepción',
                    'Coronel',
                    'Florida',
                    'Hualpén',
                    'Hualqui',
                    'Lota',
                    'Penco',
                    'San Pedro de La Paz',
                    'Santa Juana',
                    'Talcahuano',
                    'Tomé',
                    'Bulnes',
                    'Chillán',
                    'Chillán Viejo',
                    'Cobquecura',
                    'Coelemu',
                    'Coihueco',
                    'El Carmen',
                    'Ninhue',
                    'Ñiquen',
                    'Pemuco',
                    'Pinto',
                    'Portezuelo',
                    'Quillón',
                    'Quirihue',
                    'Ránquil',
                    'San Carlos',
                    'San Fabián',
                    'San Ignacio',
                    'San Nicolás',
                    'Treguaco',
                    'Yungay',
                    'Carahue',
                    'Cholchol',
                    'Cunco',
                    'Curarrehue',
                    'Freire',
                    'Galvarino',
                    'Gorbea',
                    'Lautaro',
                    'Loncoche',
                    'Melipeuco',
                    'Nueva Imperial',
                    'Padre Las Casas',
                    'Perquenco',
                    'Pitrufquén',
                    'Pucón',
                    'Saavedra',
                    'Temuco',
                    'Teodoro Schmidt',
                    'Toltén',
                    'Vilcún',
                    'Villarrica',
                    'Angol',
                    'Collipulli',
                    'Curacautín',
                    'Ercilla',
                    'Lonquimay',
                    'Los Sauces',
                    'Lumaco',
                    'Purén',
                    'Renaico',
                    'Traiguén',
                    'Victoria',
                    'Corral',
                    'Lanco',
                    'Los Lagos',
                    'Máfil',
                    'Mariquina',
                    'Paillaco',
                    'Panguipulli',
                    'Valdivia',
                    'Futrono',
                    'La Unión',
                    'Lago Ranco',
                    'Río Bueno',
                    'Ancud',
                    'Castro',
                    'Chonchi',
                    'Curaco de Vélez',
                    'Dalcahue',
                    'Puqueldón',
                    'Queilén',
                    'Quemchi',
                    'Quellón',
                    'Quinchao',
                    'Calbuco',
                    'Cochamó',
                    'Fresia',
                    'Frutillar',
                    'Llanquihue',
                    'Los Muermos',
                    'Maullín',
                    'Puerto Montt',
                    'Puerto Varas',
                    'Osorno',
                    'Puero Octay',
                    'Purranque',
                    'Puyehue',
                    'Río Negro',
                    'San Juan de la Costa',
                    'San Pablo',
                    'Chaitén',
                    'Futaleufú',
                    'Hualaihué',
                    'Palena',
                    'Aisén',
                    'Cisnes',
                    'Guaitecas',
                    'Cochrane',
                    'O\'higgins',
                    'Tortel',
                    'Coihaique',
                    'Lago Verde',
                    'Chile Chico',
                    'Río Ibáñez',
                    'Antártica',
                    'Cabo de Hornos',
                    'Laguna Blanca',
                    'Punta Arenas',
                    'Río Verde',
                    'San Gregorio',
                    'Porvenir',
                    'Primavera',
                    'Timaukel',
                    'Natales',
                    'Torres del Paine'
    );
    protected static $stateAbbr = array(
                    'Arica y Parinacota',
                    'Tarapacá',
                    'Antofagasta',
                    'Atacama',
                    'Coquimbo',
                    'Valparaiso',
                    'Metropolitana de Santiago',
                    'Libertador General Bernardo O\'Higgins',
                    'Maule',
                    'Biobío',
                    'La Araucanía',
                    'Los Ríos',
                    'Los Lagos',
                    'Aisén del General Carlos Ibáñez del Campo',
                    'Magallanes y de la Antártica Chilena'

    );
    protected static $cityFormats = array(
        '{{cityPrefix}} {{firstName}} {{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{streetSuffix}} {{firstName}}',
        '{{streetSuffix}} {{firstName}} {{lastName}}'
    );
    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}} {{secondaryAddress}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}. \n{{state}}",
    );
    protected static $secondaryAddressFormats = array('Depto. ###', 'Local ##', 'Local ###', 'Oficina ###');

    /**
     * @example 'Puerto'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example '3ºA'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Santiago'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    /**
     * @example 'Metropolitana'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::$stateAbbr);
    }
}
