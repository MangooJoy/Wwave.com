CREATE TABLE `member` (
  `email` varchar(30) NOT NULL,
  `name` varchar(5) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `telno` char(15) NOT NULL,
  `regdate` date NOT NULL,
  `stamp` int(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
