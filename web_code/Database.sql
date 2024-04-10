-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 31 Μάη 2022 στις 19:19:25
-- Έκδοση διακομιστή: 10.4.22-MariaDB
-- Έκδοση PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `vasi`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(10) NOT NULL,
  `Firstname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lastname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Recognition` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `admin`
--

INSERT INTO `admin` (`AdminID`, `Firstname`, `Lastname`, `Username`, `Password`, `Email`, `Recognition`) VALUES
(11223, 'Nikolaos', 'Christoforou', 'icsdadmnik', '433826NC!', 'nikchr@icsd.aegean.gr', 1),
(55667, 'Maria', 'Antoniou', 'icsdadmmar', '980122MA#', 'marant@icsd.aegean.gr', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `attends`
--

CREATE TABLE `attends` (
  `StudentID` varchar(10) NOT NULL,
  `SubjectID` varchar(10) NOT NULL,
  `Subject_name` varchar(100) NOT NULL,
  `Number_of_subjects` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `attends`
--

INSERT INTO `attends` (`StudentID`, `SubjectID`, `Subject_name`, `Number_of_subjects`) VALUES
('3212007023', '3211011', 'Domes Dedomenwn', 4),
('3212007023', '3211354', 'Texniti Noimisini', 4),
('3212007023', '3212170', 'Psifiaki Diakivernisi', 4),
('3212007023', '3212270', 'Rompotikos Elegxos', 4),
('3212012143', '2139015', 'Satistiki Analysi', 3),
('3212012143', '3211011', 'Domes Dedomenwn', 3),
('3212012143', '3211012', 'Vaseis Dedomenwn 2', 3),
('3212012143', '3211354', 'Texniti Noimosini', 6),
('3212012143', '3211919', 'Asfaleia sto Fusiko Epipedo', 6),
('3212017013', '1231342', 'Proigmena Mathimatika', 7),
('3212017013', '3211302', 'Diktya Ypologistwn', 7),
('3212017013', '3211313', 'Doryforikes Epikoinwnies', 7),
('3212017013', '3211354', 'Texniti Noimosini', 7),
('3212017013', '3211919', 'Asfaleia sto Fusiko Epipedo', 7),
('3212017013', '3212106', 'Antikeimenostrefis Programmatismos 1', 7),
('3212017013', '3215445', 'Mathimatika gia Mixanikous 2', 7),
('3212019038', '3210721', 'Vaseis Dedomenwn 1', 5),
('3212019038', '3211302', 'Diktya Ypologistwn', 5),
('3212019038', '3211354', 'Texniti Noimosini', 5),
('3212019038', '3212105', 'Antikeimenostrefis Programmatismos 1', 5),
('3212019038', '3212343', 'Mathimatika gia Mixanikous 1', 5),
('3212019038', '3215445', 'Mathimatika gia Mixanikous 2', 5),
('3212019205', '3211012', 'Vaseis Dedomenwn 2', 3),
('3212019205', '3211302', 'Diktya Ypologistwn', 3),
('3212019205', '3212105', 'Antikeimonostrefis Programmatismos 1', 3),
('3212019206', '3211012', 'Vaseis Dedomenwn 2', 5),
('3212019206', '3211302', 'Diktya Ypologistwn', 5),
('3212019206', '3211354', 'Texniti Noimosini', 5),
('3212019206', '3212105', 'Antikeimonostrefis Programmatismos 1', 5),
('3212019206', '3215445', 'Mathimatika gia Mixanikous 2', 5),
('3212021061', '2139015', 'Statistiki Analysi', 4),
('3212021061', '3210721', 'Vaseis Dedomenwn 1', 4),
('3212021061', '3212105', 'Antikeimonostrefis Programmatismos 1', 4),
('3212021061', '3212343', 'Mathimatika gia Mixanikous 1', 4),
('3212021235', '3211011', 'Domes Dedomenwn', 3),
('3212021235', '3212106', 'Antikeimonostrefis Programmatismos 2', 3),
('3212021235', '3212343', 'Mathimatika gia Mixanikous 1', 3);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `grades`
--

CREATE TABLE `grades` (
  `Theory_Grade` int(2) DEFAULT NULL,
  `Lab_Grade` int(2) DEFAULT NULL,
  `Total_Grade` int(2) DEFAULT NULL,
  `StudentID` varchar(11) NOT NULL,
  `Student_Firstname` varchar(50) NOT NULL,
  `Student_Lastname` varchar(50) NOT NULL,
  `SubjectID` varchar(10) NOT NULL,
  `Subject_Name` varchar(50) NOT NULL,
  `Date_exam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `grades`
--

INSERT INTO `grades` (`Theory_Grade`, `Lab_Grade`, `Total_Grade`, `StudentID`, `Student_Firstname`, `Student_Lastname`, `SubjectID`, `Subject_Name`, `Date_exam`) VALUES
(7, 9, 7, '3212007023', 'Maria', 'Konstantopoulou', '3211011', 'Domes Dedomenwn', '2022-09-11'),
(10, 5, 9, '3212007023', 'Maria', 'Konstantopoulou', '3211354', 'Texniti Noimosini', '2022-09-12'),
(6, 0, 6, '3212007023', 'Maria', 'Konstantopoulou', '3212170', 'Psifiaki Diakivernisi', '2022-09-05'),
(3, 6, 3, '3212007023', 'Maria', 'Konstantopoulou', '3212270', 'Rompotikos', '2022-09-01'),
(5, 0, 5, '3212012143', 'Petros', 'Papadakis', '2139015', 'Statistiki Analysi', '2022-09-05'),
(4, 6, 4, '3212012143', 'Petros', 'Papadakis', '3211354', 'Texniti Noimosini', '2022-09-11'),
(5, 10, 6, '3212012143', 'Petros', 'Papadakis', '3211919', 'Asfaleia sto Fusiko Epipedo', '2022-09-07'),
(4, 0, 4, '3212017013', 'Dimitra', 'Davi', '1231342', 'Proigmena Mathimatika', '2022-09-20'),
(6, 5, 6, '3212017013', 'Dimitra', 'Davi', '3211313', 'Doriforikes', '2022-09-09'),
(8, 0, 8, '3212017013', 'Dimitra', 'Davi', '3211354', 'Texniti Noimosini', '2022-09-12'),
(8, 0, 8, '3212017013', 'Dimitra', 'Davi', '3211919', 'Asfaleia sto Fusiko Epipedo', '2022-09-16'),
(5, 9, 6, '3212017013', 'Dimitra', 'Davi', '3212106', 'Antikeimenostrefis Programmatismos 2', '2022-09-06'),
(3, 0, 3, '3212017013', 'Dimitra', 'Davi', '3215445', 'Mathimatika gia Mixanikous 2', '2022-09-15'),
(6, 10, 7, '3212019038', 'Dimosthenis', 'Davis', '3210721', 'Vaseis Dedomenwn 1', '2022-09-03'),
(6, 0, 6, '3212019038', 'Dimosthenis', 'Davis', '3211354', 'Texniti Noimosini', '2022-09-12'),
(5, 6, 5, '3212019038', 'Dimosthenis', 'Davis', '3212105', 'Antikeimenostrefis Programmatismos 1', '2022-09-08'),
(3, 0, 3, '3212019038', 'Dimosthenis', 'Davis', '3212343', 'Mathimatika gia Mixanikous 1', '2022-09-14'),
(7, 9, 7, '3212019205', 'Kyriakos', 'Papadopoulos', '3211012', 'Vaseis Dedomenwn 2', '2022-09-07'),
(7, 9, 9, '3212019205', 'Kyriakos', 'Papadopoulos', '3212105', 'Antikeimenostrefis Programmatismos 1', '2022-09-08'),
(3, 0, 3, '3212019206', 'Kyriaki', 'Somatopoulou', '1231342', 'Proigmena Mathimatika', '2022-09-20'),
(6, 10, 7, '3212019206', 'Kyriaki', 'Somatopoulou', '3211012', 'Vaseis Dedomenwn 2', '2022-09-07'),
(6, 6, 6, '3212019206', 'Kyriaki', 'Somatopoulou', '3211354', 'Texniti Noimosini', '2022-09-12'),
(6, 6, 6, '3212019206', 'Kyriaki', 'Somatopoulou', '3212105', 'Antikeimenostrefis Programmatismos 1', '2022-09-08'),
(5, 0, 5, '3212019206', 'Kyriaki', 'Somatopoulou', '3215445', 'Mathimatika gia Mixanikous 2', '2022-09-15'),
(5, 0, 5, '3212021061', 'Stylianos', 'Somatopoulos', '2139015', 'Statistiki Analysi', '2022-09-05'),
(10, 10, 10, '3212021061', 'Stylianos', 'Somatopoulos', '3210721', 'Vaseis Dedomenwn 1', '2022-09-03'),
(6, 8, 7, '3212021061', 'Stylianos', 'Somatopoulos', '3212105', 'Antikeimenostrefis Programmatismos 1', '2022-09-08'),
(4, 0, 4, '3212021061', 'Stylianos', 'Somatopoulos', '3212343', 'Mathimatika gia Mixanikous 1', '2022-09-14'),
(5, 7, 6, '3212021235', 'Sofia', 'Tzani', '3210721', 'Vaseis Dedomenwn 1', '2022-09-03'),
(1, 7, 1, '3212021235', 'Sofia', 'Tzani', '3211011', 'Domes Dedomenwn', '2022-09-11'),
(8, 5, 7, '3212021235', 'Sofia', 'Tzani', '3211313', 'Doriforikes Epikoinwies	', '2022-09-09'),
(2, 6, 2, '3212021235', 'Sofia', 'Tzani', '3212106', 'Antikeimenostrefis Programmatismos 2', '2022-09-06'),
(8, 0, 8, '3212021235', 'Sofia', 'Tzani', '3212343', 'Mathimatika gia Mixanikous 1', '2022-09-14');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `student`
--

CREATE TABLE `student` (
  `Recognition` tinyint(2) NOT NULL DEFAULT 3,
  `StudentID` varchar(11) NOT NULL,
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Firstname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lastname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fathers_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Birthdate` date DEFAULT NULL,
  `Email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Semester` tinyint(2) DEFAULT NULL,
  `Year_e` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `student`
--

INSERT INTO `student` (`Recognition`, `StudentID`, `Username`, `Password`, `Firstname`, `Lastname`, `Fathers_name`, `Birthdate`, `Email`, `Phone_number`, `Semester`, `Year_e`) VALUES
(3, '3212007023', 'icsd07023', '12345!M', 'Maria', 'Konstantopoulou', 'Marios', '1990-10-10', 'icsd07023@icsd.aegean.gr', '6934719453', 30, 2007),
(3, '3212012143', 'icsd12143', '24680@P', 'Petros', 'Papadakis', 'Marinos', '1999-10-05', 'icsd12143@icsd.aegean.gr', '6982534176', 20, 2012),
(3, '3212017013', 'icsd17013', '13579#D ', 'Dimitra', 'Davi', 'Georgios', '1996-12-09', 'icsd17013@icsd.aegean.gr', '6957564142', 10, 2017),
(3, '3212019038', 'icsd19038', '10213$D ', 'Dimosthenis', 'Davis', 'Georgios', '2001-01-12', 'icsd19038@icsd.aegean.gr', '6952317890', 6, 2019),
(3, '3212019205', 'icsd19205', '25248%K ', 'Kyriakos', 'Papadopoulos', 'Dimitrios', '2002-09-21', 'icsd19205@icsd.aegean.gr', '6942423104', 5, 2019),
(3, '3212019206', 'icsd19206', '99989&K', 'Kyriaki', 'Somatopoulou', 'Christos', '2001-08-04', 'icsd19206@icsd.aegean.gr', '6932567896', 6, 2019),
(3, '3212021061', 'icsd21061', '77442>S ', 'Stylianos', 'Somatopoulos', 'Christos', '2003-07-05', 'icsd21061@icsd.aegean.gr', '6962840309', 2, 2021),
(3, '3212021235', 'icsd21235', '12568?E', 'Sofia', 'Tzani', 'Matthaios', '2000-09-15', 'icsd21235@icsd.aegean.gr', '6963782012', 2, 2021);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `subject`
--

CREATE TABLE `subject` (
  `SubjectID` varchar(11) NOT NULL,
  `Name` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Semester` tinyint(3) DEFAULT NULL,
  `ECTS` tinyint(2) DEFAULT NULL,
  `Status_S` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Theory_Hours` int(2) DEFAULT NULL,
  `Lab_Hours` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `subject`
--

INSERT INTO `subject` (`SubjectID`, `Name`, `Semester`, `ECTS`, `Status_S`, `Theory_Hours`, `Lab_Hours`) VALUES
('1231342', 'Proigmena Mathimatika', 4, 3, 'E', 3, 0),
('2139015', 'Statistiki Analysi', 5, 3, 'E', 3, 0),
('3210721', 'Vaseis Dedomenwn 1', 4, 5, 'Y', 3, 2),
('3211011', 'Domes Dedomenwn', 3, 5, 'Y', 3, 2),
('3211012', 'Vaseis Dedomenwn 2', 5, 5, 'Y', 3, 2),
('3211302', 'Diktya Ypologistwn', 5, 5, 'Y', 3, 2),
('3211313', 'Doriforikes Epikoinwies', 9, 5, 'K', 3, 2),
('3211354', 'Texniti Noimosini', 6, 5, 'Y', 3, 2),
('3211919', 'Asfaleia sto Fusiko Epipedo', 8, 5, 'K', 3, 0),
('3212105', 'Antikeimenostrefis Programmatismos 1', 2, 5, 'Y', 3, 2),
('3212106', 'Antikeimenostrefis Programmatismos 2', 3, 5, 'Y', 3, 2),
('3212170', 'Psifiaki Diakivernisi', 8, 5, 'K', 3, 0),
('3212270', 'Rompotikos Elegxos', 7, 5, 'K', 3, 2),
('3212343', 'Mathimatika gia Mixanikous 1', 1, 5, 'Y', 3, 0),
('3215445', 'Mathimatika', 2, 5, 'Y', 3, 0);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `teacher`
--

CREATE TABLE `teacher` (
  `Recognition` tinyint(2) NOT NULL DEFAULT 2,
  `TeacherID` varchar(11) NOT NULL,
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Firstname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lastname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Year_e` int(5) DEFAULT NULL,
  `Status_t` varchar(10) DEFAULT NULL,
  `Office` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `teacher`
--

INSERT INTO `teacher` (`Recognition`, `TeacherID`, `Username`, `Password`, `Firstname`, `Lastname`, `Email`, `Phone_number`, `Year_e`, `Status_t`, `Office`) VALUES
(2, '01213', 'icsdkalliger', 'Manos1978 ', 'Manolis', 'Kalligeros', 'mkallig@aegean.gr', '6923647194', 2012, 'Epikouros', 'Grafeio 1'),
(2, '02020', 'icsdmaliats', 'Kostas1982 ', 'Konstantinos', 'Maliatsos', 'maliatko@aegean.gr', '6945673920', 2021, 'Anaplyroti', 'Grafeio 4'),
(2, '02022', 'icsdkonstant', 'Elli1970 ', 'Elisavet', 'Konstantinou', 'elisaveto@aegean.gr', '6945728019', 2005, 'Epikouros', 'Grafeio'),
(2, '02124', 'icsdkostoul', 'Theodor1983 ', 'Theodoros', 'Kostoulas', 'thk@aegean.gr', '6934628179', 2021, 'Anaplyroti', 'Grafeio 7'),
(2, '03014', 'icsddouma', 'Sia1974 ', 'Anastasia', 'Douma', 'sia@aegean.gr', '6954341234', 2005, 'EDYP', 'Grafeio 5'),
(2, '03222', 'icsdkaryda', 'Maria1980 ', 'Maria', 'Karyda', 'MarKar@aegean.gr', '6963820348', 2015, 'Epikouros', 'Grefeio 3'),
(2, '12234', 'icsdleouts', 'Teo1972 ', 'Theodoros', 'Leoutsakos', 'tleoutsakos@aegean.gr', '6926354785', 2009, 'EDYP', 'Grafeio 0'),
(2, '12345', 'icsdsymeon', 'Panos1975 ', 'Panagiotis', 'Symeonidis', 'psymeonidis@aegean.gr', '6923846590', 2015, 'Anaplyroti', 'Grafeio 2'),
(2, '12654', 'icsdvlachou', 'Akr1979 ', 'Akrivi', 'Vlachou', 'avlaxou@aegean.gr', '6934248121', 2017, 'Anaplyrotr', 'Grafeio'),
(2, '13745', 'icsdkaporis', 'Alex1970 ', 'Alexios', 'Kaporis', 'AKap@aegean.gr', '6943274631', 2014, 'Epikouros', 'Grafeio 8');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `teaches`
--

CREATE TABLE `teaches` (
  `TeacherID` varchar(11) NOT NULL,
  `Teacher_Firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Teacher_Lastname` varchar(100) NOT NULL,
  `SubjectID` varchar(10) NOT NULL,
  `Subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `teaches`
--

INSERT INTO `teaches` (`TeacherID`, `Teacher_Firstname`, `Teacher_Lastname`, `SubjectID`, `Subject_name`) VALUES
('01213', 'Manolis', 'Kalligeros', '3211313', 'Doryforikes Epikoinwnies'),
('02020', 'Konstantinos', 'Maliatsos', '3211919', 'Asfaleia sto Fusiko Epeipedo'),
('02022', 'Elisavet', 'Konstantinou', '1231342', 'Proigmena Mathimatika'),
('02022', 'Elisavet', 'Konstantinou', '2139015', 'Statistiki Analysi'),
('03014', 'Anastasia', 'Douma', '3212105', 'Antikeimenostrefis Programmatismos 1'),
('03014', 'Anastasia', 'Douma', '3212106', 'Antikeimenostrefis Programmatismos 2'),
('03222', 'Maria', 'Karyda', '3212170', 'Psifiaki Diakivernisi'),
('12234', 'Theodoros', 'Leoutsakos', '3211011', 'Domes Dedomenwn'),
('12345', 'Panagiotis', 'Symeonidis', '3210721', 'Vaseis Dedomenwn 1'),
('12345', 'Panagiotis', 'Symeonidis', '3211012', 'Vaseis Dedomenwn 2'),
('12654', 'Akrivi', 'Vlachou', '3211302', 'Diktya Ypologistwn'),
('13745', 'Alexios', 'Kaporis', '3212343', 'Mathimatika gia Mixanikous 1'),
('13745', 'Alexios', 'Kaporis', '3215445', 'Mathimatika gia Mixanikous 2');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `Recognition` int(1) DEFAULT NULL,
  `ID` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`Recognition`, `ID`, `Username`, `Password`, `email`) VALUES
(2, '01213', 'icsdkalliger', 'Manos1978 ', 'mkallig@aegean.gr'),
(2, '02020', 'icsdmaliats', 'Kostas1982 ', 'maliatko@aegean.gr'),
(2, '02022', 'icsdkonstant', 'Elli1970 ', 'elisaveto@aege'),
(2, '02124', 'icsdkostoul', 'Theodor1983 ', 'thk@aegean.gr'),
(2, '03014', 'icsddouma', 'Sia1974 ', 'sia@aegean.gr'),
(2, '03222', 'icsdkaryda', 'Maria1980 ', 'MarKar@aegean.gr'),
(1, '11223', 'icsdadmnik', '433826NC!', 'nikchr@icsd.aegean.gr'),
(2, '12234', 'icsdleouts', 'Teo1972 ', 'tleoutsakos@aegean.gr'),
(2, '12345', 'icsdsymeon', 'Panos1975 ', 'psymeonidis@aegean.gr'),
(2, '12654', 'icsdvlachou', 'Akr1979 ', 'avlaxou@aegean.gr'),
(2, '13745', 'icsdkaporis', 'Alex1970 ', 'AKap@aegean.gr'),
(3, '3212007023', 'icsd07023', '12345!M ', 'icsd07023@icsd.aegean.gr'),
(3, '3212012143', 'icsd12143', '24680@P ', 'icsd12143@icsd.aegean.gr'),
(3, '3212017013', 'icsd17013', '13579#D ', 'icsd17013@icsd.aegean.gr'),
(3, '3212019038', 'icsd19038', '10213$D ', 'icsd19038@icsd.aegean.gr'),
(3, '3212019205', 'icsd19205', '25248%K ', 'icsd19213@.aegean.gr'),
(3, '3212019206', 'icsd19206', '99989&K ', 'icsd19206@icsd.aegean.gr'),
(3, '3212019213', 'icsd19213', '', 'icsd19213@icsd.aegean.gr'),
(3, '3212021061', 'icsd21061', '77442>S', 'icsd21061@icsd.aegean.gr'),
(3, '3212021235', 'icsd21235', '12568?E', 'icsd21235@icsd.aegean.gr'),
(1, '55667', 'icsdadmmar', '980122MA#', 'marant@icsd.aegean.gr');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Ευρετήρια για πίνακα `attends`
--
ALTER TABLE `attends`
  ADD PRIMARY KEY (`StudentID`,`SubjectID`),
  ADD KEY `SubjectID` (`SubjectID`);

--
-- Ευρετήρια για πίνακα `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`StudentID`,`SubjectID`),
  ADD KEY `SubjectID` (`SubjectID`);

--
-- Ευρετήρια για πίνακα `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`);

--
-- Ευρετήρια για πίνακα `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SubjectID`);

--
-- Ευρετήρια για πίνακα `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TeacherID`);

--
-- Ευρετήρια για πίνακα `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`TeacherID`,`SubjectID`),
  ADD KEY `SubjectID` (`SubjectID`),
  ADD KEY `TeacherID` (`TeacherID`) USING BTREE;

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `attends`
--
ALTER TABLE `attends`
  ADD CONSTRAINT `attends_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`),
  ADD CONSTRAINT `attends_ibfk_2` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`);

--
-- Περιορισμοί για πίνακα `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`);

--
-- Περιορισμοί για πίνακα `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `teaches_ibfk_1` FOREIGN KEY (`TeacherID`) REFERENCES `teacher` (`TeacherID`),
  ADD CONSTRAINT `teaches_ibfk_2` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
