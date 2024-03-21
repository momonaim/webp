-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 20 mars 2024 à 01:07
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Base de données : `webp3`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_login`
--

CREATE TABLE `admin_login` (
    `id` int(11) NOT NULL, `admin_email` varchar(100) NOT NULL, `admin_pass` varchar(100) NOT NULL, `admin_username` varchar(100) NOT NULL, `first_name` varchar(100) NOT NULL, `last_name` varchar(100) NOT NULL, `admin_type` varchar(100) NOT NULL, `status` int(10) NOT NULL DEFAULT 1, `date_column` date NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

--
-- Déchargement des données de la table `admin_login`
--

INSERT INTO
    `admin_login` (
        `id`, `admin_email`, `admin_pass`, `admin_username`, `first_name`, `last_name`, `admin_type`, `status`, `date_column`
    )
VALUES (
        1, 'arcgh@gmail.com', 'arcgh', 'chikoo', 'dfsdfsdf', 'sdfsdfggg', 'Admin', 2, '2024-03-13'
    ),
    (
        2, 'manjaro@gmail.com', '123456', 'the lord of the rings', 'ff', 'yoo jordan', 'Super Admin', 1, '2024-03-07'
    ),
    (
        3, 'arch@gmail.com', 'df', 'ggg', 'qdsfqsd', 'fqsdfqs', 'Super admin', 0, '2024-03-18'
    ),
    (
        4, 'manjaytryrtyro@gmail.com', 'ertye', 'tyerty', 'tryetyet', 'yertyety', 'Candidate admin', 0, '2024-03-13'
    );

-- --------------------------------------------------------

--
-- Structure de la table `applied_jobs`
--

CREATE TABLE `applied_jobs` (
    `app_id` int(11) NOT NULL, `job_id` int(11) DEFAULT NULL, `can_id` int(11) DEFAULT NULL, `statut` varchar(100) NOT NULL DEFAULT 'Processing'
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `candidates`
--

CREATE TABLE `candidates` (
    `can_id` int(11) NOT NULL, `firstname` varchar(50) NOT NULL, `lastname` varchar(50) NOT NULL, `Username` varchar(50) NOT NULL, `Email` varchar(100) NOT NULL, `password` varchar(255) NOT NULL, `Phone` varchar(20) DEFAULT NULL, `Address` varchar(255) DEFAULT NULL, `City` varchar(100) DEFAULT NULL, `Country` varchar(100) DEFAULT NULL, `zipcode` varchar(20) DEFAULT NULL, `birth` date DEFAULT NULL, `gender` varchar(50) DEFAULT NULL, `cv` varchar(100) NOT NULL DEFAULT 'noCV.pdf', `image_name` varchar(1000) DEFAULT NULL, `image_data` longblob NOT NULL, `status` int(11) DEFAULT 1, `registrationdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `education`
--

