UPDATE `sc_tb_menu` SET `nome` = 'Cadastros (por eq.)' WHERE `id` = 'cidadao_06';
UPDATE `sc_tb_menu` SET `nome` = 'Denominador (Apoio ao Cuid.)' WHERE `id` = 'cidadao_07';
UPDATE `sc_tb_menu` SET `nome` = 'Cadastros (por eq.)' WHERE `id` = 'prevbra_34';
UPDATE `sc_tb_menu` SET `nome` = 'Denominador (Apoio ao Cuid.)' WHERE `id` = 'prevbra_39';

INSERT INTO `sc_tb_menu` (`id`, `pai`, `nome`, `icone`, `tipo`, `local`, `arquivo`, `url`, `target`, `ativo`, `modulo`, `ordem`, `ad_a_click`, `ad_p_nome`, `ad_p_nome_cor`, `cor_nome`, `cor_icone`, `temp`) VALUES
('013', '002', 'Sobre', 'layout', 'C', '.content-body', 'core/sobre.php', '#', NULL, 1, '0', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL);