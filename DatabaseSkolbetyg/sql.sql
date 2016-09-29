mysql -u root
create database Betyg;
use Betyg;
create table Elev(
	ID integer not null auto_increment primary key,
	Namn varchar(50),
	Efternamn varchar(50),
	Klass varchar(20)
);
create table Forelder(
	ID integer not null auto_increment primary key,
	Namn varchar(50),
	Efternamn varchar(50),
	Adress varchar(50),
	Epost varchar(50),
	Telefon integer
);
create table ElevForelder(
	idElev integer,
	idForelder integer
);
create table Amne(
	ID integer not null auto_increment primary key,
	Namn varchar(50)
);
create table ElevAmne(
	idElev integer,
	idAmne integer,
	Betyg char(1)
);

insert into Elev values(0, 'Filip', 'Almstedt','TE14');
insert into Amne values(0,'Engelska');
insert into ElevAmne values (1,1,'F');

insert into Elev values(0, 'Edvin', 'Bergström','TE14');
insert into Elev values(0, 'Robin', 'Boregrim','TE14');
insert into Elev values(0, 'Alexander', 'Ljungberg','TE14');
insert into Elev values(0, 'Felix', 'Fernström','TE14');

insert into Forelder VALUES(0,'FilipsMamma', 'Almstedt', 'Nåntingvägen 22', 'Mamma@Ahlmstedt.se','123');

insert into ElevForelder VALUES(2,1);




