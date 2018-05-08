--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `gender`, `designation`) VALUES
(1, 'Micheal Bruce', 'Male', 'System Architect'),
(5, 'Clara Gilliam', 'Female', 'Programmer'),
(6, 'Robert L. Hoskins', 'Male', 'Personal secretary'),
(7, 'Walter M. Watkins', 'Male', 'Crane and tower operator'),
(8, 'Stanley L. Gomez', 'Male', 'HVACR technician'),
(9, 'Erik C. Parker', 'Male', 'Graduate teaching assistant'),
(11, 'Stephanie B. Boland', 'Female', 'Adjuster'),
(12, 'Donald P. Fitzgerald', 'Male', 'Pharmacy aide'),
(13, 'Angel Lewis', 'Female', 'Paper goods tender'),
(14, 'Justin Dean', 'Male', 'Magnetic resonance Technolist'),
(15, 'Nora Blake', 'Female', 'Neuroscience nurse'),
(16, 'Russell Fox', 'Male', 'Safe repairer'),
(17, 'Daryl Bradley', 'Female', 'Intructional coordinator'),
(18, 'Benjamin Gonzales', 'Male', 'Musician'),
(19, 'Viola Francis', 'Female', 'Amusement machine servicer'),
(20, 'Reginald Benson', 'Male', 'Management information systems'),
(21, 'Glenda Ray', 'Female', 'Business support assistant'),
(22, 'Paula Vargas', 'Female', 'Electrical engineer'),
(23, 'Mark Armstrong', 'Male', 'Merchandise manager'),
(24, 'Jaime Campbell', 'Female', 'Petroleum pump system operator'),
(25, 'Mike Beck', 'Male', 'Placement officer'),
(26, 'Ann Lowe', 'Female', 'Computer scientist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
