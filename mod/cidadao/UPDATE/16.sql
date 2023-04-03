CREATE TABLE IF NOT EXISTS `cidadao_tb_sisab_cadastros` (
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cns` varchar(15) NOT NULL,
  `local` varchar(3) NOT NULL DEFAULT 'SCL',
  `dtn` varchar(10) NOT NULL,
  `pon` varchar(200) NOT NULL,
  `equipe` varchar(10) NOT NULL,
  `cond_avaliada` int(11) NOT NULL DEFAULT 0,
  `autorreferido` int(11) NOT NULL DEFAULT 0,
  `atend_indiv` bigint(20) NOT NULL DEFAULT 0,
  `soli_afer_cole` bigint(20) NOT NULL DEFAULT 0,
  `presente_mumerador` int(11) NOT NULL DEFAULT 0,
  `indicador` int(11) NOT NULL DEFAULT 0,
  `dum` bigint(20) NOT NULL DEFAULT 0,
  `dt1c` bigint(20) NOT NULL DEFAULT 0,
  `ig1c` bigint(20) NOT NULL DEFAULT 0,
  `qtdcons` int(11) NOT NULL DEFAULT 0,
  `dpp14` bigint(20) NOT NULL DEFAULT 0,
  `polio` bigint(20) NOT NULL DEFAULT 0,
  `penta` bigint(20) NOT NULL DEFAULT 0,
  `cenario` varchar(1) NOT NULL DEFAULT 'N',
  `sifilis` bigint(20) NOT NULL DEFAULT 0,
  `hiv` bigint(20) NOT NULL DEFAULT 0,
  `oatend` bigint(20) NOT NULL DEFAULT 0,
  `cidadao` varchar(20) NOT NULL DEFAULT '0',
  `cidadaoc` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `cidadao_tb_sisab_denominador` (
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `ref` varchar(3) NOT NULL,
  `cnes` varchar(7) NOT NULL,
  `ine` varchar(10) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cns` varchar(15) NOT NULL,
  `dtnas` bigint(20) NOT NULL DEFAULT 30001231,
  `dtini` bigint(20) NOT NULL DEFAULT 30001231,
  `dtfin` bigint(20) NOT NULL DEFAULT 30001231,
  `aborto` varchar(100) DEFAULT NULL,
  `quadrimestre` bigint(20) NOT NULL DEFAULT 0,
  `local` varchar(3) NOT NULL DEFAULT 'SCL',
  `cidadao` varchar(20) NOT NULL DEFAULT '0',
  `cidadaoc` varchar(20) NOT NULL DEFAULT '0',
  `dum` bigint(20) NOT NULL DEFAULT 0,
  `dpp` bigint(20) NOT NULL DEFAULT 0,
  `con1cDoI` bigint(20) NOT NULL DEFAULT 0,
  `cidadao2` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `cidadao_tb_cns_cpf` (
  `cns` varchar(15) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `cidadao_tb_cf_vacinas` (
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `dti` bigint(20) NOT NULL DEFAULT 20210101,
  `dtf` bigint(20) NOT NULL DEFAULT 20210430,
  `idin` int(11) NOT NULL DEFAULT 0,
  `idfi` int(11) NOT NULL DEFAULT 150,
  `cpf` varchar(250) NOT NULL DEFAULT '',
  `cns` varchar(250) NOT NULL DEFAULT '',
  `imunos` varchar(250) NOT NULL DEFAULT '',
  `dose` varchar(10) NOT NULL DEFAULT '',
  `sexo` varchar(1) NOT NULL DEFAULT 'A',
  `metodo` int(11) NOT NULL DEFAULT 1,
  CONSTRAINT pk_CE primary key(id,ibge)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `cidadao_tb_cf_procedimentos` (
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `dti` bigint(20) NOT NULL DEFAULT 20210101,
  `dtf` bigint(20) NOT NULL DEFAULT 20210430,
  `idin` int(11) NOT NULL DEFAULT 0,
  `idfi` int(11) NOT NULL DEFAULT 150,
  `cpf` varchar(250) NOT NULL DEFAULT '',
  `cns` varchar(250) NOT NULL DEFAULT '',
  `procs` varchar(250) NOT NULL DEFAULT '',
  `sexo` varchar(1) NOT NULL DEFAULT 'A',
  `avso` varchar(1) NOT NULL DEFAULT 'A',
  `metodo` int(11) NOT NULL DEFAULT 1,
  CONSTRAINT pk_CE primary key(id,ibge)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `cidadao_tb_cf_cidsciaps` (
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `dti` bigint(20) NOT NULL DEFAULT 20210101,
  `dtf` bigint(20) NOT NULL DEFAULT 20210430,
  `idin` int(11) NOT NULL DEFAULT 0,
  `idfi` int(11) NOT NULL DEFAULT 150,
  `cpf` varchar(250) NOT NULL DEFAULT '',
  `cns` varchar(250) NOT NULL DEFAULT '',
  `cids` varchar(250) NOT NULL DEFAULT '',
  `ciaps` varchar(250) NOT NULL DEFAULT '',
  `sexo` varchar(1) NOT NULL DEFAULT 'A',
  `metodo` int(11) NOT NULL DEFAULT 1,
  CONSTRAINT pk_CE primary key(id,ibge)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `sc_tb_menu` (`id`, `pai`, `nome`, `icone`, `tipo`, `local`, `arquivo`, `url`, `target`, `ativo`, `modulo`, `ordem`, `ad_a_click`, `ad_p_nome`, `ad_p_nome_cor`, `cor_nome`, `cor_icone`, `temp`) VALUES
('cidadao_04', 'cidadao_01', 'SISAB', 'aperture', 'N', '.content-body', NULL, '#', NULL, 1, 'cidadao', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('cidadao_05', 'cidadao_04', 'Importação', 'upload', 'C', '.content-body', 'mod/cidadao/frm_sisab.php', '#', NULL, 1, 'cidadao', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('cidadao_06', 'cidadao_04', 'Cadastros', 'archive', 'C', '.content-body', 'mod/cidadao/frm_tb_my.php?ap=cidadao_tb_sisab_cadastros&nb=Cadastros', '#', NULL, 1, 'cidadao', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('cidadao_07', 'cidadao_04', 'Denominador', 'archive', 'C', '.content-body', 'mod/cidadao/frm_tb_my.php?ap=cidadao_tb_sisab_denominador&nb=Denominador', '#', NULL, 1, 'cidadao', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('cidadao_08', 'cidadao_04', 'Completa', 'link', 'C', '.content-body', 'mod/cidadao/frm_completa.php', '#', NULL, 1, 'cidadao', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('cidadao_09', 'cidadao_01', 'Relatórios de apoio', 'file-text', 'N', '.content-body', NULL, '#', NULL, 1, 'cidadao', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('cidadao_10', 'cidadao_09', 'Vacinas', 'filter', 'C', '.content-body', 'mod/cidadao/frm_vacinas.php', '#', NULL, 1, 'cidadao', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('cidadao_11', 'cidadao_09', 'Procedimentos', 'filter', 'C', '.content-body', 'mod/cidadao/frm_procedimentos.php', '#', NULL, 1, 'cidadao', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('cidadao_12', 'cidadao_09', 'CIDs/CIAPs', 'filter', 'C', '.content-body', 'mod/cidadao/frm_cidsciaps.php', '#', NULL, 1, 'cidadao', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL);