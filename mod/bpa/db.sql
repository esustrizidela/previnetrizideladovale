INSERT INTO `sc_tb_menu` (`id`, `pai`, `nome`, `icone`, `tipo`, `local`, `arquivo`, `url`, `target`, `ativo`, `modulo`, `ordem`, `ad_a_click`, `ad_p_nome`, `ad_p_nome_cor`, `cor_nome`, `cor_icone`, `temp`) VALUES
('bpa_01', '000', 'BPA', 'slack', 'N', '.content-body', NULL, '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_02', 'bpa_01', 'SIGTAP', 'clipboard', 'N', '.content-body', NULL, '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_03', 'bpa_02', 'Importação', 'upload', 'C', '.content-body', 'mod/bpa/frm_sigtap.php', '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_04', 'bpa_02', 'CBO', 'archive', 'C', '.content-body', 'mod/bpa/frm_tb_my.php?ap=bpa_tb_sig_cbos&nb=CBO', '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_05', 'bpa_02', 'CID', 'archive', 'C', '.content-body', 'mod/bpa/frm_tb_my.php?ap=bpa_tb_sig_cids&nb=CID', '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_06', 'bpa_02', 'Procedimentos', 'archive', 'C', '.content-body', 'mod/bpa/frm_tb_my.php?ap=bpa_tb_sig_procedimentos&nb=Procedimentos', '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_07', 'bpa_13', 'Geral', 'tool', 'C', '.content-body', 'mod/bpa/frm_cf.php', '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_08', 'bpa_01', 'PEC', 'layout', 'N', '.content-body', NULL, '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_09', 'bpa_08', 'Gerar', 'play-circle', 'C', '.content-body', 'mod/bpa/exp_proc_pec.php', '#', NULL, 1, 'bpa', 0, 'SlickLoader.enable();', NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_10', 'bpa_08', 'Arquivos', 'file-text', 'C', '.content-body', 'mod/bpa/arquivos.php?ap=bpa', '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_11', 'bpa_08', 'CSV geração', 'minus-square', 'C', '.content-body', 'mod/bpa/frm_tb_csv.php?ap=1', '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_12', 'bpa_08', 'CSV geração ERRO', 'minus-square', 'C', '.content-body', 'mod/bpa/frm_tb_csv.php?ap=2', '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_13', 'bpa_01', 'Configurações', 'settings', 'N', '.content-body', NULL, '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL),
('bpa_14', 'bpa_13', 'Limpar', 'x-circle', 'C', '.content-body', 'mod/bpa/frm_limpa.php', '#', NULL, 1, 'bpa', 0, NULL, NULL, 'bg-primary', NULL, NULL, NULL);

INSERT INTO `sc_tb_modulos` (`modulo`) VALUES ('bpa');

CREATE TABLE `bpa_tb_lancamentos` (
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `dtlc` bigint(20) NOT NULL DEFAULT 30001231,
  `competencia` varchar(6) NOT NULL,
  `qtd` int(11) NOT NULL DEFAULT 1,
  `tipo` varchar(1) NOT NULL DEFAULT 'C',
  `sigtap` varchar(10) NOT NULL,
  `cid` varchar(4) NOT NULL,
  `caraterat` varchar(2) NOT NULL DEFAULT '01',
  `pro_cnes` varchar(7) NOT NULL,
  `pro_cbo` varchar(6) NOT NULL,
  `pro_cns` varchar(15) NOT NULL,
  `pro_ine` varchar(10) NOT NULL,
  `cid_cns` varchar(15) NOT NULL,
  `cid_idade` varchar(3) NOT NULL DEFAULT '1',
  `cid_sexo` varchar(1) NOT NULL DEFAULT 'F',
  `cid_ibge` varchar(6) NOT NULL,
  `cid_nome` varchar(30) NOT NULL,
  `cid_dt_nascimento` bigint(20) NOT NULL,
  `cid_cor` varchar(2) NOT NULL DEFAULT '01',
  `cid_tp_log` varchar(3) NOT NULL DEFAULT '151',
  `cid_nacionalidade` varchar(3) NOT NULL DEFAULT '010',
  `cid_logradouro` varchar(30) NOT NULL,
  `cid_cep` varchar(8) NOT NULL,
  `cid_bairro` varchar(30) NOT NULL,
  `cid_numero` varchar(5) NOT NULL,
  `cid_telefone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `bpa_tb_cf_geral` (
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `dti` bigint(20) NOT NULL DEFAULT 20210101,
  `dtf` bigint(20) NOT NULL DEFAULT 20210430,
  `sigtap` char(2) NOT NULL DEFAULT 'N',
  `compano` int(11) NOT NULL DEFAULT 2020,
  `compmes` int(11) NOT NULL DEFAULT 1,
  `cnes` varchar(500) DEFAULT NULL,
  `ine` varchar(500) DEFAULT NULL,
  `procs` varchar(500) DEFAULT NULL,
  `cbo` varchar(500) DEFAULT NULL,
  `nsec` varchar(150) DEFAULT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `maps_nt` int(11) NOT NULL DEFAULT 0,
  CONSTRAINT pk_CE primary key(id,ibge)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `bpa_tb_equivalente` (
  `id` varchar(11) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `proc_sus` varchar(20) NOT NULL,
  `proc_sigtap` varchar(10) NOT NULL,
  CONSTRAINT pk_CE primary key(id,ibge)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `bpa_tb_sig_cbos` (
  `cbo` varchar(6) PRIMARY KEY NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `bpa_tb_sig_cids` (
  `cid` varchar(4) PRIMARY KEY NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `agravo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `bpa_tb_sig_procedimentos` (
  `procedimento` varchar(10) PRIMARY KEY NOT NULL,
  `nome` varchar(250) NOT NULL,
  `sexo` char(1) NOT NULL DEFAULT 'I',
  `qtmax` int(11) NOT NULL DEFAULT 0,
  `idmi` int(11) NOT NULL DEFAULT 0,
  `idma` int(11) NOT NULL DEFAULT 150,
  `comp` char(6) NOT NULL,
  `bpai` char(1) NOT NULL DEFAULT 'N',
  `bpac` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `bpa_rl_sig_proc_cbo` (
  `procedimento` varchar(10) NOT NULL,
  `cbo` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `bpa_rl_sig_proc_cid` (
  `procedimento` varchar(10) NOT NULL,
  `cid` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;