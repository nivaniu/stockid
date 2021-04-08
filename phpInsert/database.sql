DROP TABLE stock_id_clients;
CREATE TABLE stock_id_clients(
	IDCLIENT INTEGER PRIMARY KEY,
	IDREP VARCHAR(30),
	NOM VARCHAR(30),
	PRENOM VARCHAR(30),
	USERNAME VARCHAR(30),
	BIRTHDAY DATE,
	LAST_LOGIN DATE,
	SECURE_KEY VARCHAR(30),
	PRICING_PLAN VARCHAR(30)
);

INSERT INTO stock_id_clients VALUES (1, 'client1', 'IVANIUK', 'Nazarii','nivaniu', '06/01/1999', null, null, 'FREE' );
INSERT INTO stock_id_clients VALUES (2, 'client2', 'REBRAB', 'Tassadit','trebrab', '18/12/1998', null, null, 'FREE' );
INSERT INTO stock_id_clients VALUES (3, 'client3', 'FELLAH', 'Mohamed-Fouad','mfellah', '22/09/1998', null, null, 'FREE' );