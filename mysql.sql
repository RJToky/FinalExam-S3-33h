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
    prixObj float 
);

CREATE TABLE photoObj(
    idPhotoObj serial PRIMARY KEY,
    idObjet int,
    nomPhoto varchar(50)
);

CREATE TABLE takalo(
    idTakalo serial PRIMARY KEY,
    idAlefa int,
    idAlaina int, 
    isTakalo boolean
);

ALTER TABLE objet add foreign key (idPers) references personne(idPers);
ALTER TABLE objet add foreign key (idCat) references categories(idCat);
ALTER TABLE photoObj add foreign key (idObjet) references objet(idObjet);

insert into personne values(default,'Toky','toky@gmail.com','toky',null);
insert into personne values(default,'Judi','judi@gmail.com','judi',null);
insert into personne values(default,'Mirindra','mirindra@gmail.com','mirindra',null);


insert into categories values();
insert into categories values();
insert into categories values();

insert into objet values();
insert into objet values();
insert into objet values();

insert into photoObj values();
insert into photoObj values();
insert into photoObj values();

insert into takalo values();
insert into takalo values();
insert into takalo values();