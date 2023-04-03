ALTER TABLE `prevbra_tb_cf_ind_123` ADD `qdad` INT NOT NULL DEFAULT '1';
ALTER TABLE `prevbra_tb_cf_ind_4` ADD `qdad` INT NOT NULL DEFAULT '1';
ALTER TABLE `prevbra_tb_cf_ind_5` ADD `qdad` INT NOT NULL DEFAULT '1';
ALTER TABLE `prevbra_tb_cf_ind_6` ADD `qdad` INT NOT NULL DEFAULT '1';
ALTER TABLE `prevbra_tb_cf_ind_7` ADD `qdad` INT NOT NULL DEFAULT '1';
ALTER TABLE `prevbra_tb_cf_geral` ADD `qdad2` INT NOT NULL DEFAULT '1';

ALTER TABLE `prevbra_tb_sisab_cadastros` ADD `cnes` VARCHAR(7) NULL;
TRUNCATE TABLE `prevbra_tb_sisab_cadastros`;

INSERT INTO `sc_tb_menu` (`id`, `pai`, `nome`, `icone`, `tipo`, `local`, `arquivo`, `url`, `target`, `ativo`, `modulo`, `ordem`, `ad_a_click`, `ad_p_nome`, `ad_p_nome_cor`, `cor_nome`, `cor_icone`, `temp`) VALUES
('prevbra_41', 'prevbra_09', 'Limpar', 'x-circle', 'C', '.content-body', 'mod/prevbra/frm_limpa.php', '#', NULL, 1, 'prevbra', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL);