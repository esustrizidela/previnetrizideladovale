DROP TABLE prevbra_tb_dash_geral_h;
DROP TABLE prevbra_tb_dash_ue_h;

CREATE TABLE IF NOT EXISTS `prevbra_tb_dash_geral_h` (
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `dti` bigint(20) NOT NULL,
  `dtf` bigint(20) NOT NULL,
  `indicador` int(11) NOT NULL DEFAULT 0,
  `quadrimestre` bigint(20) NOT NULL DEFAULT 0,
  `denominador` int(11) NOT NULL DEFAULT 0,
  `denominador_i` int(11) NOT NULL DEFAULT 0,
  `numerador` int(11) NOT NULL DEFAULT 0,
  `porcentagem` float NOT NULL DEFAULT 0,
  `resultadoi` float NOT NULL DEFAULT 0,
  `meta` int(11) NOT NULL DEFAULT 0,
  `pontuacao` int(11) NOT NULL DEFAULT 0,
  `ponderacao` int(11) NOT NULL DEFAULT 0,
  `resultadop` float NOT NULL DEFAULT 0,
  `dt_geracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `banco` varchar(50) DEFAULT NULL,
  `versao` varchar(20) DEFAULT NULL,
  `cor1` varchar(30) DEFAULT NULL,
  `cor2` varchar(30) DEFAULT NULL,
  `icone` varchar(100) DEFAULT NULL,
  `icone_geral` varchar(100) DEFAULT NULL,
  `qden` varchar(1) NOT NULL DEFAULT 'I'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `prevbra_tb_dash_ue_h` (
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `dti` bigint(20) NOT NULL DEFAULT 0,
  `dtf` bigint(20) NOT NULL DEFAULT 0,
  `indicador` int(11) NOT NULL DEFAULT 0,
  `quadrimestre` bigint(20) NOT NULL DEFAULT 0,
  `denominador` int(11) NOT NULL DEFAULT 0,
  `denominador_i` int(11) NOT NULL DEFAULT 0,
  `numerador` int(11) NOT NULL DEFAULT 0,
  `porcentagem` float DEFAULT 0,
  `resultadoi` float NOT NULL DEFAULT 0,
  `meta` int(11) NOT NULL DEFAULT 0,
  `pontuacao` int(11) NOT NULL DEFAULT 0,
  `ponderacao` int(11) NOT NULL DEFAULT 0,
  `resultadop` float NOT NULL DEFAULT 0,
  `dt_geracao` timestamp NOT NULL DEFAULT current_timestamp(),
  `banco` varchar(50) DEFAULT NULL,
  `versao` varchar(20) DEFAULT NULL,
  `cor1` varchar(20) DEFAULT NULL,
  `cor2` varchar(30) DEFAULT NULL,
  `icone` varchar(100) DEFAULT NULL,
  `icone_geral` varchar(100) DEFAULT NULL,
  `qden` varchar(1) NOT NULL DEFAULT 'I',
  `ine` varchar(10) DEFAULT NULL,
  `cnes` varchar(7) DEFAULT NULL,
  `tipo` varchar(1) NOT NULL,
  `nome` varchar(250) DEFAULT NULL,
  `den` int(11) NOT NULL DEFAULT 0,
  `num` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `prevbra_tb_ind_gerado` ADD `cidadaoc` BIGINT NOT NULL DEFAULT '0' AFTER `cidadao`;
ALTER TABLE `prevbra_tb_ind_gerado` ADD `cidadao2` BIGINT NOT NULL DEFAULT '0' AFTER `cidadaoc`;

ALTER TABLE `prevbra_tb_cf_ind_123` ADD `origden` VARCHAR(1) NOT NULL DEFAULT 'P';
ALTER TABLE `prevbra_tb_cf_ind_4` ADD `origden` VARCHAR(1) NOT NULL DEFAULT 'P';
ALTER TABLE `prevbra_tb_cf_ind_5` ADD `origden` VARCHAR(1) NOT NULL DEFAULT 'P';
ALTER TABLE `prevbra_tb_cf_ind_6` ADD `origden` VARCHAR(1) NOT NULL DEFAULT 'P';
ALTER TABLE `prevbra_tb_cf_ind_7` ADD `origden` VARCHAR(1) NOT NULL DEFAULT 'P';

ALTER TABLE `prevbra_tb_sisab_denominador` ADD `dum` BIGINT NOT NULL DEFAULT '0', ADD `dpp` BIGINT NOT NULL DEFAULT '0', ADD `con1cDoI` BIGINT NOT NULL DEFAULT '0', ADD `cidadao2` INT NOT NULL DEFAULT '0';
