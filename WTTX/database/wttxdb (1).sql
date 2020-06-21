-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 10:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wttxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `capacity_parameter`
--

CREATE TABLE `capacity_parameter` (
  `cap_param_ID` int(30) NOT NULL,
  `ProjectID` int(30) NOT NULL,
  `Cell_throughput_up` varchar(30) NOT NULL,
  `Cell_throughput_dl` varchar(30) NOT NULL,
  `number_users` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `capacity_result`
--

CREATE TABLE `capacity_result` (
  `capresult_ID` int(30) NOT NULL,
  `ProjectID` int(30) NOT NULL,
  `total_NetworkTH_up` varchar(30) NOT NULL,
  `total_NetworkTH_dl` varchar(30) NOT NULL,
  `total_NetworkTH_Mac_up` varchar(30) NOT NULL,
  `total_NetworkTH_Mac_dl` varchar(30) NOT NULL,
  `enode_up` varchar(30) NOT NULL,
  `enode_dl` varchar(30) NOT NULL,
  `enode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coverage_paramaters`
--

CREATE TABLE `coverage_paramaters` (
  `CovParamID` int(11) NOT NULL,
  `ProjectID` int(11) NOT NULL,
  `power_up` varchar(20) NOT NULL,
  `power_dl` varchar(20) NOT NULL,
  `Resourceblock_up` varchar(30) NOT NULL,
  `Resourceblock_dl` varchar(30) NOT NULL,
  `subcarrier_up` varchar(30) NOT NULL,
  `subcarrier_dl` varchar(30) NOT NULL,
  `shadow_up` varchar(20) NOT NULL,
  `shadow_dl` varchar(20) NOT NULL,
  `gain_emission_TX` varchar(20) NOT NULL,
  `gain_emission_RX` varchar(20) NOT NULL,
  `noise_TX` varchar(20) NOT NULL,
  `noise_RX` varchar(20) NOT NULL,
  `thernalNoise_TX` varchar(30) NOT NULL,
  `thernalNoise_RX` varchar(30) NOT NULL,
  `body_loss_TX` varchar(20) NOT NULL,
  `body_loss_RX` varchar(20) NOT NULL,
  `cable_loss_TX` varchar(20) NOT NULL,
  `cable_loss_RX` varchar(20) NOT NULL,
  `inter_up` varchar(20) NOT NULL,
  `inter_dl` varchar(20) NOT NULL,
  `snir_up` varchar(20) NOT NULL,
  `snir_dl` varchar(20) NOT NULL,
  `MRSignal_strength_up` varchar(30) NOT NULL,
  `MRSignal_strength_dl` varchar(30) NOT NULL,
  `penetration_loss` varchar(30) NOT NULL,
  `Pathlloss_up` varchar(20) NOT NULL,
  `Pathlloss__dl` varchar(20) NOT NULL,
  `Rsensitivity_up` varchar(20) NOT NULL,
  `Rsensitvity_dl` varchar(20) NOT NULL,
  `EIRP_up` varchar(20) NOT NULL,
  `EIRP_dl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coverage_results`
--

CREATE TABLE `coverage_results` (
  `CovResultID` int(11) NOT NULL,
  `ProjectID` int(30) NOT NULL,
  `cell_radius_up` int(30) NOT NULL,
  `cell_radius_dl` varchar(30) NOT NULL,
  `cell_area_up` varchar(30) NOT NULL,
  `cell_area_dl` varchar(30) NOT NULL,
  `enodeB_up` varchar(30) NOT NULL,
  `enodeB_dl` varchar(30) NOT NULL,
  `enode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `general parameters`
--

CREATE TABLE `general parameters` (
  `GparametersID` int(200) NOT NULL,
  `ProjectID` int(200) NOT NULL,
  `duplex mode` varchar(200) NOT NULL,
  `Frequency` varchar(200) NOT NULL,
  `zone surface area` varchar(200) NOT NULL,
  `morphology` varchar(200) NOT NULL,
  `channel Bandwidth` varchar(200) NOT NULL,
  `uplinkModulation mode` varchar(200) NOT NULL,
  `downlinkModulation mo` varchar(200) NOT NULL,
  `typesite` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ProjectID` int(200) NOT NULL,
  `UserID` int(30) NOT NULL,
  `ProjectName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ProjectID`, `UserID`, `ProjectName`) VALUES
(4, 5, 'man'),
(5, 5, 'mon'),
(6, 5, 'moris'),
(7, 6, 'mild'),
(8, 6, 'maggi');

-- --------------------------------------------------------

--
-- Table structure for table `propagation parameters`
--

CREATE TABLE `propagation parameters` (
  `PropParamID` int(30) NOT NULL,
  `ProjectID` int(30) NOT NULL,
  `Propa_Model` varchar(30) NOT NULL,
  `antennaheight_TX` varchar(30) NOT NULL,
  `antennaheight_RX` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_model`
--

CREATE TABLE `service_model` (
  `Service_model_ID` int(30) NOT NULL,
  `ProjectID` int(30) NOT NULL,
  `VOIPThpS_up` varchar(30) NOT NULL,
  `VOIPThpS_dl` varchar(30) NOT NULL,
  `EmailThpS_dl` varchar(30) NOT NULL,
  `EmailThpS_up` varchar(30) NOT NULL,
  `vidphoneThpS_up` varchar(30) NOT NULL,
  `vidphoneThpS_dl` varchar(30) NOT NULL,
  `RTgamingThpS_up` varchar(30) NOT NULL,
  `RTgamingThpS_dl` varchar(30) NOT NULL,
  `streamingMedThpS_up` varchar(30) NOT NULL,
  `streamingMedThpS_dl` varchar(30) NOT NULL,
  `IMSTHpS_up` varchar(30) NOT NULL,
  `IMSTHpS_dl` varchar(30) NOT NULL,
  `WebTHpS_up` varchar(30) NOT NULL,
  `WebTHpS_dl` varchar(30) NOT NULL,
  `FiletransTHpS_up` varchar(30) NOT NULL,
  `FiletransTHpS_dl` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `Site_ID` int(30) NOT NULL,
  `site_name` varchar(30) NOT NULL,
  `site_longitude` varchar(300) NOT NULL,
  `site_latitude` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `traffic_model`
--

CREATE TABLE `traffic_model` (
  `Traffic_model_ID` int(30) NOT NULL,
  `ProjectID` int(30) NOT NULL,
  `VOIPBHTpS_up` varchar(30) NOT NULL,
  `VOIPBHTpS_dl` varchar(30) NOT NULL,
  `EmailBHTpS_dl` varchar(30) NOT NULL,
  `EmailBHTpS_up` varchar(30) NOT NULL,
  `vidphoneBHTpS_up` varchar(30) NOT NULL,
  `vidphoneBHTpS_dl` varchar(30) NOT NULL,
  `RTgamingBHTpS_up` varchar(30) NOT NULL,
  `RTgamingBHTpS_dl` varchar(30) NOT NULL,
  `streamingMedBHTpS_up` varchar(30) NOT NULL,
  `streamingMedBHTpS_dl` varchar(30) NOT NULL,
  `IMSBHTpS_up` varchar(30) NOT NULL,
  `IMSBHTpS_dl` varchar(30) NOT NULL,
  `WebBHTpS_up` varchar(30) NOT NULL,
  `WebBHTpS_dl` varchar(30) NOT NULL,
  `FiletransBHTpS_up` varchar(30) NOT NULL,
  `FiletransBHTpS_dl` varchar(30) NOT NULL,
  `singleuser_throughput_up` varchar(30) NOT NULL,
  `singleuser_throughput_dl` varchar(30) NOT NULL,
  `singleuser_throughput_IPTV` varchar(30) NOT NULL,
  `IPTV_definition` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(30) NOT NULL,
  `Firstname` varchar(200) NOT NULL,
  `Lastname` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Firstname`, `Lastname`, `Password`, `Email`) VALUES
(1, 'Nkeng', 'Emma', 'emmankeng', 'nkengemma@gmail.com'),
(2, 'FON', 'Emma', 'emma', 'fon@gmail.com'),
(3, 'messa', 'Emma', '$2y$10$Wy64Ww2CzYHxkFmaDcvDbu.asIKo3bmqJUJQM7/sVxReIQ2J7HYvS', 'messa@gmail.com'),
(4, 'Njun', 'Fru', '$2y$10$sOI8S.qej.kel6gXvMAW6u22KsAP6YEo5JIDFxwPy2WsC7gpmD9y6', 'njunfru@gmail.com'),
(5, 'Musa', 'Boris', '$2y$10$qyggTmsZOV/d7ZZUh077rOyhAMaL6IyPaiHyI8oaRg5dsnm7tQ45u', 'musa@gmail.com'),
(6, 'muna', 'mosi', '$2y$10$4KqH1nspHpwc6KJDBVfoLevF4qTZEb8tWbi5g.IqY.WS/KFjvtZQW', 'muna@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `Zone_ID` int(30) NOT NULL,
  `ProjectID` int(30) NOT NULL,
  `zone _name` varchar(30) NOT NULL,
  `Zone_latitude` varchar(300) NOT NULL,
  `zone_longitude` varchar(300) NOT NULL,
  `enode_num` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capacity_parameter`
--
ALTER TABLE `capacity_parameter`
  ADD PRIMARY KEY (`cap_param_ID`);

--
-- Indexes for table `capacity_result`
--
ALTER TABLE `capacity_result`
  ADD PRIMARY KEY (`capresult_ID`);

--
-- Indexes for table `coverage_paramaters`
--
ALTER TABLE `coverage_paramaters`
  ADD PRIMARY KEY (`CovParamID`);

--
-- Indexes for table `coverage_results`
--
ALTER TABLE `coverage_results`
  ADD PRIMARY KEY (`CovResultID`);

--
-- Indexes for table `general parameters`
--
ALTER TABLE `general parameters`
  ADD PRIMARY KEY (`GparametersID`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`ProjectID`);

--
-- Indexes for table `service_model`
--
ALTER TABLE `service_model`
  ADD PRIMARY KEY (`Service_model_ID`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`Site_ID`);

--
-- Indexes for table `traffic_model`
--
ALTER TABLE `traffic_model`
  ADD PRIMARY KEY (`Traffic_model_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`Zone_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capacity_parameter`
--
ALTER TABLE `capacity_parameter`
  MODIFY `cap_param_ID` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `capacity_result`
--
ALTER TABLE `capacity_result`
  MODIFY `capresult_ID` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coverage_paramaters`
--
ALTER TABLE `coverage_paramaters`
  MODIFY `CovParamID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coverage_results`
--
ALTER TABLE `coverage_results`
  MODIFY `CovResultID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general parameters`
--
ALTER TABLE `general parameters`
  MODIFY `GparametersID` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `ProjectID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_model`
--
ALTER TABLE `service_model`
  MODIFY `Service_model_ID` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `Site_ID` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `traffic_model`
--
ALTER TABLE `traffic_model`
  MODIFY `Traffic_model_ID` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `Zone_ID` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
