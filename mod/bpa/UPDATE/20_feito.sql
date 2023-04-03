INSERT INTO `sc_tb_menu` (`id`, `pai`, `nome`, `icone`, `tipo`, `local`, `arquivo`, `url`, `target`, `ativo`, `modulo`, `ordem`, `ad_a_click`, `ad_p_nome`, `ad_p_nome_cor`, `cor_nome`, `cor_icone`, `temp`) VALUES
('bpa_13', 'bpa_01', 'Configurações', 'settings', 'N', '.content-body', NULL, '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_14', 'bpa_13', 'Limpar', 'x-circle', 'C', '.content-body', 'mod/bpa/frm_limpa.php', '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL);

UPDATE `sc_tb_menu` SET `pai` = 'bpa_13', `nome` = 'Geral' WHERE `sc_tb_menu`.`id` = 'bpa_07'; 