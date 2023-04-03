ALTER TABLE `cidadao_tb_sisab_cadastros` ADD `cnes` VARCHAR(7) NULL;
TRUNCATE TABLE `cidadao_tb_sisab_cadastros`;

INSERT INTO `sc_tb_menu` (`id`, `pai`, `nome`, `icone`, `tipo`, `local`, `arquivo`, `url`, `target`, `ativo`, `modulo`, `ordem`, `ad_a_click`, `ad_p_nome`, `ad_p_nome_cor`, `cor_nome`, `cor_icone`, `temp`) VALUES
('cidadao_14', 'cidadao_01', 'Configurações', 'settings', 'N', '.content-body', NULL, '#', NULL, 1, 'cidadao', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('cidadao_15', 'cidadao_14', 'Limpar', 'x-circle', 'C', '.content-body', 'mod/cidadao/frm_limpa.php', '#', NULL, 1, 'cidadao', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('cidadao_16', 'cidadao_09', 'Cidadãos', 'filter', 'C', '.content-body', 'mod/cidadao/frm_cidadaos.php', '#', NULL, 1, 'cidadao', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL);

CREATE TABLE IF NOT EXISTS `cidadao_tb_cf_cidadaos` (
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `opcao` varchar(3) NOT NULL DEFAULT '',
  `filtro` varchar(150) NOT NULL DEFAULT '',
  CONSTRAINT pk_CE primary key(id,ibge)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;