Random generated values
Elev
INSERT INTO `Elev` (`ID`,`Namn`,`Efternamn`,`Klass`) VALUES (8,"Kalia","Downs","5130"),(9,"Camille","Irwin","54675"),(10,"Rogan","Padilla","377923"),(11,"Grady","Battle","94325"),(12,"Gail","Peck","4300"),(13,"Oprah","Witt","7793"),(14,"Hyatt","Pace","559786"),(15,"Phoebe","Jordan","59390"),(16,"Shafira","Mcintyre","65195"),(17,"Baxter","Dixon","82987");
INSERT INTO `Elev` (`ID`,`Namn`,`Efternamn`,`Klass`) VALUES (18,"Cheryl","Walsh","30719"),(19,"Regina","Hinton","50150"),(20,"Abraham","Hood","01691"),(21,"Brock","Hale","T3U 3QF"),(22,"Quinn","Burke","722306"),(23,"Ciara","Wade","00291"),(24,"Sonia","Sampson","99201"),(25,"Aileen","Hayden","91464"),(26,"Gareth","Carson","32169"),(27,"Jada","Duncan","S6C 1XY");
INSERT INTO `Elev` (`ID`,`Namn`,`Efternamn`,`Klass`) VALUES (28,"Shelley","Donaldson","87572"),(29,"Cathleen","Larson","66032"),(30,"Slade","Thornton","V7E 3W2"),(31,"Keiko","Sharp","SV8 8MF"),(32,"Blair","Vance","E60 6GB"),(33,"Kelly","Sanders","09031-735"),(34,"Adrian","Wilkerson","647398"),(35,"Zachary","Bradshaw","65361"),(36,"Celeste","Avery","9094"),(37,"Wallace","Watkins","S2P 6B3");
INSERT INTO `Elev` (`ID`,`Namn`,`Efternamn`,`Klass`) VALUES (38,"Amery","Garrett","2148"),(39,"Carolyn","Hale","161424"),(40,"Dalton","Wilkerson","5149"),(41,"Chantale","Tate","K8M 6M1"),(42,"Whilemina","Barlow","CO8M 8VN"),(43,"Aileen","Garrison","7943"),(44,"Dara","Bradley","6317"),(45,"Madeline","Mcmillan","4464ZY"),(46,"Aladdin","Vance","38-011"),(47,"Bruno","Klein","66242");
INSERT INTO `Elev` (`ID`,`Namn`,`Efternamn`,`Klass`) VALUES (48,"Gregory","Flowers","11918"),(49,"Gretchen","Ball","8966ZL"),(50,"Briar","Dominguez","957448"),(51,"Lesley","Rosa","08-797"),(52,"Clementine","Haley","129524"),(53,"Tucker","Nash","75333"),(54,"Tate","Watson","2985"),(55,"Kylynn","Burnett","8875"),(56,"Graham","Hines","8343AF"),(57,"Declan","Reeves","92303");
INSERT INTO `Elev` (`ID`,`Namn`,`Efternamn`,`Klass`) VALUES (58,"Laith","Robinson","X6A 8B5"),(59,"Melanie","Walker","442771"),(60,"Blair","Walton","600591"),(61,"Olympia","Morton","60080"),(62,"Quail","Bradshaw","70799"),(63,"Laurel","Gay","F08 5SQ"),(64,"Dacey","Hopper","09-690"),(65,"Daria","Velez","6531"),(66,"Patricia","Hicks","73785"),(67,"Reagan","Petersen","5455");
INSERT INTO `Elev` (`ID`,`Namn`,`Efternamn`,`Klass`) VALUES (68,"Carla","Hester","2339"),(69,"Herman","Dalton","3258"),(70,"Jeanette","Nichols","9309"),(71,"Zachary","Diaz","278768"),(72,"Nadine","Robertson","30816"),(73,"Mara","Freeman","76305"),(74,"Nissim","Kennedy","7968"),(75,"Hammett","Reynolds","3545"),(76,"Samuel","Maldonado","99653"),(77,"Kiara","Woods","23643-826");
INSERT INTO `Elev` (`ID`,`Namn`,`Efternamn`,`Klass`) VALUES (78,"Britanney","Miranda","273527"),(79,"Jana","Goff","8227ZE"),(80,"Jamal","Battle","864717"),(81,"Lani","Turner","HN6 6FP"),(82,"Caesar","Davis","5839"),(83,"Rooney","Miles","FJ8S 7SM"),(84,"Timothy","Buckley","15672-983"),(85,"Jonah","Sears","29992"),(86,"Colton","Slater","63061"),(87,"Echo","Kelly","81109");
INSERT INTO `Elev` (`ID`,`Namn`,`Efternamn`,`Klass`) VALUES (88,"Tarik","Blair","4160"),(89,"Stacy","Ferrell","657297"),(90,"Amal","Goodman","9049BB"),(91,"Glenna","Goodman","86932"),(92,"Serena","Bass","188028"),(93,"Rosalyn","Porter","51304"),(94,"Cassady","Evans","8430"),(95,"Alexander","Langley","MR9A 7LL"),(96,"Geraldine","Buchanan","595199"),(97,"Idona","Vaughan","73373");
INSERT INTO `Elev` (`ID`,`Namn`,`Efternamn`,`Klass`) VALUES (98,"Nero","Hansen","B8Z 2J4"),(99,"Finn","Powell","9040FQ"),(100,"Mariko","Brewer","8466"),(101,"Cullen","Kerr","34206"),(102,"Tyler","Haynes","571488"),(103,"Stuart","Knox","03-836"),(104,"Maggie","Preston","78769"),(105,"Paula","Vance","2496"),(106,"Elizabeth","Weeks","C7T 0R4"),(107,"Amelia","Marshall","9958");

