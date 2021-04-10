-- @/home/tp-home009/nivaniu/public_html/pt/database.sql
DROP TABLE stock_id_clients;
CREATE TABLE stock_id_clients(
	IDCLIENT INTEGER PRIMARY KEY,
	IDREP VARCHAR(30),
	NOM VARCHAR(30),
	PRENOM VARCHAR(30),
	USERNAME VARCHAR(30),
    password VARCHAR(30),
	BIRTHDAY DATE,
	LAST_LOGIN DATE,
	SECURE_KEY VARCHAR(30),
	PRICING_PLAN VARCHAR(30)
);
drop SEQUENCE seq_stock_id_clients;
create sequence seq_stock_id_clients;

drop SEQUENCE seq_stock_idrep_clients;
create sequence seq_stock_idrep_clients;

INSERT INTO stock_id_clients VALUES (seq_stock_id_clients.nextval, 'client'||seq_stock_idrep_clients.nextval, 'IVANIUK','IVANIUK', 'Nazarii','nivaniu', TO_DATE('06/01/1999', 'DD/MM/YYYY'), null, null, 'FREE' );
INSERT INTO stock_id_clients VALUES (seq_stock_id_clients.nextval, 'client'||seq_stock_idrep_clients.nextval, 'REBRAB','REBRAB', 'Tassadit','trebrab', TO_DATE('18/12/1998', 'DD/MM/YYYY'), null, null, 'FREE' );
INSERT INTO stock_id_clients VALUES (seq_stock_id_clients.nextval, 'client'||seq_stock_idrep_clients.nextval, 'FELLAH','FELLAH', 'Mohamed-Fouad','mfellah', TO_DATE('22/09/1998', 'DD/MM/YYYY'), null, null, 'FREE' );
