INSERT INTO `sc_tb_menu` (`id`, `pai`, `nome`, `icone`, `tipo`, `local`, `arquivo`, `url`, `target`, `ativo`, `modulo`, `ordem`, `ad_a_click`, `ad_p_nome`, `ad_p_nome_cor`, `cor_nome`, `cor_icone`, `temp`) VALUES
('infoaps_01', '000', 'Info APS', 'command', 'N', '.content-body', NULL, '#', NULL, 1, 'infoaps', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('infoaps_02', 'infoaps_01', 'Configuração', 'settings', 'C', '.content-body', 'mod/infoaps/frm_cf.php', '#', NULL, 1, 'infoaps', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('infoaps_03', 'infoaps_01', 'Monitor', 'monitor', 'C', '.content-body', 'mod/infoaps/monitor.php', '#', NULL, 1, 'infoaps', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL);

INSERT INTO `sc_tb_modulos` (`modulo`) VALUES ('infoaps');


CREATE TABLE IF NOT EXISTS `infoaps_tb_cf_geral` (
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `tipo_municipio` varchar(20) DEFAULT NULL,
  `homologados` varchar(250) DEFAULT NULL,
  `num_cons_med_esf` int(11) NOT NULL DEFAULT 0,
  `num_cons_enf_esf` int(11) NOT NULL DEFAULT 0,
  `num_cons_med_eap30` int(11) NOT NULL DEFAULT 0,
  `num_cons_enf_eap30` int(11) NOT NULL DEFAULT 0,
  `num_cons_med_eap20` int(11) NOT NULL DEFAULT 0,
  `num_cons_enf_eap20` int(11) NOT NULL DEFAULT 0,
  CONSTRAINT pk_CE primary key(id,ibge)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