Forelder
INSERT INTO `Forelder` (`ID`,`Namn`,`Efternamn`,`Adress`,`Epost`,`Telefon`) VALUES (2,"Yardley","Kerr","P.O. Box 483, 8161 Ligula. Ave","facilisis.magna.tellus@rutrum.net","01 68 85 90 98"),(3,"Gray","Vance","420-998 Elementum, Av.","in.molestie.tortor@molestiearcuSed.ca","07 25 26 10 97"),(4,"Gail","Daniels","Ap #393-812 Nisl. Street","est@nulla.co.uk","08 43 76 17 75"),(5,"Dakota","Casey","Ap #276-6614 Adipiscing Av.","natoque@utmolestiein.net","01 66 87 52 76"),(6,"Hammett","Phelps","P.O. Box 414, 1523 Ligula. St.","mattis.Cras@mollis.org","05 58 15 69 48"),(7,"Amery","Patrick","6302 Mauris Rd.","hendrerit@risusNulla.ca","05 49 78 95 88"),(8,"Martha","Drake","P.O. Box 563, 8634 Erat. St.","molestie.in@eratvolutpat.ca","09 71 87 82 00"),(9,"Emmanuel","Harvey","755-3247 Nunc Av.","id.ante@purusMaecenas.com","07 81 38 28 48"),(10,"Armand","Travis","469-6219 Ultricies Street","euismod.et@ornareelitelit.ca","07 83 09 29 47"),(11,"Kiona","Lowe","161-5893 Mollis Rd.","nibh.dolor.nonummy@neque.org","07 71 48 77 74");
INSERT INTO `Forelder` (`ID`,`Namn`,`Efternamn`,`Adress`,`Epost`,`Telefon`) VALUES (12,"Calvin","Hoover","Ap #471-7659 Malesuada Street","feugiat.Sed@arcuVestibulumut.net","02 02 94 40 94"),(13,"Marny","Hutchinson","P.O. Box 184, 4924 Sed Rd.","aliquam.adipiscing.lacus@metusfacilisis.edu","07 34 46 70 05"),(14,"Gretchen","Farrell","Ap #344-5994 Aliquet, Rd.","Sed.id@ornarelibero.edu","05 18 61 81 53"),(15,"Fredericka","Munoz","9662 Amet Road","amet.dapibus@vitaesemper.net","08 17 74 47 60"),(16,"Basil","Hooper","Ap #679-3843 Auctor, Rd.","dui@Proinegetodio.co.uk","06 24 52 97 76"),(17,"Garrison","Vincent","P.O. Box 319, 6150 Mus. Ave","lorem@vitae.co.uk","04 66 40 05 03"),(18,"Xyla","Stuart","P.O. Box 613, 8742 Diam Rd.","dui.in.sodales@rhoncusProin.edu","05 40 12 80 85"),(19,"Camden","Fitzgerald","855-3965 Sollicitudin Rd.","at.augue@enimNunc.edu","05 94 27 08 61"),(20,"Signe","Ashley","P.O. Box 770, 4449 Enim. Ave","Sed.molestie@cubilia.ca","09 98 48 16 51"),(21,"Medge","Coffey","9730 Metus. Rd.","et.magnis@Nam.org","01 16 69 69 08");
INSERT INTO `Forelder` (`ID`,`Namn`,`Efternamn`,`Adress`,`Epost`,`Telefon`) VALUES (22,"Erica","Mason","Ap #733-680 Metus. St.","magna@et.com","05 51 42 41 18"),(23,"Bert","Glass","138-5345 Ut Rd.","lorem.vehicula.et@faucibusleo.ca","02 24 34 67 73"),(24,"Olivia","David","Ap #991-4953 In St.","sagittis.felis.Donec@Nam.net","09 64 50 82 72"),(25,"Heidi","Olson","P.O. Box 956, 6875 Quis, Street","id.libero.Donec@orciPhasellusdapibus.ca","09 81 01 40 51"),(26,"Emily","Christian","1402 Ligula St.","Cras.eget@vitae.edu","03 16 08 23 86"),(27,"Valentine","Bridges","2035 Et Rd.","at.egestas.a@acorciUt.com","03 30 42 55 98"),(28,"Ainsley","Hensley","840 Dui, Avenue","Sed@interdum.org","01 94 98 77 65"),(29,"Yeo","Chambers","Ap #748-871 Sed Ave","purus.sapien@cursusa.com","05 45 91 88 64"),(30,"William","Finch","P.O. Box 418, 2108 Pede. Rd.","nibh.Donec.est@laciniaorciconsectetuer.net","01 36 03 14 09"),(31,"Thor","Faulkner","P.O. Box 777, 3382 Vel, St.","ullamcorper.magna@molestiedapibusligula.net","02 55 37 24 56");
INSERT INTO `Forelder` (`ID`,`Namn`,`Efternamn`,`Adress`,`Epost`,`Telefon`) VALUES (32,"Phelan","Harrell","Ap #594-7093 Erat, Rd.","tellus.Phasellus.elit@felisorci.co.uk","04 64 58 14 56"),(33,"Cullen","Montgomery","223-8776 Mauris Rd.","tempor@Fuscefermentumfermentum.net","05 30 84 69 76"),(34,"Vernon","Gibson","P.O. Box 878, 7747 Ornare Ave","Aliquam.fringilla@eliteratvitae.net","01 91 82 59 31"),(35,"Avye","Rios","197-9056 Aliquet. Avenue","elit.Aliquam.auctor@egetnisidictum.edu","06 63 04 91 71"),(36,"Kelsey","Meadows","6430 Quam Rd.","Nulla.interdum@erat.edu","08 86 12 62 57"),(37,"Winifred","Lambert","144-4668 Egestas. Road","ultrices.posuere@nuncsitamet.edu","03 49 56 73 92"),(38,"Orlando","Mccullough","808-6993 Hendrerit Rd.","Curabitur@fermentumarcu.net","02 64 30 09 72"),(39,"Flavia","Hodges","776-1822 Mus. Av.","blandit.mattis@dolornonummyac.edu","05 06 60 87 46"),(40,"Beverly","William","526-3005 Dui. Av.","at.sem@Duisvolutpat.com","03 15 91 44 14"),(41,"April","Horn","922-2062 Nibh Av.","id.blandit.at@tortor.ca","06 14 99 59 30");
INSERT INTO `Forelder` (`ID`,`Namn`,`Efternamn`,`Adress`,`Epost`,`Telefon`) VALUES (42,"Stewart","Noble","Ap #671-7562 Integer St.","in@vitaemauris.ca","04 36 18 01 00"),(43,"Adena","Nichols","P.O. Box 521, 8366 At, Ave","euismod@felis.co.uk","04 95 91 97 68"),(44,"Nerea","Carey","P.O. Box 309, 1846 Enim. St.","bibendum.sed.est@metusAliquamerat.co.uk","06 70 12 13 04"),(45,"Charissa","Norman","Ap #221-5188 Sem Av.","Duis.ac.arcu@euodio.ca","03 86 79 57 31"),(46,"Zachery","Newton","2927 Commodo Rd.","vitae@necanteMaecenas.co.uk","04 41 73 92 29"),(47,"Zoe","Reid","319-569 Vitae Ave","at@risusNulla.net","09 04 41 10 62"),(48,"Rajah","Galloway","2234 Dolor Rd.","vel.venenatis.vel@Cum.co.uk","04 75 43 98 92"),(49,"Austin","Gibbs","P.O. Box 676, 5045 Justo St.","Morbi.vehicula@Nullainterdum.edu","05 01 40 01 45"),(50,"Aileen","Barrett","5858 Nullam Avenue","nibh.vulputate@ultriciesligula.ca","01 20 43 27 60"),(51,"Russell","Sykes","147-1594 Sed Street","facilisis@Utnecurna.co.uk","03 89 92 63 90");
INSERT INTO `Forelder` (`ID`,`Namn`,`Efternamn`,`Adress`,`Epost`,`Telefon`) VALUES (52,"Iris","Macias","7072 Nec, Rd.","malesuada@massaIntegervitae.edu","07 87 46 51 04"),(53,"Virginia","Mcgee","5888 Maecenas Rd.","nunc.interdum@Donecnibh.net","09 61 13 89 28"),(54,"Rina","Cline","631-1263 Nam St.","Aenean@idliberoDonec.ca","08 99 37 21 74"),(55,"Quinn","Randolph","836-6744 Pellentesque Avenue","Maecenas@massa.org","05 44 06 13 64"),(56,"Selma","Hewitt","Ap #553-5575 Magna. Avenue","Integer.urna.Vivamus@non.com","07 47 27 94 75"),(57,"Jane","Buckner","7876 Ultricies Ave","enim.Curabitur.massa@ultricesa.org","03 26 26 30 46"),(58,"Miriam","Graham","257-5702 Aliquam Ave","placerat@odiosagittis.ca","08 15 04 70 57"),(59,"Halee","Guy","703-5859 In Avenue","risus.varius@luctusfelispurus.co.uk","08 44 50 85 27"),(60,"Burke","Zamora","P.O. Box 716, 6241 Laoreet, Street","Cras@nunc.edu","08 74 87 85 70"),(61,"Delilah","Pena","688-4824 Purus Street","gravida.sagittis.Duis@Crasvehicula.ca","01 16 83 97 02");
INSERT INTO `Forelder` (`ID`,`Namn`,`Efternamn`,`Adress`,`Epost`,`Telefon`) VALUES (62,"Elijah","Anderson","114-716 Dignissim. Rd.","ante@turpisAliquamadipiscing.co.uk","04 76 54 36 18"),(63,"Amal","Contreras","706-183 Ultrices. Rd.","pede.nonummy.ut@posuerecubilia.co.uk","09 99 17 75 61"),(64,"Rooney","Cherry","385-6054 Duis Ave","lacus.Etiam@massa.co.uk","05 03 44 66 10"),(65,"Daquan","Howell","Ap #313-4629 Adipiscing, St.","est.Nunc.laoreet@ligulaNullam.co.uk","08 27 30 43 98"),(66,"Reagan","Larsen","258-3996 Lorem Avenue","velit.Pellentesque@risus.edu","07 98 31 46 40"),(67,"Amal","Preston","240-2471 Elit Road","felis@Pellentesquetincidunt.edu","06 61 59 79 43"),(68,"Uta","Gallegos","7009 Tincidunt Av.","adipiscing.elit.Etiam@arcuvelquam.ca","05 23 40 83 08"),(69,"Kiara","Holloway","6373 A Road","auctor.quis@Praesentinterdum.co.uk","09 15 08 65 29"),(70,"Dorian","Moses","Ap #939-318 Commodo St.","at@Vivamus.co.uk","06 19 31 17 72"),(71,"TaShya","Schmidt","Ap #967-7317 Tincidunt St.","Fusce@Maecenas.edu","07 93 75 55 25");
INSERT INTO `Forelder` (`ID`,`Namn`,`Efternamn`,`Adress`,`Epost`,`Telefon`) VALUES (72,"Rhea","Reyes","Ap #723-440 Rutrum Rd.","lobortis.risus@Vestibulumanteipsum.co.uk","01 63 16 99 85"),(73,"Abra","Kelley","893-4619 Curae; Rd.","Nulla@orciUtsemper.org","01 80 45 62 29"),(74,"Autumn","Barnes","P.O. Box 727, 4410 Vivamus St.","Curae@etmalesuada.com","03 05 78 88 86"),(75,"Rhonda","Palmer","651-3660 Adipiscing Av.","vitae.orci.Phasellus@pellentesque.co.uk","08 51 20 28 04"),(76,"Lionel","Ruiz","6278 Iaculis Rd.","cubilia@Maurisnon.org","09 26 30 43 73"),(77,"Miriam","Blankenship","252-4143 Sed St.","eros@magnisdisparturient.ca","03 35 61 15 26"),(78,"Logan","Watson","629-2836 Curabitur Ave","libero.Proin@auctorullamcorper.org","09 72 28 82 26"),(79,"Ariel","Craig","Ap #787-8879 Ut Rd.","Vivamus.nibh.dolor@sapien.net","02 16 93 83 13"),(80,"Jermaine","Hurst","P.O. Box 425, 8352 Nonummy Rd.","ipsum.Curabitur@adipiscing.co.uk","07 95 58 47 44"),(81,"Nathaniel","Noel","Ap #342-8721 Interdum Ave","dolor.Fusce.feugiat@eu.edu","01 98 42 33 43");
INSERT INTO `Forelder` (`ID`,`Namn`,`Efternamn`,`Adress`,`Epost`,`Telefon`) VALUES (82,"Neil","Dominguez","362-9473 Adipiscing Street","senectus.et.netus@maurisSuspendisse.org","03 20 18 52 51"),(83,"Elvis","Talley","Ap #470-2026 Vehicula St.","nonummy.ut@erat.com","08 85 01 35 71"),(84,"Zenaida","Wilkinson","Ap #447-6918 Odio. Road","ac.feugiat.non@adipiscingelitEtiam.ca","09 77 95 39 95"),(85,"Larissa","Franks","P.O. Box 501, 9076 Sagittis Road","tristique.senectus@faucibus.org","04 01 67 34 45"),(86,"Omar","Bryant","Ap #566-1999 Sed Street","tellus.Aenean.egestas@interdumligulaeu.com","09 89 19 43 77"),(87,"Austin","Mcclure","Ap #447-7715 Aliquet Street","at@NulladignissimMaecenas.co.uk","01 89 80 90 99"),(88,"Keith","Horton","P.O. Box 884, 9109 Est Rd.","tempor.augue@Nuncsedorci.net","07 23 62 42 57"),(89,"Basia","Houston","552-4710 Nunc. Av.","dictum@SuspendissesagittisNullam.net","01 76 29 80 97"),(90,"Gray","Justice","337-9290 Consectetuer Rd.","et@atsem.ca","02 76 73 22 18"),(91,"Dalton","Pollard","P.O. Box 377, 8595 Nisl. Road","tellus@eueleifend.net","05 23 95 17 87");
INSERT INTO `Forelder` (`ID`,`Namn`,`Efternamn`,`Adress`,`Epost`,`Telefon`) VALUES (92,"Hyatt","Middleton","728-4748 Quisque Street","viverra.Donec.tempus@laoreet.ca","02 35 49 68 01"),(93,"Buckminster","Gordon","3147 Vehicula St.","semper.erat@Donecluctusaliquet.com","08 28 90 65 62"),(94,"Mark","Bentley","919-4336 Sem Av.","Lorem@scelerisque.ca","07 32 04 36 52"),(95,"Anika","English","Ap #310-5086 Elit. Road","convallis.ante@sedhendrerit.co.uk","04 69 04 24 29"),(96,"Katelyn","Contreras","3330 Vitae, Street","nunc@posuerecubilia.edu","09 39 32 06 08"),(97,"Nita","Anthony","740-6878 Vitae, Street","id@Donectemporest.com","04 32 02 36 17"),(98,"Indigo","Leblanc","Ap #602-3346 Arcu. Rd.","consectetuer.cursus.et@elitAliquamauctor.co.uk","06 28 26 48 16"),(99,"Amaya","Scott","P.O. Box 983, 3042 Accumsan Avenue","ante@ullamcorpernisl.edu","01 86 76 17 13"),(100,"Branden","Hays","863-6346 Curabitur Rd.","luctus.et.ultrices@dictum.net","07 37 72 10 98"),(101,"Adrienne","Lowe","706-7084 Ac, Road","accumsan.convallis.ante@CurabiturdictumPhasellus.org","05 11 09 22 49");

