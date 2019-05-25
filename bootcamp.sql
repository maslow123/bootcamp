-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mei 2019 pada 14.56
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bootcamp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `skills`
--

INSERT INTO `skills` (`id`, `nama`, `user_id`) VALUES
(1, 'React', 1),
(2, 'PHP', 1),
(3, 'Python', 1),
(4, 'WP', 2),
(5, 'CSS', 2),
(6, 'JavaScript', 3),
(7, 'Node', 3),
(8, 'Angular', 3),
(12, 'C++', 1),
(13, 'Kotlin', 1),
(14, 'Java', 1),
(15, 'tes', 2),
(16, 'tes', 2),
(17, 'tes', 2),
(18, 'tes', 3),
(19, 'tes', 10),
(20, 'tes', 1),
(21, 'Java', 13),
(22, 'haloo', 1),
(25, 'JS', 14),
(26, 'Python', 15),
(27, 'Kotlin', 17),
(28, 'java', 18),
(29, 'React', 19),
(30, 'Kotlin', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Muhammad'),
(2, 'Fadhly'),
(3, 'NR'),
(10, 'Minahasa'),
(13, 'Minarso'),
(14, 'haloo'),
(15, 'Kucing'),
(17, 'Bayu'),
(18, 'sadd'),
(19, 'Momo'),
(20, 'das');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
