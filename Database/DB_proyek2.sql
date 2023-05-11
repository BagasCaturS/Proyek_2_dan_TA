create or replace table campus_info(
id_info int(99)auto_increment,
wrld_rank int(99),
nama_univ TEXT,
lokasi TEXT,
PRIMARY KEY (id_info));

create or replace table research(
id_rsc int(99)auto_increment,
wrld_rank int(99),
research int(99),
rank_rsc int(99),
nama_univ TEXT,
lokasi TEXT,
id_info int(99),
PRIMARY KEY (id_rsc),
Foreign Key (id_info) REFERENCES campus_info (id_info));

create or replace table citation(
id_ctn int(99)auto_increment,
wrld_rank int(99),
citation int(99),
rank_ctn int(99),
nama_univ TEXT,
lokasi TEXT,
id_info int(99),
PRIMARY KEY (id_ctn),
Foreign Key (id_info) REFERENCES campus_info (id_info));

create or replace table industry_income(
id_inc int(99)auto_increment,
wrld_rank int(99),
income int(99),
rank_inc int(99),
nama_univ TEXT,
lokasi TEXT,
id_info int(99),
PRIMARY KEY (id_inc),
Foreign Key (id_info) REFERENCES campus_info (id_info));

create or replace table international_outlook(
id_int_outlook int(99)auto_increment,
wrld_rank int(99),
int_outlook int(99),
rank_int_outlook int(99),
nama_univ TEXT,
lokasi TEXT,
id_info int(99),
PRIMARY KEY (id_int_outlook),
Foreign Key (id_info) REFERENCES campus_info (id_info));

create or replace table teaching(
id_teaching int(99)auto_increment,
wrld_rank int(99),
teaching int(99),
rank_teaching int(99),
nama_univ TEXT,
lokasi TEXT,
id_info int(99),
PRIMARY KEY (id_teaching),
Foreign Key (id_info) REFERENCES campus_info (id_info));

create or replace table overall(
id_ova int(99)auto_increment,
id_rsc int(99),
id_ctn int(99),
id_inc int(99),
id_int_outlook int(99),
id_teaching int(99),
id_info int(99),
wrld_rank int(99),
nama_univ TEXT,
lokasi TEXT,
score_ova TEXT,
research int(99),
rank_rsc int(99),
citation int(99),
rank_ctn int(99),
income int(99),
rank_inc int(99),
int_outlook int(99),
rank_int_outlook int(99),
teaching int(99),
rank_teaching int(99),
PRIMARY KEY (id_ova),
Foreign Key (id_rsc) REFERENCES research (id_rsc),
Foreign Key (id_ctn) REFERENCES citation (id_ctn),
Foreign Key (id_int_outlook) REFERENCES international_outlook (id_int_outlook),
Foreign Key (id_inc) REFERENCES industry_income (id_inc),
Foreign Key (id_teaching) REFERENCES teaching (id_teaching),
PRIMARY KEY (id_info) REFERENCES campus_info (id_info));