ElevForelder
INSERT INTO `ElevForelder` (`idElev`,`idForelder`) VALUES (1,91),(2,75),(3,74),(4,3),(5,5),(6,63),(7,74),(8,101),(9,70),(10,99);
INSERT INTO `ElevForelder` (`idElev`,`idForelder`) VALUES (11,35),(12,90),(13,3),(14,28),(15,40),(16,101),(17,24),(18,74),(19,92),(20,88);
INSERT INTO `ElevForelder` (`idElev`,`idForelder`) VALUES (21,19),(22,44),(23,32),(24,30),(25,32),(26,93),(27,14),(28,20),(29,51),(30,12);
INSERT INTO `ElevForelder` (`idElev`,`idForelder`) VALUES (31,100),(32,35),(33,93),(34,62),(35,40),(36,55),(37,85),(38,1),(39,65),(40,95);
INSERT INTO `ElevForelder` (`idElev`,`idForelder`) VALUES (41,13),(42,102),(43,42),(44,39),(45,58),(46,20),(47,43),(48,101),(49,91),(50,44);
INSERT INTO `ElevForelder` (`idElev`,`idForelder`) VALUES (51,7),(52,21),(53,78),(54,80),(55,49),(56,91),(57,92),(58,42),(59,52),(60,12);
INSERT INTO `ElevForelder` (`idElev`,`idForelder`) VALUES (61,80),(62,27),(63,66),(64,30),(65,69),(66,45),(67,33),(68,75),(69,51),(70,31);
INSERT INTO `ElevForelder` (`idElev`,`idForelder`) VALUES (71,100),(72,5),(73,42),(74,3),(75,78),(76,64),(77,12),(78,75),(79,34),(80,13);
INSERT INTO `ElevForelder` (`idElev`,`idForelder`) VALUES (81,17),(82,55),(83,76),(84,83),(85,33),(86,93),(87,45),(88,45),(89,46),(90,107);
INSERT INTO `ElevForelder` (`idElev`,`idForelder`) VALUES (91,18),(92,46),(93,93),(94,91),(95,57),(96,41),(97,40),(98,1),(99,66),(100,47);

