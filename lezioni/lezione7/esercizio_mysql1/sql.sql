-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 03, 2022 alle 17:14
-- Versione del server: 10.4.14-MariaDB
-- Versione PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `menu`
--

CREATE TABLE `menu` (
  `id_menu` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `menu`
--

INSERT INTO `menu` (`id_menu`, `nome`, `link`) VALUES
(1, 'Home', '#'),
(2, 'La Storia', '#'),
(3, 'Dove Siamo', '#'),
(4, 'Contatti', '#'),
(5, 'Azienda', 'azienda.php');

-- --------------------------------------------------------

--
-- Struttura della tabella `news`
--

CREATE TABLE `news` (
  `id_news` bigint(20) NOT NULL,
  `titolo` varchar(255) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `descrizione` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `news`
--

INSERT INTO `news` (`id_news`, `titolo`, `data`, `descrizione`) VALUES
(1, 'VW e Ikea fermano la produzione in Russia. Intesa valuta la sua presenza', '2022-03-03 15:44:11', 'Volkswagen chiude la produzione in Russia.\r\n\r\nLo ha comunicato il gruppo in una nota da Wolfsburg.\r\n\r\n\"A causa della guerra condotta dalla Russia il presidio del gruppo ha deciso di fermare la produzione di veicoli in Russia\". Anche le esportazioni \"verranno stoppate con effetto immediato\".\r\n    Anche Ikea ha annunciato il bloccp della produzione in  Russia e Bielorussia. Una decisione che interessera\' circa 15.000 dipendenti.\r\n\r\nIntesa ha intanto annunciato che la sua presenza in Russia \"è oggetto di valutazione strategiche\". Ca\' de Sass opera in Russia attraverso Banca Intesa che conta 28 filiali ed oltre 900 dipendenti.\r\n    \"Condanniamo - ha affermato un portavoce di Intesa - totalmente quanto sta accadendo e siamo impegnati ad aiutare tutte le nostre persone in Ucraina fornendo accoglienza, nei Paesi in cui operiamo, ai colleghi ucraini\".'),
(2, 'Moody\'s e Fitch declassano la Russia, debito a rischio', '2022-03-02 15:43:51', 'Le agenzie di rating Fitch e Moody\'s hanno declassato la Russia nella categoria dei paesi che rischiano di non poter rimborsare il debito, nel contesto dell\'invasione dell\'Ucraina.\r\n\r\nMoody\'s ha abbassato il proprio giudizio sul debito a lungo termine da Baa3 a B3, mantenendolo sotto osservazione viste le sanzioni imposte dai paesi occidentali alla Russia.\r\n\r\nFitch ha abbassato il rating da BBB a B, con outlook negativo.\r\n\r\nQuesti rating pongono il debito della Russia al livello \'speculativo\'.'),
(3, 'Confcommercio, con guerra rischio bollette energia +160%', '2022-03-04 15:44:33', 'Lo scoppio della guerra in Ucraina il 24 febbraio scorso ha innescato una forte instabilità al rialzo dei prezzi dell\'energia, già in atto, da mesi, con incrementi di circa il 50% delle quotazioni del gas e dell\'elettricità sui mercati internazionali.\r\n\r\nLo afferma la Confcommercio che calcola per le imprese del terziario di mercato dei settori del commercio, della ricettività e della ristorazione in caso di un aggravamento del conflitto, con l\'eventuale interruzione delle forniture di gas dalla Russia, una spesa energetica di quasi 30 miliardi di euro nel 2022, con un incremento di oltre il 160% rispetto al 2021. '),
(4, 'Ita: Ceo Lufthansa, partnership nostro obiettivo strategico', '2022-03-03 15:44:33', '\"Creare una partnership con Ita è il nostro obiettivo strategico e stiamo guardando ai dettagli\".\r\n\r\n\r\n    Lo ha affermato il ceo di Lufthansa, Carsten Spohr, rispondendo a una domanda sull\'interesse di Lufthansa su Ita nel corso della conferenza annuale del gruppo.\r\n\r\n\r\n    \"L\'Italia è il più importante mercato in Europa per noi, e su base globale secondo solo agli Usa\", ha spiegato Spohr, rispondendo a una domanda su che tipo di partnership sia di interesse per il colosso tedesco per Ita. \"L\'Italia è un mercato strategico e noi pensiamo che Lufthansa sia il giusto partner per Ita\", ha aggiunto. \"Vedremo cosa offre Ita e decideremo quali opzioni ci siano\", ha spiegato alla conferenza annuale del gruppo. '),
(5, 'Criptovalute Oggi 28/02/2022', '2022-02-28 16:34:22', 'Giornata tendenzialmente in rosso oggi per il mondo crypto. A metà seduta tutte le principali monete virtuali virano in rosso tranne Tether, Cardano e USD Coin che viaggiano sulla parità.\r\n\r\nLe peggiori di tutte sono Avalanche ed Ethereum che segnano rispettivamente -6,40% e -5,90%. Segue XRP a -4,30%.\r\n\r\nCali più contenuti per Bitcoin, BNB e Terra: -2,25%, -1,17% e -1,07%');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indici per le tabelle `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `news`
--
ALTER TABLE `news`
  MODIFY `id_news` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
