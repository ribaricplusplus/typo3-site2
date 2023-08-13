#
# Add SQL definition of database tables
#

CREATE TABLE tx_testpackage_domain_model_something (
    uid int(11) unsigned NOT NULL auto_increment,
    title VARCHAR(255) DEFAULT '' NOT NULL,
    smth VARCHAR(150),

    PRIMARY KEY (uid)
);