CREATE DATABASE efanakalo;

CREATE TABLE personne (
    idPers serial PRIMARY KEY , 
    nomPers varchar(50),
    email varchar(50),
    pwd varchar(50),
    isAdmin boolean
);

CREATE TABLE categories (
   idCat serial PRIMARY KEY,
   nomCat varchar(50)
);

CREATE TABLE objet(
    idObjet serial PRIMARY KEY,
    idPers int,
    idCat int , 
    nomObj varchar(50),
    description varchar(100),
    prixObj float ,
    foreign key (idPers) references personne(idPers),
    foreign key (idCat) references categories(idCat)
);

CREATE TABLE photoObj(
    idPhotoObj serial PRIMARY KEY,
    idObjet int,
    nomPhoto varchar(50),
    foreign key (idObjet) references objet(idObjet)
);

CREATE TABLE takalo(
    idTakalo serial PRIMARY KEY,
    idAlefa int,
    idAlaina int, 
    isTakalo boolean
);

select photoObj.nomPhoto from photoObj join objet on objet.idObjet = photoObj.idObjet;
select objet.prixObj from objet join personne on personne.nomPers = objet.idObjet;

select objet.nomObj, photoObj.nomPhoto, objet.prixObj, personne.nomPers from objet 
    join photoObj on photoObj.idObjet = objet.idObjet
    join personne on personne.idPers = objet.idPers;

insert into personne values(default,'Toky','toky@gmail.com','toky',0);
insert into personne values(default,'Judi','judi@gmail.com','judi',0);
insert into personne values(default,'Mirindra','mirindra@gmail.com','mirindra',0);


insert into categories values(default,'Akanjo');
insert into categories values(default,'Accessoires');
insert into categories values(default,'Boky');
insert into categories values(default,'High_tech');

insert into objet values(default,1,1,'jean','pantalon à couture',150000);
insert into objet values(default,2,2,'polo','vetement haut',100000);
insert into objet values(default,3,3,'jogging','confortable et chaud',200000);

insert into objet values(default,1,4,'lunettes','filtration de lumière',75000);
insert into objet values(default,2,1,'casquette','à proteger la tête du soleil',50000);
insert into objet values(default,3,2,'montre','dispositif mécanique',200000);

insert into objet values(default,1,3,'harry_potter','Harry potter à l ecole des sorciers',100000);
insert into objet values(default,2,4,'Maigret','un roman policier de Georges Simenon',75000);
insert into objet values(default,3,1,'dune','un roman de science-fiction ',75000);

insert into objet values(default,1,2,'ordinateur','système de traitement de l information programmable',2000000);
insert into objet values(default,2,3,'souris','dispositif de pointage pour ordinateur',200000);
insert into objet values(default,3,4,'Unite_central','le boitier contenant tout le matériel électronique ',1000000);

insert into photoObj values(default,1,'jean.jpg');
insert into photoObj values(default,2,'polo.jpg');
insert into photoObj values(default,3,'jogging.jpg');

insert into photoObj values(default,4,'lunettes.jpg');
insert into photoObj values(default,5,'casquette.jpg');
insert into photoObj values(default,6,'montre.jpg');

insert into photoObj values(default,7,'harry_potter.jpg');
insert into photoObj values(default,8,'Maigret.jpg');
insert into photoObj values(default,9,'dune.jpg');

insert into photoObj values(default,10,'ordinateur.jpg');
insert into photoObj values(default,11,'souris.jpg');
insert into photoObj values(default,12,'Unite_central.jpg');