Amne
INSERT INTO `Amne` (`ID`,`Namn`) VALUES (1,"Lyrica"),(2,"Amlodipine Besylate"),(3,"Ibuprofen (Rx)"),(4,"Simvastatin"),(5,"Lidoderm"),(6,"Vitamin D (Rx)"),(7,"Lovaza"),(8,"Vytorin"),(9,"Bystolic"),(10,"Atenolol");
INSERT INTO `Amne` (`ID`,`Namn`) VALUES (11,"Cephalexin"),(12,"Levaquin"),(13,"Lidoderm"),(14,"Potassium Chloride"),(15,"Carvedilol"),(16,"Amlodipine Besylate"),(17,"Crestor"),(18,"Viagra"),(19,"Actos"),(20,"Citalopram HBR");
INSERT INTO `Amne` (`ID`,`Namn`) VALUES (21,"Crestor"),(22,"Trazodone HCl"),(23,"Lipitor"),(24,"TriNessa"),(25,"Gabapentin"),(26,"Zetia"),(27,"Symbicort"),(28,"Fluticasone Propionate"),(29,"Simvastatin"),(30,"Gabapentin");
INSERT INTO `Amne` (`ID`,`Namn`) VALUES (31,"Spiriva Handihaler"),(32,"Oxycodone/APAP"),(33,"Fluticasone Propionate"),(34,"Omeprazole (Rx)"),(35,"Lidoderm"),(36,"Risperidone"),(37,"Spiriva Handihaler"),(38,"Zolpidem Tartrate"),(39,"Oxycodone HCl"),(40,"Omeprazole (Rx)");
INSERT INTO `Amne` (`ID`,`Namn`) VALUES (41,"Lidoderm"),(42,"Metoprolol Succinate"),(43,"Glyburide"),(44,"Metformin HCl"),(45,"Ciprofloxacin HCl"),(46,"Fluticasone Propionate"),(47,"Ciprofloxacin HCl"),(48,"APAP/Codeine"),(49,"Lisinopril"),(50,"Famotidine");
INSERT INTO `Amne` (`ID`,`Namn`) VALUES (51,"Amphetamine Salts"),(52,"Hydrocodone/APAP"),(53,"Doxycycline Hyclate"),(54,"Omeprazole (Rx)"),(55,"Vyvanse"),(56,"Atenolol"),(57,"Zolpidem Tartrate"),(58,"Glyburide"),(59,"Cephalexin"),(60,"Levoxyl");
INSERT INTO `Amne` (`ID`,`Namn`) VALUES (61,"Diovan HCT"),(62,"Warfarin Sodium"),(63,"Vyvanse"),(64,"Prednisone"),(65,"Prednisone"),(66,"Atenolol"),(67,"Ibuprofen (Rx)"),(68,"Lisinopril"),(69,"Gabapentin"),(70,"Hydrocodone/APAP");
INSERT INTO `Amne` (`ID`,`Namn`) VALUES (71,"Furosemide"),(72,"Flovent HFA"),(73,"Vyvanse"),(74,"Alprazolam"),(75,"Furosemide"),(76,"Lovaza"),(77,"Fluoxetine HCl"),(78,"Lisinopril"),(79,"Zetia"),(80,"Triamcinolone Acetonide");
INSERT INTO `Amne` (`ID`,`Namn`) VALUES (81,"Benicar HCT"),(82,"Prednisone"),(83,"Potassium Chloride"),(84,"Metformin HCl"),(85,"Cyclobenzaprin HCl"),(86,"Loestrin 24 Fe"),(87,"Venlafaxine HCl ER"),(88,"Ibuprofen (Rx)"),(89,"Azithromycin"),(90,"Simvastatin");
INSERT INTO `Amne` (`ID`,`Namn`) VALUES (91,"Amphetamine Salts"),(92,"Metformin HCl"),(93,"Lexapro"),(94,"Naproxen"),(95,"Zolpidem Tartrate"),(96,"Prednisone"),(97,"Vitamin D (Rx)"),(98,"Diovan"),(99,"Tricor"),(100,"Tramadol HCl");

