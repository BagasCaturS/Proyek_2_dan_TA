CREATE TABLE IF NOT EXISTS campus_info (
  id_info INT(99) AUTO_INCREMENT,
  wrld_rank INT(99),
  nama_univ TEXT,
  lokasi TEXT,
  PRIMARY KEY (id_info)
);

CREATE TABLE IF NOT EXISTS research (
  id_rsc INT(99) AUTO_INCREMENT,
  wrld_rank INT(99),
  research INT(99),
  rank_rsc INT(99),
  nama_univ TEXT,
  lokasi TEXT,
  id_info INT(99),
  PRIMARY KEY (id_rsc),
  FOREIGN KEY (id_info) REFERENCES campus_info (id_info)
);

CREATE TABLE IF NOT EXISTS citation (
  id_ctn INT(99) AUTO_INCREMENT,
  wrld_rank INT(99),
  citation INT(99),
  rank_ctn INT(99),
  nama_univ TEXT,
  lokasi TEXT,
  id_info INT(99),
  PRIMARY KEY (id_ctn),
  FOREIGN KEY (id_info) REFERENCES campus_info (id_info)
);

CREATE TABLE IF NOT EXISTS industry_income (
  id_inc INT(99) AUTO_INCREMENT,
  wrld_rank INT(99),
  income INT(99),
  rank_inc INT(99),
  nama_univ TEXT,
  lokasi TEXT,
  id_info INT(99),
  PRIMARY KEY (id_inc),
  FOREIGN KEY (id_info) REFERENCES campus_info (id_info)
);

CREATE TABLE IF NOT EXISTS international_outlook (
  id_int_outlook INT(99) AUTO_INCREMENT,
  wrld_rank INT(99),
  int_outlook INT(99),
  rank_int_outlook INT(99),
  nama_univ TEXT,
  lokasi TEXT,
  id_info INT(99),
  PRIMARY KEY (id_int_outlook),
  FOREIGN KEY (id_info) REFERENCES campus_info (id_info)
);

CREATE TABLE IF NOT EXISTS teaching (
  id_teaching INT(99) AUTO_INCREMENT,
  wrld_rank INT(99),
  teaching INT(99),
  rank_teaching INT(99),
  nama_univ TEXT,
  lokasi TEXT,
  id_info INT(99),
  PRIMARY KEY (id_teaching),
  FOREIGN KEY (id_info) REFERENCES campus_info (id_info)
);

CREATE TABLE IF NOT EXISTS overall (
  id_ova INT(99) AUTO_INCREMENT,
  id_rsc INT(99),
  id_ctn INT(99),
  id_inc INT(99),
  id_int_outlook INT(99),
  id_teaching INT(99),
  id_info INT(99),
  wrld_rank INT(99),
  nama_univ TEXT,
  lokasi TEXT,
  score_ova TEXT,
  research INT(99),
  rank_rsc INT(99),
  citation INT(99),
  rank_ctn INT(99),
  income INT(99),
  rank_inc INT(99),
  int_outlook INT(99),
  rank_int_outlook INT(99),
  teaching INT(99),
  rank_teaching INT(99),
  PRIMARY KEY (id_ova),
  FOREIGN KEY (id_rsc) REFERENCES research (id_rsc),
  FOREIGN KEY (id_ctn) REFERENCES citation (id_ctn),
  FOREIGN KEY (id_int_outlook) REFERENCES international_outlook (id_int_outlook),
  FOREIGN KEY (id_inc) REFERENCES industry_income (id_inc),
  FOREIGN KEY (id_teaching) REFERENCES teaching (id_teaching),
  FOREIGN KEY (id_info) REFERENCES campus_info (id_info)
);


SELECT * from campus_info;