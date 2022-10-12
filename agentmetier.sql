-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 08:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agentmetier`
--

-- --------------------------------------------------------

--
-- Table structure for table `metiers`
--

CREATE TABLE `metiers` (
  `metiers_id` int(11) NOT NULL,
  `metiers_name` varchar(100) NOT NULL,
  `metiers_description` varchar(255) NOT NULL,
  `metiers_image` varchar(255) NOT NULL,
  `metiers_image2` varchar(255) NOT NULL,
  `metiers_détaille` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metiers`
--

INSERT INTO `metiers` (`metiers_id`, `metiers_name`, `metiers_description`, `metiers_image`, `metiers_image2`, `metiers_détaille`) VALUES
(1, 'électricien', 'PROFITEZ D\'UN ÉLECTRICIEN PROFESSIONNEL ET PROTEGER VOTRE FAMILLE', 'metier2.jpg', 'metier2.jpg', 'COMPOSÉE D’ÉLECTRICIENS EXPÉRIMENTÉS, NOTRE ÉQUIPE EFFECTUE\nTOUT TYPE. DE TRAVAUX D’INSTALLATION EN NEUF OU DE RÉNOVATION\nÉLECTRIQUE\nNOUS INTERVENONS AUSSI BIEN CHEZ LES PROFESSIONNELS QUE LES\nPARTICULIERS, DANS LE DOMAINE DE L’HABITAT COLLECTIF OU\nINDIVIDUEL, DES BÂTIMENTS INDUSTRIELS ET VOUS PROPOSONS\nÉGALEMENT DES PRESTATIONS TOUS CORPS D’ÉTAT, TEL QUE LA\nPLOMBERIE OU LES CLIMATISEURS'),
(2, 'Décorateur', 'DÉCORER VOS ESPACES INTÉRNES ET EXTÉRNES', 'metier1.jpg', 'metier1.jpg', 'NOUS ALLONS CONCEVOIR UN DÉSIGN CHOISI ENSEMBLE POUR VOTRE\nESPACE,VOTRE MAISON\nUNE FOIS QUE VOUS ÊTES CONVAINCU(E) DE VOTRE CHOIX,NOUS LE\nCONCRÉTISERONS ENSEMBLE\nPRENEZ RENDEZ-VOUS DÈS MAINTENAIT.NOTRE AGENCE METTRA A\nVOTRE DISPOSITION UN GROUPE QUALIFIÉ POUR VOUS SATISFAIRE\nPLEINEMENT'),
(3, 'Laveur de vitres', 'ENVIE D’Y VOIR PLUS CLAIR AVEC UN GRAND NETTOYAGE DE VITRES', 'metier3.jpg', 'metier3.jpg', 'Réservez un spécialiste pour le lavage de vitres: intérieur et extérieur\naspirateur dans les rails de fenêtres, nettoyage de cadrages et élimination\ndes nids araignées\nNettoyage du moustiquaire équipé d’outils professionnels\npour travaux en hauteur'),
(4, 'pentre', 'UNE ÉQUIPE DE PROFESSIONNELS DU BÂTIMENT\nPOUR RÉALISER TOUS VOS TRAVAUX DE RÉNOVATION', 'metier4.jpg', 'metier4.jpg', 'Nos ouvriers peintres qualifiés réalisent toute sorte de prestations\ncomme le revêtement des murs ou sols de votre appartement ou maison\npeintures décorative et pose de papier peint et de teinture murale\nTout cela en vous apportant des conseils personnalisés afin de vous orienter\ndans le meilleur de vos choix'),
(5, 'Plombier', 'DES ÉQUIPES DE PLOMBIERS EXPÉRIMENTÉS', 'metier5.jpg', 'metier5.jpg', 'Mon Eco Brico effectue tous types de plomberie dans divers domaines de la plomberie tels que le débouchage le dépannage et l’installation Nous nous déplaçons à votre domicile ou locaux professionnels pour rénover votre salle de bain ou pour tout dépannage lié à une fuite d’eau ou autre problème de plomberie générale'),
(6, 'jardinier', 'PROFITEZ D\'UN JARDIN BIEN ENTRETENU TOUT AU LONG\nDE L\'ANNÉE ET SANS CONTRAINTE', 'metier6.jpg', 'metier6.jpg', 'Interservices vous propose un service de travaux de jardinage à domicile\nréalisés par des paysagistes qualifiés proche de chez vous\nFaites intervenir une entreprise de jardinage professionnelle à votre domicile\n .pour l’entretien de votre jardin'),
(7, 'CARRELAGE/ZELLIJ', 'SERVICE CARRELAGE/ ZELLIJ', '3.JPG', '3.JPG', ''),
(8, 'PLÂTRE/ GYPSE', 'SERVICE PLÂTRE/ GYPSE', '2.JPG', '2.JPG', 'NOTRE AGENCE A UN GROUPE QUI A DE BONNES TÉCHNIQUES POUR DÉCORER VOS PLAFONDS,VOS COLONNES CE MATÉRIAU EST MOULÉ ET VOUS OFFRE UNE LARGE GAME POUR VOTRE CHOIX NOS PLÂTRIERS VOUS AIDERONS À CHOISIR LE MODÈLE ET LES COULEURS QUI CONVIENDRONT À VOTRE PLAFOND OU À VOS SURFACES QUE VOUS VOUDREZ ENDUIRE DE PLÂTRE NOTRE BUT EST DE SATISFAIRE TOUT CLIENT QUI NOUS APPELLE'),
(9, 'MARBRE/ RKHAM', 'SERVICE MARBRE/ RKHAM', '1.JPG', '1.JPG', 'NOTRE AGENCE MON ECO BRICO A UN GROUPESPÉCIALISÉ DANS LES\nAPPLICATIONS EXTÉRIEURES: MURS,SOLS ET INTÉRUEURES: TABLE À\nMANGER ,FONTAINES,COMPTOIRS,LAVABOS,BAIGNOIRES ET D\'AUTRES\nACCESSOIRES EN MARBRE,POLI,ENDULÉ\nNOTRE AGENCE MON ECO BRICO A UN GROUPESPÉCIALISÉ DANS LES\nAPPLICATIONS EXTÉRIEURES: MURS,SOLS ET INTÉRUEURES: TABLE À\nMANGER ,FONTAINES,COMPTOIRS,LAVABOS,BAIGNOIRES ET D\'AUTRES\nACCESSOIRES EN MARBRE,POLI,ENDULÉ\nNOTRE OBJECTIF EST DE CONTENTER TOUT CLIENT QUI NOUS APPELLE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `metiers`
--
ALTER TABLE `metiers`
  ADD PRIMARY KEY (`metiers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `metiers`
--
ALTER TABLE `metiers`
  MODIFY `metiers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
