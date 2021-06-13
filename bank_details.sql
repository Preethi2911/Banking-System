SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Preethi', 'preethi@gmail.com', 700000),
(2, 'Taara', 'taara@gmail.com', 200000),
(3, 'Krisha', 'krisha@gmail.com', 300000),
(4, 'Zara', 'zara@gmail.com', 90000),
(5, 'Jay', 'jay@gmail.com', 80000),
(6, 'Raj', 'raj@gmail.com', 90000),
(7, 'Priya', 'priya@gmail.com', 40000),
(8, 'Prem', 'prem@gmail.com', 70000),
(9, 'Naresh', 'naresh@gmail.com', 80000),
(10, 'Jeevitha', 'jeevitha@gmail.com', 19000);


ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;


ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

