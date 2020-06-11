-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Giu 11, 2020 alle 22:28
-- Versione del server: 10.4.10-MariaDB
-- Versione PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `StudioProfessionale`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Appuntamenti`
--

CREATE TABLE `Appuntamenti` (
  `IdAppuntamenti` varchar(4) NOT NULL,
  `DataAppuntamento` date NOT NULL,
  `OrarioAppuntamento` time NOT NULL,
  `Motivazione` varchar(300) NOT NULL,
  `Nominativo` varchar(50) NOT NULL,
  `NumTelefono` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CodFiscale` varchar(16) DEFAULT NULL,
  `PartitaIVA` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `Aziende`
--

CREATE TABLE `Aziende` (
  `id` varchar(6) NOT NULL,
  `PartitaIVA` varchar(24) NOT NULL,
  `RagioneSociale` varchar(50) NOT NULL,
  `SedeLegale` varchar(50) NOT NULL,
  `CAP` varchar(5) NOT NULL,
  `EmailPEC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Aziende`
--

INSERT INTO `Aziende` (`id`, `PartitaIVA`, `RagioneSociale`, `SedeLegale`, `CAP`, `EmailPEC`) VALUES
('', ' 68121417234', 'ElettroMedia', 'Cagliari, via Roma', '09100', 'prova@ElettroMedia.it');

-- --------------------------------------------------------

--
-- Struttura della tabella `Consulenze`
--

CREATE TABLE `Consulenze` (
  `IdConsulenza` varchar(4) NOT NULL,
  `DataConsulenza` date NOT NULL,
  `OrarioConsulenza` time NOT NULL,
  `TipoConsulenza` varchar(300) NOT NULL,
  `CodFiscale` varchar(16) NOT NULL,
  `PartitaIVA` varchar(24) NOT NULL,
  `IdStaffer` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `Privati`
--

CREATE TABLE `Privati` (
  `id` varchar(6) NOT NULL,
  `CodFiscale` varchar(16) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `DataDiNascita` date NOT NULL,
  `Via` varchar(50) NOT NULL,
  `CAP` varchar(5) NOT NULL,
  `NumTelefono` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Privati`
--

INSERT INTO `Privati` (`id`, `CodFiscale`, `Nome`, `Cognome`, `DataDiNascita`, `Via`, `CAP`, `NumTelefono`, `Email`) VALUES
('', 'RSSMRA50A01H501I', 'Mario', 'Rossi', '1950-01-01', 'Via Milano ,20', '09032', '3889763498', 'mariorossi@gmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `Staff`
--

CREATE TABLE `Staff` (
  `IdStaffer` varchar(4) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Cognome` varchar(50) NOT NULL,
  `DataDiNascita` date NOT NULL,
  `CodiceFiscale` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `Staff`
--

INSERT INTO `Staff` (`IdStaffer`, `Password`, `Nome`, `Cognome`, `DataDiNascita`, `CodiceFiscale`) VALUES
('01', 'lala', 'Patrizia', 'Atzori', '1969-06-08', 'abcdefgh12345678');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Appuntamenti`
--
ALTER TABLE `Appuntamenti`
  ADD PRIMARY KEY (`IdAppuntamenti`),
  ADD KEY `CodFiscale` (`CodFiscale`),
  ADD KEY `PartitaIVA` (`PartitaIVA`);

--
-- Indici per le tabelle `Aziende`
--
ALTER TABLE `Aziende`
  ADD PRIMARY KEY (`PartitaIVA`);

--
-- Indici per le tabelle `Consulenze`
--
ALTER TABLE `Consulenze`
  ADD PRIMARY KEY (`IdConsulenza`),
  ADD KEY `CodFiscale` (`CodFiscale`),
  ADD KEY `PartitaIVA` (`PartitaIVA`),
  ADD KEY `IdStaffer` (`IdStaffer`);

--
-- Indici per le tabelle `Privati`
--
ALTER TABLE `Privati`
  ADD PRIMARY KEY (`CodFiscale`);

--
-- Indici per le tabelle `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`IdStaffer`),
  ADD KEY `IdStaffer` (`IdStaffer`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Appuntamenti`
--
ALTER TABLE `Appuntamenti`
  ADD CONSTRAINT `appuntamenti_ibfk_1` FOREIGN KEY (`CodFiscale`) REFERENCES `Privati` (`CodFiscale`),
  ADD CONSTRAINT `appuntamenti_ibfk_2` FOREIGN KEY (`PartitaIVA`) REFERENCES `Aziende` (`PartitaIVA`);

--
-- Limiti per la tabella `Consulenze`
--
ALTER TABLE `Consulenze`
  ADD CONSTRAINT `consulenze_ibfk_1` FOREIGN KEY (`CodFiscale`) REFERENCES `Privati` (`CodFiscale`),
  ADD CONSTRAINT `consulenze_ibfk_2` FOREIGN KEY (`PartitaIVA`) REFERENCES `Aziende` (`PartitaIVA`),
  ADD CONSTRAINT `consulenze_ibfk_3` FOREIGN KEY (`PartitaIVA`) REFERENCES `Aziende` (`PartitaIVA`),
  ADD CONSTRAINT `consulenze_ibfk_4` FOREIGN KEY (`PartitaIVA`) REFERENCES `Aziende` (`PartitaIVA`),
  ADD CONSTRAINT `consulenze_ibfk_5` FOREIGN KEY (`PartitaIVA`) REFERENCES `Aziende` (`PartitaIVA`),
  ADD CONSTRAINT `consulenze_ibfk_6` FOREIGN KEY (`IdStaffer`) REFERENCES `Staff` (`IdStaffer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
