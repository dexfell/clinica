-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2019 a las 20:21:38
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `multiclinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accountant`
--

CREATE TABLE `accountant` (
  `id` int(100) NOT NULL,
  `img_url` varchar(200) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `x` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ion_user_id` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `accountant`
--

INSERT INTO `accountant` (`id`, `img_url`, `name`, `email`, `address`, `phone`, `x`, `ion_user_id`) VALUES
(72, 'uploads/favicon7.png', 'Carlos Suarez', 'contador@dms.com', 'av brasil', '+9975 6765 7654', '', '112');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointment`
--

CREATE TABLE `appointment` (
  `id` int(100) NOT NULL,
  `patient` varchar(100) CHARACTER SET utf8 NOT NULL,
  `doctor` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `time_slot` varchar(100) CHARACTER SET utf8 NOT NULL,
  `s_time` varchar(100) CHARACTER SET utf8 NOT NULL,
  `e_time` varchar(100) CHARACTER SET utf8 NOT NULL,
  `remarks` varchar(500) CHARACTER SET utf8 NOT NULL,
  `add_date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `s_time_key` varchar(100) CHARACTER SET utf8 NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `appointment`
--

INSERT INTO `appointment` (`id`, `patient`, `doctor`, `date`, `time_slot`, `s_time`, `e_time`, `remarks`, `add_date`, `s_time_key`, `status`) VALUES
(290, '2476', '133', '1547593200', '12:15 PM A 01:15 PM', '12:15 PM', '01:15 PM', '', '01/15/19', '147', 'Approved'),
(291, '2476', '133', '1547593200', '02:45 PM A 02:15 PM', '02:45 PM', '02:15 PM', '', '01/15/19', '177', 'Approved');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bankb`
--

CREATE TABLE `bankb` (
  `id` int(100) NOT NULL,
  `group` varchar(100) CHARACTER SET utf8 NOT NULL,
  `status` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bankb`
--

INSERT INTO `bankb` (`id`, `group`, `status`) VALUES
(1, 'A+', '0 Bags'),
(2, 'A-', '0 Bags'),
(3, 'B+', '0 Bags'),
(4, 'B-', '0 Bags'),
(5, 'AB+', '0 Bags'),
(6, 'AB-', '0 Bags'),
(7, 'O+', '0 Bags'),
(8, 'O-', '0 Bags');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `department`
--

CREATE TABLE `department` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `x` varchar(10) CHARACTER SET utf8 NOT NULL,
  `y` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `department`
--

INSERT INTO `department` (`id`, `name`, `description`, `x`, `y`) VALUES
(12, 'Cardiologia', '\r\n<p> Este departamento brinda atención médica a los pacientes que tienen problemas con su corazón o circulación. Se trata a las personas en régimen de hospitalización y ambulatorio. </p>\r\n', '', ''),
(15, 'Diagnóstico por imagen\r\n', 'Anteriormente conocido como rayos X, este departamento proporciona una gama completa de servicios de diagnóstico por imagen que incluyen:', '', ''),
(17, 'Oreja nariz y garganta (ENT)\r\n', '\r\nOreja nariz y garganta (ENT)\r\nEl departamento de ORL atiende a pacientes con una variedad de problemas, que incluyen:\r\nEnfermedades generales del oído, nariz y garganta.\r\nbultos en el cuello\r\ncánceres del área de la cabeza y el cuello\r\nproblemas de conductos lagrimales\r\nlesiones faciales de la piel\r\ntrastornos del equilibrio y de la audición\r\nronquidos y apnea del sueño\r\nProblemas de alergia ENT\r\nenfermedades de las glándulas salivales\r\ntrastornos de la voz.\r\n', '', ''),
(20, 'Cirugía General\r\n', '\r\nLa sala de cirugía general cubre una amplia gama de cirugía.', '', ''),
(23, 'Departamentos de maternidad\r\n', 'Las mujeres ahora tienen la opción de dirigir su atención de maternidad y dónde dar a luz. La atención puede ser dirigida por un consultor, un médico de cabecera o una partera.\r\n\r\n\r\n', '', ''),
(24, 'Microbiología\r\n', 'El departamento de microbiología examina todos los aspectos de la microbiología, como las infecciones bacterianas y virales.\r\n\r\n', '', ''),
(26, 'Nefrologia\r\n', 'Este departamento supervisa y evalúa a los pacientes con problemas renales (renales).\r\n', '', ''),
(27, 'Neurología\r\n', 'Esta unidad trata los trastornos del sistema nervioso, como el cerebro y la médula espinal. Está dirigido por médicos que se especializan en esta área (neurólogos) y su personal.\r\n\r\n', '', ''),
(28, 'Nutrición y Dietética\r\n', '\r\nDietistas y nutricionistas capacitados brindan asesoramiento especializado sobre dietas para hospitales y clínicas ambulatorias, formando parte de un equipo multidisciplinario.\r\n\r\n', '', ''),
(32, 'Terapia ocupacional\r\n', '\r\nEsta profesión ayuda a las personas con discapacidades físicas o mentales, incluida la discapacidad temporal después del tratamiento médico. Se practica tanto en el ámbito sanitario como social.\r\n', '', ''),
(33, 'Oncología\r\n', 'Este departamento proporciona radioterapia y una amplia gama de tratamientos de quimioterapia para tumores cancerosos y trastornos sanguíneos.\r\n\r\n\r\n', '', ''),
(34, 'Oftalmología\r\n', 'Los departamentos de ojos ofrecen una gama de servicios oftalmológicos para adultos y niños,\r\n\r\n\r\n', '', ''),
(35, 'Ortopedía', 'Los departamentos ortopédicos tratan problemas que afectan su sistema musculoesquelético. Esos son tus músculos, articulaciones, huesos, ligamentos, tendones y nervios.\r\n\r\n', '', ''),
(36, 'Clinicas de manejo del dolor\r\n', 'Generalmente dirigidas por anestesistas consultores, estas clínicas tienen como objetivo ayudar a tratar a pacientes con dolor intenso a largo plazo que parece resistente a los tratamientos normales.\r\n', '', ''),
(38, 'Fisioterapia\r\n', 'Los fisioterapeutas promueven la curación del cuerpo, por ejemplo, después de la cirugía, a través de terapias como el ejercicio y la manipulación.\r\n', '', ''),
(39, 'Radioterapia\r\n', '\r\nRadioterapia\r\nDirigido por una combinación de médicos consultores y radioterapeutas especialmente capacitados, este departamento brinda tratamiento de radioterapia (rayos X) para afecciones como tumores malignos y cáncer.\r\n\r\n', '', ''),
(40, 'Unidad renal\r\n', 'Relacionadas estrechamente con los equipos de nefrología en los hospitales, estas unidades brindan tratamiento de hemodiálisis para pacientes con insuficiencia renal. Muchos de estos pacientes están en listas de espera para un trasplante de riñón.\r\n\r\n', '', ''),
(41, 'Reumatología\r\n', 'Médicos especialistas llamados reumatólogos dirigen la unidad y son expertos en el campo de los trastornos musculoesqueléticos (huesos, articulaciones, ligamentos, tendones, músculos y nervios).\r\n\r\n', '', ''),
(42, 'Salud sexual (medicina genitourinaria)\r\n', '\r\nEste departamento proporciona un servicio gratuito y confidencial que ofrece:\r\nAsesoramiento, pruebas y tratamiento para todas las infecciones de transmisión sexual (ITS)\r\natención de planificación familiar (incluyendo anticoncepción de emergencia y condones gratuitos)\r\nPruebas de embarazo y consejos.\r\nTambién proporciona atención y apoyo para otros problemas sexuales y genitales.\r\nLos pacientes generalmente pueden llamar al departamento directamente para una cita y no necesitan una carta de referencia de su médico de cabecera.\r\n\r\n\r\n', '', ''),
(43, 'Urología\r\n', 'El departamento de urología está dirigido por cirujanos especialistas en urología y sus equipos quirúrgicos. Investiga todas las áreas relacionadas con problemas de riñón y vejiga.\r\n\r\n', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostic_report`
--

CREATE TABLE `diagnostic_report` (
  `id` int(100) NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `invoice` varchar(100) CHARACTER SET utf8 NOT NULL,
  `report` varchar(10000) CHARACTER SET utf8 NOT NULL,
  `status` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

CREATE TABLE `doctor` (
  `id` int(10) NOT NULL,
  `img_url` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `department` varchar(100) CHARACTER SET utf8 NOT NULL,
  `profile` varchar(100) CHARACTER SET utf8 NOT NULL,
  `x` varchar(100) CHARACTER SET utf8 NOT NULL,
  `y` varchar(10) CHARACTER SET utf8 NOT NULL,
  `ion_user_id` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `doctor`
--

INSERT INTO `doctor` (`id`, `img_url`, `name`, `email`, `address`, `phone`, `department`, `profile`, `x`, `y`, `ion_user_id`) VALUES
(133, '', 'Dr Reynaldo Juarez', 'doctor@dms.com', 'Collegepara, Rajbari', '+0123456789', 'Cardiology', 'MD Cardiology', '', '', '652');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donor`
--

CREATE TABLE `donor` (
  `id` int(100) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `group` varchar(10) CHARACTER SET utf8 NOT NULL,
  `age` varchar(10) CHARACTER SET utf8 NOT NULL,
  `sex` varchar(10) CHARACTER SET utf8 NOT NULL,
  `ldd` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `add_date` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expense`
--

CREATE TABLE `expense` (
  `id` int(10) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `note` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `amount` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `expense`
--

INSERT INTO `expense` (`id`, `category`, `date`, `note`, `amount`, `user`) VALUES
(81, 'Sueldo personal', '1547579383', '', '5000', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expense_category`
--

CREATE TABLE `expense_category` (
  `id` int(10) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 NOT NULL,
  `x` varchar(100) CHARACTER SET utf8 NOT NULL,
  `y` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `expense_category`
--

INSERT INTO `expense_category` (`id`, `category`, `description`, `x`, `y`) VALUES
(55, 'Sueldo personal', 'Sueldo personal aca se registran los sueldos', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'Accountant', 'For Financial Activities'),
(4, 'Doctor', ''),
(5, 'Patient', ''),
(6, 'Nurse', ''),
(7, 'Pharmacist', ''),
(8, 'Laboratorist', ''),
(10, 'Receptionist', 'Receptionist');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lab`
--

CREATE TABLE `lab` (
  `id` int(100) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 NOT NULL,
  `patient` varchar(100) CHARACTER SET utf8 NOT NULL,
  `doctor` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `category_name` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `report` varchar(10000) CHARACTER SET utf8 NOT NULL,
  `status` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user` varchar(100) CHARACTER SET utf8 NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_phone` varchar(100) NOT NULL,
  `patient_address` varchar(100) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `date_string` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lab`
--

INSERT INTO `lab` (`id`, `category`, `patient`, `doctor`, `date`, `category_name`, `report`, `status`, `user`, `patient_name`, `patient_phone`, `patient_address`, `doctor_name`, `date_string`) VALUES
(1886, '', '2476', '133', '1547506800', '', '<p>El paciente tiene alergia moderada</p>\r\n', '', '1', 'Francisco pizarro', '+0123456789', 'av colo colo', 'Dr Reynaldo Juarez', '15-01-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorist`
--

CREATE TABLE `laboratorist` (
  `id` int(100) NOT NULL,
  `img_url` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `x` varchar(100) CHARACTER SET utf8 NOT NULL,
  `y` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ion_user_id` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `laboratorist`
--

INSERT INTO `laboratorist` (`id`, `img_url`, `name`, `email`, `address`, `phone`, `x`, `y`, `ion_user_id`) VALUES
(3, 'uploads/favicon1.png', 'Clever Sanchez Viñedo', 'laboratorista@dms.com', 'Tegucigalpa', '+9976 65443 76547', '', '', '111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lab_category`
--

CREATE TABLE `lab_category` (
  `id` int(10) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 NOT NULL,
  `reference_value` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lab_category`
--

INSERT INTO `lab_category` (`id`, `category`, `description`, `reference_value`) VALUES
(35, 'Troponin-I', 'Pathological Test', ''),
(36, 'CBC (DIGITAL)', 'Pathological Test', ''),
(37, 'Eosinophil', 'Pathological Test', ''),
(38, 'Plaquetas', 'Pathological Test', ''),
(39, 'Parásitos de la malaria (MP)\r\n', 'Pathological Test', ''),
(40, 'BT/ CT', 'Pathological Test', ''),
(41, 'ASO Titre', 'Pathological Test', ''),
(42, 'CRP', 'Pathological Test', ''),
(43, 'R/A test', 'Pathological Test', ''),
(44, 'VDRL', 'Pathological Test', ''),
(45, 'TPHA', 'Pathological Test', ''),
(46, 'HBsAg (Screening)', 'Pathological Test', ''),
(47, 'HBsAg (Confirmatori)', 'Pathological Test', ''),
(48, 'CFT for Kala Zar', 'Pathological Test', ''),
(49, 'CFT for Filaria', 'Pathological Test', ''),
(50, 'Pregnancy Test', 'Pathological Test', ''),
(51, 'Blood Grouping', 'Pathological Test', ''),
(52, 'Widal Test', 'Pathological Test', '(70-110)mg/dl'),
(53, 'RBS', 'Pathological Test', ''),
(54, 'Blood Urea', 'Pathological Test', ''),
(55, 'S. Creatinine', 'Pathological Test', ''),
(56, 'S. cholesterol', 'Pathological Test', ''),
(57, 'Fasting Lipid Profile', 'Pathological Test', ''),
(58, 'S. Bilirubin', 'Pathological Test', ''),
(59, 'S. Alkaline Phosohare', 'Pathological Test', ''),
(61, 'S. Calcium', 'Pathological Test', ''),
(62, 'RBS with CUS', 'Pathological Test', ''),
(63, 'SGPT', 'Pathological Test', ''),
(64, 'SGOT', 'Pathological Test', ''),
(65, 'Urine for R/E', 'Pathological Test', ''),
(66, 'Urine C/S', 'Pathological Test', ''),
(67, 'Stool for R/E', 'Pathological Test', ''),
(68, 'Semen Analysis', 'Pathological Test', ''),
(69, 'S. Electrolyte', 'Pathological Test', ''),
(70, 'S. T3/ T4/ THS', 'Pathological Test', ''),
(71, 'MT', 'Pathological Test', ''),
(106, 'ESR', 'Patho Test', ''),
(107, 'FBS CUS', 'Pathological test', ''),
(108, 'Hb%', 'Pathological test', ''),
(114, '2HABF', 'Pathological test', ''),
(113, 'FBS', 'Pathological test', ''),
(115, 'S. TSH', 'Pathological test', ''),
(116, 'S. T3', 'Pathological test', ''),
(117, 'DC', 'Pathological test', ''),
(118, 'TC', 'Pathological test', ''),
(120, 'S. Uric acid', 'Pathological test', ''),
(126, 'eosinphil', 'Pathology Test', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medical_history`
--

CREATE TABLE `medical_history` (
  `id` int(100) NOT NULL,
  `patient_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(10000) CHARACTER SET utf8 NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_address` varchar(500) NOT NULL,
  `patient_phone` varchar(100) NOT NULL,
  `img_url` varchar(500) CHARACTER SET utf8 NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medical_history`
--

INSERT INTO `medical_history` (`id`, `patient_id`, `description`, `patient_name`, `patient_address`, `patient_phone`, `img_url`, `date`) VALUES
(33, '2476', '<p>Resfriado</p>\r\n', 'Francisco pizarro', 'av colo colo', '+0123456789', '', '16-01-2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicine`
--

CREATE TABLE `medicine` (
  `id` int(100) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 NOT NULL,
  `price` varchar(100) CHARACTER SET utf8 NOT NULL,
  `box` varchar(100) CHARACTER SET utf8 NOT NULL,
  `s_price` varchar(100) CHARACTER SET utf8 NOT NULL,
  `quantity` int(100) NOT NULL,
  `generic` varchar(100) CHARACTER SET utf8 NOT NULL,
  `company` varchar(100) CHARACTER SET utf8 NOT NULL,
  `effects` varchar(100) CHARACTER SET utf8 NOT NULL,
  `e_date` varchar(70) CHARACTER SET utf8 NOT NULL,
  `add_date` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `category`, `price`, `box`, `s_price`, `quantity`, `generic`, `company`, `effects`, `e_date`, `add_date`) VALUES
(2856, 'ritalin', 'Farmacos', '2', '12', '3', 100, 'ritalin', 'vbc over', 'sueño', '27-03-2019', '01/15/19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicine_category`
--

CREATE TABLE `medicine_category` (
  `id` int(100) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicine_category`
--

INSERT INTO `medicine_category` (`id`, `category`, `description`) VALUES
(14, 'Farmacos', 'Farmacos'),
(15, 'Jarabe', 'Jarabe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nurse`
--

CREATE TABLE `nurse` (
  `id` int(100) NOT NULL,
  `img_url` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `x` varchar(100) CHARACTER SET utf8 NOT NULL,
  `y` varchar(100) CHARACTER SET utf8 NOT NULL,
  `z` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ion_user_id` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nurse`
--

INSERT INTO `nurse` (`id`, `img_url`, `name`, `email`, `address`, `phone`, `x`, `y`, `z`, `ion_user_id`) VALUES
(8, 'uploads/favicon4.png', 'Solanch Fonseca', 'enfermera@dms.com', 'av san cruz', '344565', '', '', '', '109');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ot_payment`
--

CREATE TABLE `ot_payment` (
  `id` int(100) NOT NULL,
  `patient` varchar(100) CHARACTER SET utf8 NOT NULL,
  `doctor_c_s` varchar(100) CHARACTER SET utf8 NOT NULL,
  `doctor_a_s_1` varchar(100) CHARACTER SET utf8 NOT NULL,
  `doctor_a_s_2` varchar(100) CHARACTER SET utf8 NOT NULL,
  `doctor_anaes` varchar(100) CHARACTER SET utf8 NOT NULL,
  `n_o_o` varchar(100) CHARACTER SET utf8 NOT NULL,
  `c_s_f` varchar(100) CHARACTER SET utf8 NOT NULL,
  `a_s_f_1` varchar(100) CHARACTER SET utf8 NOT NULL,
  `a_s_f_2` varchar(11) CHARACTER SET utf8 NOT NULL,
  `anaes_f` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ot_charge` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cab_rent` varchar(100) CHARACTER SET utf8 NOT NULL,
  `seat_rent` varchar(100) CHARACTER SET utf8 NOT NULL,
  `others` varchar(100) CHARACTER SET utf8 NOT NULL,
  `discount` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `amount` varchar(100) CHARACTER SET utf8 NOT NULL,
  `doctor_fees` varchar(100) CHARACTER SET utf8 NOT NULL,
  `hospital_fees` varchar(100) CHARACTER SET utf8 NOT NULL,
  `gross_total` varchar(100) CHARACTER SET utf8 NOT NULL,
  `flat_discount` varchar(100) CHARACTER SET utf8 NOT NULL,
  `amount_received` varchar(100) CHARACTER SET utf8 NOT NULL,
  `status` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ot_payment`
--

INSERT INTO `ot_payment` (`id`, `patient`, `doctor_c_s`, `doctor_a_s_1`, `doctor_a_s_2`, `doctor_anaes`, `n_o_o`, `c_s_f`, `a_s_f_1`, `a_s_f_2`, `anaes_f`, `ot_charge`, `cab_rent`, `seat_rent`, `others`, `discount`, `date`, `amount`, `doctor_fees`, `hospital_fees`, `gross_total`, `flat_discount`, `amount_received`, `status`, `user`) VALUES
(85, '451', 'None', '123', 'None', '125', 'dbdbd', '', '1000', '0', '1000', '', '', '', '', '', '1506195494', '2000', '2000', '0', '2000', '', '1000', 'unpaid', '614');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patient`
--

CREATE TABLE `patient` (
  `id` int(100) NOT NULL,
  `img_url` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `doctor` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sex` varchar(100) CHARACTER SET utf8 NOT NULL,
  `birthdate` varchar(100) CHARACTER SET utf8 NOT NULL,
  `age` varchar(100) CHARACTER SET utf8 NOT NULL,
  `bloodgroup` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ion_user_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `patient_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `add_date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `how_added` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `patient`
--

INSERT INTO `patient` (`id`, `img_url`, `name`, `email`, `doctor`, `address`, `phone`, `sex`, `birthdate`, `age`, `bloodgroup`, `ion_user_id`, `patient_id`, `add_date`, `how_added`) VALUES
(2476, 'uploads/download_(2).png', 'Francisco pizarro', 'paciente@dms.com', '133', 'av colo colo', '+0123456789', 'Male', '26-06-2018', '', 'A+', '679', '760238', '06/26/18', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patient_deposit`
--

CREATE TABLE `patient_deposit` (
  `id` int(10) NOT NULL,
  `patient` varchar(100) CHARACTER SET utf8 NOT NULL,
  `payment_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `deposited_amount` varchar(100) CHARACTER SET utf8 NOT NULL,
  `amount_received_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `patient_deposit`
--

INSERT INTO `patient_deposit` (`id`, `patient`, `payment_id`, `date`, `deposited_amount`, `amount_received_id`, `user`) VALUES
(1491, '2476', '1881', '1547579894', '1200', '1881.gp', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patient_material`
--

CREATE TABLE `patient_material` (
  `id` int(100) NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 NOT NULL,
  `patient` varchar(100) CHARACTER SET utf8 NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_address` varchar(100) NOT NULL,
  `patient_phone` varchar(100) NOT NULL,
  `url` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `date_string` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `patient_material`
--

INSERT INTO `patient_material` (`id`, `date`, `title`, `category`, `patient`, `patient_name`, `patient_address`, `patient_phone`, `url`, `date_string`) VALUES
(52, '1538465539', 'Hospital', '', '2483', 'jhkhk', 'hjkhkjhkjhk', 'hkjkjhkjh', '', '02-10-18'),
(53, '1547578668', 'radiografia', '', '2476', 'Francisco pizarro', 'av colo colo', '+0123456789', 'uploads/cod_barras.pdf', '15-01-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 NOT NULL,
  `patient` varchar(100) CHARACTER SET utf8 NOT NULL,
  `doctor` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `amount` varchar(100) CHARACTER SET utf8 NOT NULL,
  `vat` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `x_ray` varchar(100) CHARACTER SET utf8 NOT NULL,
  `flat_vat` varchar(100) CHARACTER SET utf8 NOT NULL,
  `discount` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `flat_discount` varchar(100) CHARACTER SET utf8 NOT NULL,
  `gross_total` varchar(100) CHARACTER SET utf8 NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `hospital_amount` varchar(100) CHARACTER SET utf8 NOT NULL,
  `doctor_amount` varchar(100) CHARACTER SET utf8 NOT NULL,
  `category_amount` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `category_name` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `amount_received` varchar(100) CHARACTER SET utf8 NOT NULL,
  `status` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user` varchar(100) CHARACTER SET utf8 NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_phone` varchar(100) NOT NULL,
  `patient_address` varchar(100) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `date_string` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `payment`
--

INSERT INTO `payment` (`id`, `category`, `patient`, `doctor`, `date`, `amount`, `vat`, `x_ray`, `flat_vat`, `discount`, `flat_discount`, `gross_total`, `remarks`, `hospital_amount`, `doctor_amount`, `category_amount`, `category_name`, `amount_received`, `status`, `user`, `patient_name`, `patient_phone`, `patient_address`, `doctor_name`, `date_string`) VALUES
(1881, '', '2476', '', '1547578559', '1200', '0', '', '', '100', '100', '1100', '', '1100', '0', '', 'Cuotas de admisión*100*others,Análisis de semen*300*diagnostic,S. electrolito*800*diagnostic', '1200', 'unpaid', '1', 'Francisco pizarro', '+0123456789', 'av colo colo', '', '15-01-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paymentgateway`
--

CREATE TABLE `paymentgateway` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `merchant_key` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `x` varchar(100) NOT NULL,
  `y` varchar(100) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paymentgateway`
--

INSERT INTO `paymentgateway` (`id`, `name`, `merchant_key`, `salt`, `x`, `y`, `status`) VALUES
(1, 'Pay U Money', '0KWJATSQ', '8nBhndVz04', '', '', 'test'),
(2, 'Paypal', '0KWJATSQ', '8nBhndVz04', '', '', 'test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_category`
--

CREATE TABLE `payment_category` (
  `id` int(10) NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 NOT NULL,
  `c_price` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(100) CHARACTER SET utf8 NOT NULL,
  `d_commission` int(100) NOT NULL,
  `h_commission` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `payment_category`
--

INSERT INTO `payment_category` (`id`, `category`, `description`, `c_price`, `type`, `d_commission`, `h_commission`) VALUES
(78, 'USG - Embarazo Pro', 'USG - Embarazo Pro', '400', 'diagnostic', 30, 0),
(19, 'Cuota de barrio', 'Depósitos de sala', '400', 'others', 0, 0),
(20, 'Cuotas de admisión', 'Cuotas de admisión', '100', 'others', 0, 0),
(23, 'Oxyzen', 'Ingresos de Oxyzen', '0', 'others', 0, 0),
(24, 'Nebulizador', 'Ingresos De Nebulizador', '60', 'others', 0, 0),
(25, 'Newspaper sell', 'Income From selling old newspaper', '0', 'others', 0, 0),
(33, 'Ambulancia', 'Ambulancia', '0', 'others', 0, 0),
(43, 'Prueba R / A', 'Test patologico', '300', 'diagnostic', 30, 0),
(44, 'VDRL', 'Prueba patologico', '200', 'diagnostic', 30, 0),
(50, 'Pregnancy Test', 'Pathological Test', '150', 'diagnostic', 30, 0),
(55, 'S. Creatinina', 'Test patologico', '250', 'diagnostic', 30, 0),
(56, 'S. colesterol', 'Test patologico', '250', 'diagnostic', 30, 0),
(61, 'S. Calcio', 'Test patologico', '350', 'diagnostic', 30, 0),
(66, 'Orina C / S', 'Test patologico', '350', 'diagnostic', 30, 0),
(67, 'Taburete para R / E', 'Test patologico', '150', 'diagnostic', 30, 0),
(68, 'Análisis de semen', 'Test patologico', '300', 'diagnostic', 30, 0),
(69, 'S. electrolito', 'Test patologico', '800', 'diagnostic', 30, 0),
(77, 'USG - Abdomen entero', 'USG - Abdomen entero', '400', 'diagnostic', 30, 0),
(76, 'pecho de rayos x', 'Normal', '200', 'diagnostic', 10, 0),
(80, 'USG - Hígado', 'USG - Hígado', '400', 'diagnostic', 30, 0),
(82, 'USG - mama (derecha)', 'USG - mama (derecha)', '400', 'diagnostic', 30, 0),
(85, 'Rayos x - kub                         ', 'Rayos x - kub ', '500', 'diagnostic', 20, 0),
(86, 'RAYOS X - Articulación de la pierna (B / V) (L / R)', 'RAYOS X - Articulación de la pierna (B / V) (L / R)', '500', 'diagnostic', 20, 0),
(87, 'RAYOS X-Articulación de rodilla (L / R)', 'RAYOS X-Articulación de rodilla (L / R)', '500', 'diagnostic', 20, 0),
(88, 'Rayos X - Dedo (B / V)', 'Rayos X - Dedo (B / V)', '350', 'diagnostic', 20, 0),
(89, 'RAYOS X - Muñeca (B / V) (L / R)', 'RAYOS X - Muñeca (B / V) (L / R)', '350', 'diagnostic', 20, 0),
(90, 'RAYOS X - Mano (B / V) (L / R)                   ', 'RAYOS X - Mano (B / V) (L / R)      ', '350', 'diagnostic', 20, 0),
(91, 'RAYOS X - Codo (B / V) (L / R)', 'RAYOS X - Codo (B / V) (L / R)', '350', 'diagnostic', 20, 0),
(92, 'RAYOS X - Erm (B / V) (L / R)', 'RAYOS X - Erm (B / V) (L / R)', '350', 'diagnostic', 20, 0),
(93, 'RAYOS X - Articulación del hombro (B / V)', 'RAYOS X - Articulación del hombro (B / V)', '500', 'diagnostic', 20, 0),
(94, 'RAYOS X - Articulación del hombro (A / P)', 'RAYOS X - Articulación del hombro (A / P)', '350', 'diagnostic', 20, 0),
(95, 'Rayos X - Pie (B / V)', 'Rayos X - Pie (B / V)', '350', 'diagnostic', 20, 0),
(96, 'RAYOS X - Muslo (B / V)', 'RAYOS X - Muslo (B / V)', '500', 'diagnostic', 20, 0),
(98, 'RAYOS X - Articulación de la cadera (A / P)', 'RAYOS X - Articulación de la cadera (A / P)', '350', 'diagnostic', 20, 0),
(99, 'Rayos X - Pelvis (A / P)', 'X-RAY - Pelvis(A/P)', '500', 'diagnostic', 20, 0),
(100, 'RAYOS X - L / S (B / V) (columna vertebral Lamber)', 'RAYOS X - L / S (B / V) (columna vertebral Lamber)', '500', 'diagnostic', 20, 0),
(101, 'RAYOS X - L / S (A / P) (LamberSpine)', 'RAYOS X - L / S (A / P) (LamberSpine)', '500', 'diagnostic', 20, 0),
(102, 'RAYOS X - D / L (A / P) (Torácico)', 'RAYOS X - D / L (A / P) (Torácico)', '500', 'diagnostic', 20, 0),
(103, 'RAYOS X - Mandable (B / V)', 'RAYOS X - Mandable (B / V)', '500', 'diagnostic', 20, 0),
(104, 'pecho de rayos x', 'pecho de rayos x', '500', 'diagnostic', 20, 0),
(105, 'RAYOS X - PNS (AP)', 'RAYOS X - PNS (AP)', '350', 'diagnostic', 20, 0),
(108, 'Hb%', 'Pathological test', '100', 'diagnostic', 30, 0),
(109, 'Physio-Therapy', 'Therapy', '1000', '', 0, 0),
(119, 'Rayos X CXR (Digital)', 'Radiografía', '500', 'diagnostic', 20, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pharmacist`
--

CREATE TABLE `pharmacist` (
  `id` int(100) NOT NULL,
  `img_url` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `x` varchar(100) CHARACTER SET utf8 NOT NULL,
  `y` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ion_user_id` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pharmacist`
--

INSERT INTO `pharmacist` (`id`, `img_url`, `name`, `email`, `address`, `phone`, `x`, `y`, `ion_user_id`) VALUES
(7, 'uploads/favicon6.png', 'York Harrison', 'farmaceutico@dms.com', 'av independecia', '+4479 5665 543367', '', '', '110');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prescription`
--

CREATE TABLE `prescription` (
  `id` int(100) NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `patient` varchar(100) CHARACTER SET utf8 NOT NULL,
  `doctor` varchar(100) CHARACTER SET utf8 NOT NULL,
  `symptom` varchar(100) CHARACTER SET utf8 NOT NULL,
  `advice` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `state` varchar(100) CHARACTER SET utf8 NOT NULL,
  `dd` varchar(100) CHARACTER SET utf8 NOT NULL,
  `medicine` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `validity` varchar(100) CHARACTER SET utf8 NOT NULL,
  `note` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prescription`
--

INSERT INTO `prescription` (`id`, `date`, `patient`, `doctor`, `symptom`, `advice`, `state`, `dd`, `medicine`, `validity`, `note`) VALUES
(47, '1547593200', '2476', '133', '<p>Tiene alergia al frio</p>\r\n', '', '', '', '<p>Tomar ritalin 3 veces al dia</p>\r\n\r\n<p>Suflomix  manaña y tarde</p>\r\n', '', '<p>Volver dentro de 1 mes</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receptionist`
--

CREATE TABLE `receptionist` (
  `id` int(100) NOT NULL,
  `img_url` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `x` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ion_user_id` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `receptionist`
--

INSERT INTO `receptionist` (`id`, `img_url`, `name`, `email`, `address`, `phone`, `x`, `ion_user_id`) VALUES
(7, '', 'Susan Frisancho', 'recepcionista@dms.com', 'av ejercicto', '+0123456789', '', '614');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `system_vendor` varchar(100) CHARACTER SET utf8 NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `facebook_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `currency` varchar(100) CHARACTER SET utf8 NOT NULL,
  `language` varchar(100) CHARACTER SET utf8 NOT NULL,
  `discount` varchar(100) CHARACTER SET utf8 NOT NULL,
  `vat` varchar(100) CHARACTER SET utf8 NOT NULL,
  `login_title` varchar(100) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `invoice_logo` varchar(500) NOT NULL,
  `codec_username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `codec_purchase_code` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`id`, `system_vendor`, `title`, `address`, `phone`, `email`, `facebook_id`, `currency`, `language`, `discount`, `vat`, `login_title`, `logo`, `invoice_logo`, `codec_username`, `codec_purchase_code`) VALUES
(1, 'Multiclinica', 'Sistema Multiclinica premium', 'av 2 de julioi', '+0123456789', 'tusolutionweb@gmail.com', '#', '$', 'spanish', 'flat', 'percentage', 'Login Title', 'uploads/logo-nonetext.png', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sms`
--

CREATE TABLE `sms` (
  `id` int(100) NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `message` varchar(100) CHARACTER SET utf8 NOT NULL,
  `recipient` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sms_settings`
--

CREATE TABLE `sms_settings` (
  `id` int(100) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `api_id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sms_settings`
--

INSERT INTO `sms_settings` (`id`, `username`, `password`, `api_id`, `user`) VALUES
(1, 'rizviplabon', '', '3570596', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'admin', '$2y$08$veXd8te7xmKs4eF54ByGbu5LJbZv3BJiydS9z4oSyGzp0dSQUEMRe', '', 'admin@dms.com', '', 'eX0.Bq6nP57EuXX4hJkPHO973e7a4c25f1849d3a', 1511432365, 'zCeJpcj78CKqJ4sVxVbxcO', 1268889823, 1547578510, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(109, '113.11.74.192', 'Solanch Fonseca', '$2y$08$BHu4jl.U0HQbaoH/EKclHuRqZ5V78rve0NJWDKTt30ZnGIg/5ceEi', NULL, 'enfermera@dms.com', NULL, NULL, NULL, NULL, 1435082243, 1547568133, 1, NULL, NULL, NULL, NULL),
(110, '113.11.74.192', 'York Harrison', '$2y$08$ns/V6lSB.8Un.NiASZePHOZMgck84jZTIWxQYHDme/Yoomg5QZAPe', NULL, 'farmaceutico@dms.com', NULL, NULL, NULL, 'mbeMop6vTuscFYmD2M4Iqu', 1435082359, 1547568146, 1, NULL, NULL, NULL, NULL),
(111, '113.11.74.192', 'Clever Sanchez Viñedo', '$2y$08$7aqno0DoIJz9D8J8La4CE.wFQRiXZ3Nl6ZPt01Q3W7KhtpPJ7IRXy', NULL, 'laboratorista@dms.com', NULL, NULL, NULL, NULL, 1435082438, 1547572496, 1, NULL, NULL, NULL, NULL),
(112, '113.11.74.192', 'Carlos Suarez', '$2y$08$kDO63i5Uwf4vKXYyT45cvevzXJSyNd9XyJw8vm9jJ9nYs1Hu8s6Iy', NULL, 'contador@dms.com', NULL, NULL, NULL, NULL, 1435082637, 1547568169, 1, NULL, NULL, NULL, NULL),
(610, '103.231.162.58', 'sdhsjgj', '$2y$08$JBdbYvWr0BaswifulhauLOBizxRMnx1XZeuaUNJ6utt4AqH.7c/je', NULL, 'jgjjhjgjh', NULL, NULL, NULL, NULL, 1505800387, NULL, 1, NULL, NULL, NULL, NULL),
(611, '103.231.162.58', 'vsgdvfds', '$2y$08$N3qoioTmznb7./7dhrfXp.ZAp7H1Vu2rU.EWdFUx5z7ECcm.la7Ee', NULL, 'hfhgfhfhgf', NULL, NULL, NULL, NULL, 1505800659, NULL, 1, NULL, NULL, NULL, NULL),
(612, '103.231.162.58', 'vsgdvfds1', '$2y$08$rjDLi21IP2Dncaz/FgXkJ.DYoxoYigHOjgkv4MgQby.2UQ5G61qVm', NULL, 'hfhgfhfhgfefeer', NULL, NULL, NULL, NULL, 1505800739, NULL, 1, NULL, NULL, NULL, NULL),
(614, '103.231.162.58', 'Susan Frisancho', '$2y$08$24jroN0vtsePjHUhuqUO3.1S1pSFU0qs3zJiQxeySYDBW9R/QjJPS', NULL, 'recepcionista@dms.com', NULL, NULL, NULL, NULL, 1505800835, 1547568258, 1, NULL, NULL, NULL, NULL),
(652, '103.231.162.58', 'Dr Reynaldo Juarez', '$2y$08$EM8XmAEnbU2rpSDO3.N9je/sNNhR4ofhCXtttm0U7Q2Vh5f/OqK.y', NULL, 'doctor@dms.com', NULL, NULL, NULL, NULL, 1510865807, 1547568119, 1, NULL, NULL, NULL, NULL),
(679, '103.231.160.119', 'Francisco pizarro', '$2y$08$GY3ygLXZKxLAgvM4bObo0u6osXFnBcSd0Qwo34YDNfi6SjzENKBde', NULL, 'paciente@dms.com', NULL, NULL, NULL, NULL, 1530016310, 1547568214, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(111, 109, 6),
(112, 110, 7),
(113, 111, 8),
(114, 112, 3),
(613, 611, 10),
(614, 612, 10),
(616, 614, 10),
(654, 652, 4),
(681, 679, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bankb`
--
ALTER TABLE `bankb`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diagnostic_report`
--
ALTER TABLE `diagnostic_report`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `expense_category`
--
ALTER TABLE `expense_category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `laboratorist`
--
ALTER TABLE `laboratorist`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lab_category`
--
ALTER TABLE `lab_category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medical_history`
--
ALTER TABLE `medical_history`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medicine_category`
--
ALTER TABLE `medicine_category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ot_payment`
--
ALTER TABLE `ot_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `patient_deposit`
--
ALTER TABLE `patient_deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `patient_material`
--
ALTER TABLE `patient_material`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paymentgateway`
--
ALTER TABLE `paymentgateway`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `payment_category`
--
ALTER TABLE `payment_category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sms_settings`
--
ALTER TABLE `sms_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accountant`
--
ALTER TABLE `accountant`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT de la tabla `bankb`
--
ALTER TABLE `bankb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `diagnostic_report`
--
ALTER TABLE `diagnostic_report`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT de la tabla `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `expense_category`
--
ALTER TABLE `expense_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `lab`
--
ALTER TABLE `lab`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1887;

--
-- AUTO_INCREMENT de la tabla `laboratorist`
--
ALTER TABLE `laboratorist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `lab_category`
--
ALTER TABLE `lab_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medical_history`
--
ALTER TABLE `medical_history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2857;

--
-- AUTO_INCREMENT de la tabla `medicine_category`
--
ALTER TABLE `medicine_category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `nurse`
--
ALTER TABLE `nurse`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ot_payment`
--
ALTER TABLE `ot_payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2484;

--
-- AUTO_INCREMENT de la tabla `patient_deposit`
--
ALTER TABLE `patient_deposit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1492;

--
-- AUTO_INCREMENT de la tabla `patient_material`
--
ALTER TABLE `patient_material`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1882;

--
-- AUTO_INCREMENT de la tabla `paymentgateway`
--
ALTER TABLE `paymentgateway`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `payment_category`
--
ALTER TABLE `payment_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT de la tabla `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `sms_settings`
--
ALTER TABLE `sms_settings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=680;

--
-- AUTO_INCREMENT de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=682;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
