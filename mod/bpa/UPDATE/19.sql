CREATE TABLE IF NOT EXISTS `bpa_tb_equivalente` (
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `proc_sus` varchar(20) NOT NULL,
  `proc_sigtap` varchar(10) NOT NULL,
  CONSTRAINT pk_CE primary key(id,ibge)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;