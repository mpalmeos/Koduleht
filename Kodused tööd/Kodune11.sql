#1
CREATE TABLE loomaaed_mpalmeos (
    id INTEGER PRIMARY KEY auto_increment,
    nimi VARCHAR(100) NOT NULL,
	vanus INTEGER,
	liik VARCHAR(200) NOT NULL,
	puur INTEGER DEFAULT 1
);

#2
INSERT INTO loomaaed_mpalmeos VALUES (NULL, "Kihvka", 4, "Puuma", 3);

INSERT INTO loomaaed_mpalmeos (puur, nimi, liik, vanus) VALUES (4, "Pätu", "Naarits", 1);

INSERT INTO loomaaed_mpalmeos (nimi, vanus, liik, puur) VALUES
    ("Arma", 5, "Puuma", 3),
	("Simon", 2, "Kilpkonn", 4),
	("Joss", 6, "Lõvi", 2);

#3
SELECT nimi, puur FROM loomaaed_mpalmeos WHERE puur=3;

SELECT max(vanus) as vanim , min(vanus) as noorim from loomaaed_mpalmeos;

SELECT puur, count(*) as loomade_arv FROM loomaaed_mpalmeos GROUP BY puur;

UPDATE loomaaed_mpalmeos SET vanus=vanus+1;