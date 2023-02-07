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

insert into objet values(default,1,3,'harry_potter','',);
insert into objet values(default,2,4,'Maigret','',);
insert into objet values(default,3,1,'dune','',);

insert into objet values(default,3,1,'ordinateur','',);
insert into objet values(default,3,1,'souris','',);
insert into objet values(default,3,1,'Unité_central','',);

insert into photoObj values();
insert into photoObj values();
insert into photoObj values();

insert into takalo values();
insert into takalo values();
insert into takalo values();