ElevAmne
INSERT INTO `ElevAmne` (`idElev`,`idAmne`,`Betyg`) VALUES (16,82,"-"),(49,80,"F"),(72,42,"-"),(93,36,"E"),(22,17,"C"),(9,46,"D"),(34,72,"B"),(28,67,"E"),(89,28,"-"),(19,40,"F");
INSERT INTO `ElevAmne` (`idElev`,`idAmne`,`Betyg`) VALUES (57,88,"D"),(14,94,"F"),(37,18,"A"),(83,78,"C"),(69,51,"A"),(81,36,"E"),(56,95,"A"),(50,9,"A"),(94,49,"-"),(39,92,"-");
INSERT INTO `ElevAmne` (`idElev`,`idAmne`,`Betyg`) VALUES (54,77,"C"),(5,4,"B"),(68,35,"-"),(19,16,"B"),(88,50,"F"),(54,33,"A"),(11,10,"D"),(106,17,"F"),(39,23,"D"),(48,21,"E");
INSERT INTO `ElevAmne` (`idElev`,`idAmne`,`Betyg`) VALUES (68,8,"C"),(55,67,"B"),(77,28,"A"),(78,53,"A"),(92,65,"-"),(31,92,"B"),(47,84,"F"),(58,1,"C"),(62,19,"-"),(101,59,"B");
INSERT INTO `ElevAmne` (`idElev`,`idAmne`,`Betyg`) VALUES (53,69,"-"),(53,83,"-"),(101,3,"F"),(103,68,"F"),(34,39,"F"),(82,23,"-"),(44,87,"-"),(76,43,"F"),(14,73,"E"),(58,59,"F");
INSERT INTO `ElevAmne` (`idElev`,`idAmne`,`Betyg`) VALUES (21,45,"B"),(75,84,"A"),(17,60,"C"),(2,55,"E"),(23,22,"C"),(34,64,"C"),(104,29,"F"),(33,36,"D"),(5,25,"A"),(20,43,"-");
INSERT INTO `ElevAmne` (`idElev`,`idAmne`,`Betyg`) VALUES (66,22,"C"),(104,26,"B"),(13,32,"A"),(16,46,"E"),(35,61,"C"),(71,39,"-"),(102,77,"F"),(29,3,"D"),(68,96,"B"),(70,66,"B");
INSERT INTO `ElevAmne` (`idElev`,`idAmne`,`Betyg`) VALUES (60,60,"-"),(100,37,"-"),(95,97,"B"),(1,44,"A"),(84,51,"B"),(74,86,"D"),(9,47,"D"),(44,91,"-"),(39,2,"C"),(36,24,"A");
INSERT INTO `ElevAmne` (`idElev`,`idAmne`,`Betyg`) VALUES (89,78,"A"),(72,14,"F"),(7,1,"A"),(52,20,"F"),(70,92,"C"),(105,57,"-"),(38,70,"A"),(40,99,"-"),(93,13,"F"),(94,89,"-");
INSERT INTO `ElevAmne` (`idElev`,`idAmne`,`Betyg`) VALUES (66,49,"D"),(59,76,"A"),(6,42,"A"),(77,65,"C"),(75,78,"-"),(82,66,"D"),(63,14,"A"),(54,84,"-"),(2,93,"B"),(13,68,"D");
