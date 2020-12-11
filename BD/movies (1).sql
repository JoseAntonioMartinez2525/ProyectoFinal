-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2020 a las 19:07:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `movies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `cover` varchar(255) NOT NULL,
  `minutes` int(11) NOT NULL,
  `clasification` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `cast` varchar(300) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `cover`, `minutes`, `clasification`, `country`, `cast`, `category_id`) VALUES
(1, 'a 2 metros de ti', 'Dos adolescentes que se encuentran en el hospital, ambos con enfermedades muy graves que amenazan sus vidas, se conocen y comienzan a enamorarse.', 'a.jpg', 120, 'B15', 'USA', 'Haley Lu Richardson Cole Sprouse', 8),
(2, '48wishes', 'Dos elfos están a punto de arruinar la Navidad, a menos que puedan salvarla antes de que se acabe el tiempo.', 's-6.jpg', 84, 'PG13', 'Canada', 'Madeline Leon (Laura), Liam Macdonald (Blake), Clara Kushnir (Mindy), Maya Franzoni (Sammy), Ethan Yang (Cam), Elizabeth Ellsworth (Emma), Paul Dick (Santa), Bruce Gram (Benny), Rais Muoi (George).', 4),
(3, 'spider man lejos de casa', 'Peter Parker decide irse junto a MJ, Ned y el resto de sus amigos a pasar unas vacaciones a Europa. Sin embargo, el plan de Parker por dejar de lado sus superpoderes durante unas semanas se ven truncados cuando Nick Fury contacta con él para solicitarle ayuda para frenar el ataque de unas criaturas elementales que están causando el caos en el continente. ', 's5.jpg', 129, 'B15', 'USA', ' Tom Holland', 5),
(4, 'Step up revolution', 'La historia se centra en una joven , que se enamora del líder de un grupo de baile que organiza flashmobs por amor al arte. Cuando el padre de ésta quiere demoler el barrio donde viven los bailarines, la chica insta sus compañeros de baile a que utilicen los flashmobs para reivindicar.', 's-7.jpg', 100, 'B15', 'USA', ' Ryan Guzman. Kathryn McCormick. Misha Gabriel. ', 7),
(5, 'la sirenita', 'live-action de la caricatura \"la sirenita\"', 's2.jpg', 120, 'B15', 'USA', 'Halle Bailey Melissa McCarthy Javier Bardem Jonah Hauer-King', 1),
(6, 'deadpool', 'Basada en el antihéroe menos convencional de Marvel Comics, DEADPOOL cuenta los orígenes del antiguo agente de las Fuerzas Especiales reconvertido en mercenario Wade Wilson, quien, tras ser sometido a un perverso experimento que le confiere poderes de curación acelerada, adopta el álter ego de Deadpool.', 's-9.jpg', 120, 'B15', 'USA', 'Ryan Reynolds, Morena Baccarin, Ed Skrein,', 5),
(7, ' Ju-on: The Grudge', ' describe una maldición que nace cuando alguien muere bajo el influjo de un sentimiento extremo de ira o pena. Aquellos que encuentran esta fuerza asesina sobrenatural mueren y la maldición renace repetidamente, pasando de víctima a victimario en una interminable y creciente cadena de horror.', 's3.png', 120, 'B15', 'Japan', 'Takako Fuji ,Aiko Horiuchi', 2),
(8, 'la navidad de las madres rebeldes', 'Amy, Carla y Kiki harán todo lo posible por mantener la cordura cuando sus respectivas madres y abuelas les hagan una inesperada visita durante las vacaciones de Navidad.', 's4.jpg', 120, 'B15', 'USA', 'Mila Kunis, Kathryn Hahn, Kristen Bell', 6),
(9, 'angry birds 2', 'Secuela de la película \"Angry Birds\" en la que Red, Chuck, Bomb y el resto de sus amigos con plumas son abordados por un cerdo verde que les pide que se unan para luchar contra una amenaza común. Las aves agresivas de una isla cubierta de hielo planean usar un arma casera para destruir el modo de vida de las aves y los cerdos. El grupo deberá infiltrarse en la isla y detener el dispositivo.', 's-8.jpg', 92, 'PG13', 'USA', 'Jason Sudeikis(red) Peter Dinklage (Mighty Eagle) Peter Dinklage Mighty Eagle Bill Hader (Leonard) Bill Hader Leonard Danny McBride (Bomb)', 3),
(10, 'los minions', 'A lo largo de una evolución de millones de años, los minions se han puesto al servicio de los amos más despreciables. Kevin, acompañado por el rebelde Stuart y el adorable Bob, emprende un emocionante viaje para conseguir una jefa a quien servir, la terrible Scarlet Overkill.', 's-10.jpg', 91, 'PG13', 'USA', 'Bob Pierre Coffin Scarlett Overkill (Sandra Bullock) Scarlett Overkill Sandra Bullock Kevin (Pierre Coffin) Kevin Pierre Coffin Stuart (Pierre Coffin) Stuart Pierre Coffin', 3),
(11, 'godzilla 2', 'Las aventuras de unos criptzóologos de una agencia mientras tratan de enfrentarse a unos monstruos entre los que se encuentra el propio Godzilla. Entre todos intentarán frenar a estas criaturas que harán todo lo posible por sobrevivir', 's1.jpg', 120, 'B15', 'USA', 'Millie Bobby Brown,Ken Watanabe, Sally Hawkins', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
