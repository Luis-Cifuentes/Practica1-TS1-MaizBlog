CREATE DATABASE ts1maizblog DEFAULT CHARACTER SET utf8mb4;

USE ts1maizblog;

CREATE TABLE maices (
    nombreMaya VARCHAR(10) NOT NULL,
    descripcion TEXT NOT NULL,
    informacion LONGTEXT NOT NULL,
    usos LONGTEXT NOT NULL
);

CREATE TABLE tipos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    color VARCHAR(10) UNIQUE NOT NULL,
    significadoAng TEXT NOT NULL,
    significadoHum TEXT NOT NULL
);

CREATE TABLE departamentos (
    id_dept INT PRIMARY KEY,
    nombre_dept VARCHAR(50) NOT NULL,
    produccion DECIMAL(3,2) NOT NULL
);

CREATE TABLE origenes (
    lugar_origen VARCHAR(50) PRIMARY KEY,
    historia TEXT NOT NULL
);

INSERT INTO maices VALUES (
    'Ixim',
    'Desde los mayas hasta la actualidad, el maíz ha sido para Guatemala parte fundamental de alimentación y sagrado desde un enfoque de espiritualidad, es por eso que, desde el Congreso de la República, a través del Decreto 13-2014, se  reconoció como Patrimonio Cultural Intangible de la Nación y se declaró el día 13 de agosto de cada año, “Día Nacional del Maíz”.',
    'Dentro de la cosmovisión maya, el maíz representa lo espiritual, la agricultura, el calendario, la mitología y el origen de la vida, ya que se considera que fue la materia prima con la que el hombre fue creado. En muchos idiomas mayas se refieren a este grano básico como “Ixim”, asimismo, en comunidades de Huehuetenango se le guarda reverencia como una deidad, que puede ser masculino en el caso del municipio de Santiago Chimaltenango, en donde se le conoce como “Padre Paxil”; o femenina como en el municipio de Colotenango, en donde se le refiere como “K&;txu”, que significa nuestra madre en mam.',
    'Una investigación de la Organización de las Naciones Unidas para la Alimentación y la Agricultura (FAO por sus siglas en inglés) y del MAGA, establece que el consumo del maíz en Guatemala no está limitado solo en las tortillas, ya que hay muchas formas de degustarlo, por ejemplo, cuando está tierno se puede consumir como mazorca, a través de un proceso de cocción y la aplicación de salsa dulce, mayonesa, mostaza y queso seco, lo cual es conocido en nuestro país como “elotes locos”. Además, agrega que el maíz es un elemento fundamental de platillos como los tamales, los chuchitos, tamalitos de chipilín, las enchiladas, tortillas con loroco y queso, el atol de elote, entre otras delicias de la gastronomía guatemalteca. Por otro lado, establece que el maíz también puede ser procesado como harina, maicena, palomitas, sémola, copos, entre otras muchas formas para complementar los alimentos de consumo diario.'
);

INSERT INTO tipos (color, significadoAng, significadoHum) VALUES (
    'Blanco',
    'Representa el angulo norte del universo y constituye el pilar del camino y la sabiduría. Es lo espiritual y el lugar de reposo del nahual de los abuelos mayas.',
    'En la creacion del ser humano fue utilizado para la elaboracions de los huesos.'            
),
(
    'Negro',
    'Representa el angulo oeste del universo y se identifica con el descanso.',
    'En la creacion del ser humano fue utilizado para la elaboracion del cabello y los ojos.'         
),
(
    'Amarillo',
    'Representa el angulo sur del universo y simboliza cosechas',
    'En la creacion del ser humano fue utilizado para la elaboracion de los musculos.'     
),
(
    'Rojo',
    'Representa el angulo este del universo y significa el inicio de toda actividad en el tiempo y el espacio.',
    'En la creacion del ser humano fue utilizado para la elaboracion de la sangre.'
            
);

INSERT INTO departamentos VALUES (
    17,
    'Petén',
    0.18
),
(
    16,
    'Alta Verapaz',
    0.10
),
(
    14,
    'Quiche',
    0.08
),
(
    22,
    'Jutiapa',
    0.07
),
(
    13,
    'Huehuetenango',
    0.06
),
(
    12,
    'San Marcos',
    0.05
),
(
    6,
    'Santa Rosa',
    0.05
),
(
    4,
    'Chimaltenango',
    0.04
),
(
    5,
    'Escuintla',
    0.04
),
(
    11,
    'Retalhuleu',
    0.04
),
(
    9,
    'Quetzaltenango',
    0.04
),
(
    0,
    'Restante',
    0.25
);

INSERT INTO origenes VALUES (
    'San Marcos',
    'En Tacaná, San Marcos, se cuenta acerca del maíz que había salido del cerro Witz Teninquin —que en mam significa Mazorca de maíz—, al pie de la gran Sierra Madre. Desde que sembraron esa mazorca solo abundó el maíz bueno y fuerte para las personas. Cuando tronaba el cerro significaba que llovería, ya que el maíz fue sacado directamente del corazón de la tierra.'           
),
(
    'Santa Rosa',
    'En algunas regiones de Santa Rosa cuentan acerca de 7 hermanos que vieron una rata salir del cerro con una mazorca de maíz. Al buscar por el lugar, los hermanos trataron de abrir el cerro con una espada, pero no podían hacerlo. El más viejo tomó la espada y logró abrir el cerro, de donde salieron unas hermosas mazorcas. Los hermanos comenzaron a recolectar para sembrar sus semillas y el mayor se quedó con la mejor cosecha. Entonces los hermanos se enojaron y decidieron sumergirlo en el fondo del mar. Desde entonces, el hermano mayor se volvió en el rey del cerro y mandaba lluvia para regar las cosechas. Eran fuertes lluvias que tronaban y botaban las milpas de los hombres que no se ayudaban entre sí, y beneficiaban a quienes colaboraban juntos para cosechar. Algunas personas cuentan que caían pescados y cangrejos azules, como regalo del rey.'          
);