CREATE TABLE `education` (
    `id` int(11) NOT NULL, `debut` date DEFAULT NULL, `fin` date DEFAULT NULL, `degree` varchar(255) DEFAULT NULL, `diplome` varchar(255) DEFAULT NULL, `institution` varchar(255) DEFAULT NULL, `id_c` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
    `id` int(11) NOT NULL, `debut` date DEFAULT NULL, `fin` date DEFAULT NULL, `poste` varchar(255) NOT NULL DEFAULT 'pas de poste', `company` varchar(100) NOT NULL DEFAULT '-', `description` text NOT NULL DEFAULT 'pas de description', `id_c` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_offer`
--

CREATE TABLE `job_offer` (
    `job_id` int(11) NOT NULL, `job_title` varchar(255) NOT NULL, `job_type` varchar(50) NOT NULL, `salary` decimal(10, 2) DEFAULT NULL, `job_description` text DEFAULT NULL, `requirements` text DEFAULT NULL, `benefits` text DEFAULT NULL, `exp_sc` int(11) NOT NULL DEFAULT 0, `edc_sc` varchar(255) NOT NULL DEFAULT '0', `skill_sc` varchar(255) NOT NULL DEFAULT '0', `status` int(11) DEFAULT 1, `creation_date` timestamp NOT NULL DEFAULT current_timestamp(), `rec_id` int(11) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
    `mess_id` int(11) NOT NULL, `message` text DEFAULT NULL, `can_id` int(11) DEFAULT NULL, `rec_id` int(11) DEFAULT NULL, `job_id` int(11) DEFAULT NULL, `status` int(11) NOT NULL DEFAULT 1
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recruiters`
--

CREATE TABLE `recruiters` (
    `rec_id` int(11) NOT NULL, `username` varchar(50) NOT NULL, `email` varchar(100) NOT NULL, `password` varchar(255) NOT NULL, `companyname` varchar(100) NOT NULL, `website` varchar(255) DEFAULT NULL, `industry` varchar(100) NOT NULL, `description` text DEFAULT NULL, `phone` varchar(20) DEFAULT NULL, `address` varchar(100) NOT NULL, `city` varchar(100) DEFAULT NULL, `country` varchar(100) DEFAULT NULL, `zip_code` varchar(20) DEFAULT NULL, `Foundation` date NOT NULL, `status` int(11) DEFAULT 1, `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `skill`
--

CREATE TABLE `skill` (
    `id` int(11) NOT NULL, `category` varchar(255) DEFAULT NULL, `skill` varchar(255) DEFAULT NULL, `id_c` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin_login`
--
ALTER TABLE `admin_login` ADD PRIMARY KEY (`id`);

--
-- Index pour la table `applied_jobs`
--
ALTER TABLE `applied_jobs`
ADD PRIMARY KEY (`app_id`),
ADD KEY `job_id` (`job_id`),
ADD KEY `can_id` (`can_id`);

--
-- Index pour la table `candidates`
--
ALTER TABLE `candidates` ADD PRIMARY KEY (`can_id`);

--
-- Index pour la table `education`
--
ALTER TABLE `education`
ADD PRIMARY KEY (`id`),
ADD KEY `FK_formation_condidat` (`id_c`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
ADD PRIMARY KEY (`id`),
ADD KEY `FK_experience_condidat` (`id_c`);

--
-- Index pour la table `job_offer`
--
ALTER TABLE `job_offer`
ADD PRIMARY KEY (`job_id`),
ADD KEY `fk_recruiter` (`rec_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
ADD PRIMARY KEY (`mess_id`),
ADD KEY `can_id` (`can_id`),
ADD KEY `job_id` (`job_id`),
ADD KEY `rec_id` (`rec_id`);

--
-- Index pour la table `recruiters`
--
ALTER TABLE `recruiters`
ADD PRIMARY KEY (`rec_id`),
ADD UNIQUE KEY `username` (`username`),
ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `skill`
--
ALTER TABLE `skill`
ADD PRIMARY KEY (`id`),
ADD KEY `FK__condidat` (`id_c`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin_login`
--
ALTER TABLE `admin_login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 5;

--
-- AUTO_INCREMENT pour la table `applied_jobs`
--
ALTER TABLE `applied_jobs`
MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `candidates`
--
ALTER TABLE `candidates`
MODIFY `can_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `education`
--
ALTER TABLE `education` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `job_offer`
--
ALTER TABLE `job_offer`
MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
MODIFY `mess_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recruiters`
--
ALTER TABLE `recruiters`
MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `skill`
--
ALTER TABLE `skill` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `applied_jobs`
--
ALTER TABLE `applied_jobs`
ADD CONSTRAINT `applied_jobs_can` FOREIGN KEY (`can_id`) REFERENCES `candidates` (`can_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `applied_jobs_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job_offer` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `education`
--
ALTER TABLE `education`
ADD CONSTRAINT `FK_formation_condidat` FOREIGN KEY (`id_c`) REFERENCES `candidates` (`can_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `experience`
--
ALTER TABLE `experience`
ADD CONSTRAINT `FK_experience_candidat` FOREIGN KEY (`id_c`) REFERENCES `candidates` (`can_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `job_offer`
--
ALTER TABLE `job_offer`
ADD CONSTRAINT `fk_recruiter` FOREIGN KEY (`rec_id`) REFERENCES `recruiters` (`rec_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`can_id`) REFERENCES `candidates` (`can_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job_offer` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `messages_ibfk_3` FOREIGN KEY (`rec_id`) REFERENCES `recruiters` (`rec_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `skill`
--
ALTER TABLE `skill`
ADD CONSTRAINT `FK__condidat` FOREIGN KEY (`id_c`) REFERENCES `candidates` (`can_id`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;