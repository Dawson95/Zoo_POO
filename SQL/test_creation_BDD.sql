CREATE table zoo (
    idZoo int(11) NOT NULL auto_increment,
    nbrAnimal int(11) DEFAULT 0,
    name varchar(100) DEFAULT NULL,
    PRIMARY KEY (idZoo),
    UNIQUE KEY idZoo (idZoo)
) ENGINE=InnoDB;

CREATE table Enclosures(
idEnclosure int(11) NOT NULL AUTO_INCREMENT,
animalSize int(11) DEFAULT 0,
enclosureSize int(11) NOT NULL,
environnement varchar(100) DEFAULT NULL,
vacant bit DEFAULT 1,
nbrAnimals int(11) DEFAULT 0,
idZoo int(11) NOT NULL,

PRIMARY KEY (idEnclosure),
CONSTRAINT FK_Enclosure_Zoo
FOREIGN KEY (idZoo)
REFERENCES Zoo (idZoo)
) ENGINE=InnoDB;

CREATE table animals(
    idAnimal int(11) NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    age DATE NOT NULL,
    species varchar(100) NOT NULL,
    entryDate DATE NOT NULL,
    gender varchar(100) NOT NULL,
    iDParent int(11) DEFAULT NULL,
    photo varchar(255) DEFAULT NULL,
    diet varchar(100) NOT NULL,
    treatment varchar(100) NOT NULL,
    environnement varchar(100) NOT NULL,
    deathDate DATE NOT NULL,
    informations varchar(255),
    idFavHealer int(11) DEFAULT NULL,
    idEnclosure int(11) DEFAULT NULL,
    PRIMARY KEY (idAnimal),
    UNIQUE KEY idAnimal (idAnimal),
    CONSTRAINT FK_Animals_Enclosure
    FOREIGN KEY (idEnclosure)
    REFERENCES Enclosures (idEnclosure)
    ) ENGINE=InnoDB;

    CREATE table healers(
        idHealer int(11) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        firstName varchar(100) NOT NULL,
        entryDate DATE NOT NULL,
        gender varchar(100) NOT NULL,
        phoneNumber int(11) DEFAULT NULL,
        mail varchar(100) DEFAULT NULL,
        photo varchar(255) DEFAULT NULL,
        speciality varchar(100) NOT NULL,
        maxEnclosures int(11) DEFAULT 0,
        managerID int(11) DEFAULT NULL,
        exitDate DATE DEFAULT NULL,
        informations varchar(255),
        PRIMARY KEY (idHealer),
        UNIQUE KEY idHealer (idHealer)

        
        

    ) ENGINE=InnoDB;

    CREATE table healersAnimal(
        idHealer int(11) NOT NULL,
        idAnimal int(11) NOT NULL,
        PRIMARY KEY (idHealer,idAnimal),
        CONSTRAINT FK_healersAnimal_Animal
        FOREIGN KEY (idAnimal)
        REFERENCES animals (idAnimal),
        CONSTRAINT FK_healersAnimal_healers
        FOREIGN KEY (idHealer)
        REFERENCES healers (idHealer)
        
    )ENGINE=InnoDB;

