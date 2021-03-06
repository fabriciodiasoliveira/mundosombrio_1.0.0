CREATE TABLE classe (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NULL,
  descricao TEXT NULL,
  created_at TIMESTAMP NULL,
  updated_at TIMESTAMP NULL,
  PRIMARY KEY (id)
)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;

CREATE TABLE ficha (
id BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(255),
resumo TEXT,
created_at TIMESTAMP NULL,
updated_at TIMESTAMP NULL,
id_classe BIGINT UNSIGNED
)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;

CREATE TABLE fichaUser (
id BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(255),
resumo TEXT,
created_at TIMESTAMP NULL,
updated_at TIMESTAMP NULL,
id_ficha BIGINT UNSIGNED,
id_user BIGINT UNSIGNED,
id_cronica BIGINT UNSIGNED
)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;

CREATE TABLE cronica (
id BIGINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(255),
resumo TEXT,
finalizada INT DEFAULT 0,
created_at TIMESTAMP NULL,
updated_at TIMESTAMP NULL,
id_user BIGINT UNSIGNED
)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;

CREATE TABLE postagem (
id BIGINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
post TEXT,
created_at TIMESTAMP NULL,
updated_at TIMESTAMP NULL,
id_fichaUser BIGINT,
id_cronica BIGINT UNSIGNED
)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;

CREATE TABLE caracteristica (
id BIGINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100),
faccao INT,
tipo INT,
id_tiposAtributo BIGINT UNSIGNED,
created_at TIMESTAMP NULL,
updated_at TIMESTAMP NULL
)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;

CREATE TABLE valor (
id BIGINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
valor VARCHAR(100),
id_fichaUser BIGINT UNSIGNED,
id_caracteristica BIGINT UNSIGNED,
created_at TIMESTAMP NULL,
updated_at TIMESTAMP NULL
)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;