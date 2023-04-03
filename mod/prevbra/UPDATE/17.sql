CREATE TABLE IF NOT EXISTS `prevbra_tb_exclusao` (
  `ikey` int(11) NOT NULL AUTO_INCREMENT,
  `dtinc` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `indicador` int(11) NOT NULL DEFAULT 0,
  `quadrimestre` varchar(6) NOT NULL DEFAULT '0',
  `cpf` varchar(11) DEFAULT NULL,
  `cns` varchar(15) DEFAULT NULL,
  `denominador` int(11) NOT NULL DEFAULT 0,
  `numerador` int(11) NOT NULL DEFAULT 0,
  `obs` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ikey`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `sc_tb_menu` (`id`, `pai`, `nome`, `icone`, `tipo`, `local`, `arquivo`, `url`, `target`, `ativo`, `modulo`, `ordem`, `ad_a_click`, `ad_p_nome`, `ad_p_nome_cor`, `cor_nome`, `cor_icone`, `temp`) VALUES
('prevbra_40', 'prevbra_09', 'Exclusão', 'x-circle', 'C', '.content-body', 'mod/prevbra/frm_exclusao.php', '#', NULL, 1, 'prevbra', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL);