CREATE TABLE personne (
    idPers int PRIMARY KEY auto_increment,
    nomPers varchar(50),
    email varchar(50),
    pwd varchar(50),
    isAdmin boolean
);

CREATE TABLE categories (
    idCat int PRIMARY KEY auto_increment,
    nomCat varchar(50)
);

CREATE TABLE objet(
    idObjet int PRIMARY KEY auto_increment,
    idPers int,
    idCat int,
    nomObj varchar(50),
    description varchar(100),
    prixObj float ,
    foreign key (idPers) references personne(idPers),
    foreign key (idCat) references categories(idCat)
);

CREATE TABLE photoObj(
    idPhotoObj int PRIMARY KEY auto_increment,
    idObjet int,
    nomPhoto varchar(50),
    foreign key (idObjet) references objet(idObjet)
);

CREATE TABLE takalo(
    idTakalo int PRIMARY KEY auto_increment,
    idAlefa int,
    idAlaina int,
    isTakalo boolean,
    foreign key (idAlefa) references objet(idObjet),
    foreign key (idAlaina) references objet(idObjet)
);

insert into personne values(default,'Toky','toky@gmail.com','toky',1);
insert into personne values(default,'Judi','judi@gmail.com','judi',0);
insert into personne values(default,'Mirindra','mirindra@gmail.com','mirindra',0);

insert into categories values(default,'Autre');
insert into categories values(default,'Akanjo');
insert into categories values(default,'Accessoires');
insert into categories values(default,'Boky');
insert into categories values(default,'High_tech');

insert into objet values(default,2,1,'jean','pantalon à couture',150000);
insert into objet values(default,2,1,'polo','vetement haut',100000);
insert into objet values(default,3,1,'jogging','confortable et chaud',200000);

insert into objet values(default,3,1,'lunettes','filtration de lumière',75000);
insert into objet values(default,2,1,'casquette','à proteger la tête du soleil',50000);
insert into objet values(default,3,1,'montre','dispositif mécanique',200000);

insert into objet values(default,2,1,'harry_potter','Harry potter à l ecole des sorciers',100000);
insert into objet values(default,2,1,'Maigret','un roman policier de Georges Simenon',75000);
insert into objet values(default,3,1,'dune','un roman de science-fiction ',75000);

insert into objet values(default,3,1,'ordinateur','système de traitement de l information programmable',2000000);
insert into objet values(default,2,1,'souris','dispositif de pointage pour ordinateur',200000);
insert into objet values(default,3,1,'Unite_central','le boitier contenant tout le matériel électronique ',1000000);

insert into photoObj values(default,1,'jean.jpg');
insert into photoObj values(default,2,'polo.jpg');
insert into photoObj values(default,3,'jogging.jpg');

insert into photoObj values(default,4,'lunettes.jpg');
insert into photoObj values(default,5,'casquette.jpg');
insert into photoObj values(default,6,'montre.JPG');

insert into photoObj values(default,7,'harry_potter.jpg');
insert into photoObj values(default,8,'Maigret.jpg');
insert into photoObj values(default,9,'dune.jpg');

insert into photoObj values(default,10,'ordinateur.jpg');
insert into photoObj values(default,11,'souris.jpg');
insert into photoObj values(default,12,'Unite_central.jpg');

insert into takalo values(default, 1, 4, 1);


    select objet.idObjet, objet.nomObj, photoObj.nomPhoto, objet.prixObj, personne.idPers, personne.nomPers
        from objet
        join photoObj on photoObj.idObjet = objet.idObjet
        join personne on personne.idPers = objet.idPers;

-- get proposition
select objectUser.* from objectUser 
    join takalo on takalo.idAlaina = objectUser.idObjet
    where objectUser.idPers = <idUser_session>;

-- update object proprio
update objet set idPers = " " where idObjet = " " ;

-- drop table photoObj cascade;
-- drop table objet cascade;
-- drop table categories cascade;
-- drop table personne cascade;