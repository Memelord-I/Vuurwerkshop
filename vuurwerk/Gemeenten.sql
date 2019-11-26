CREATE TABLE gemeente (
 gm_id INTEGER (5) PRIMARY KEY,
 gm_naam VARCHAR (35) NOT NULL
);

CREATE TABLE plaats (
 pl_naam VARCHAR (35) NOT NULL,
 pl_inwoners INTEGER (7),
 pl_fk_gemeente INTEGER (5)
);