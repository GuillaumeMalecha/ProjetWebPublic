<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201019172033 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abus (id INT AUTO_INCREMENT NOT NULL, prevenir_id INT DEFAULT NULL, description VARCHAR(255) NOT NULL, encodage DATETIME NOT NULL, INDEX IDX_72C9FD013CB68627 (prevenir_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bloc (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories_de_services (id INT AUTO_INCREMENT NOT NULL, photo_id INT DEFAULT NULL, description VARCHAR(255) NOT NULL, en_avant TINYINT(1) NOT NULL, nom VARCHAR(255) NOT NULL, valide TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_9C52DB77E9E4C8C (photo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE code_postal (id INT AUTO_INCREMENT NOT NULL, cp VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, rediger_id INT DEFAULT NULL, concerner_id INT DEFAULT NULL, contenu VARCHAR(255) NOT NULL, cote INT NOT NULL, encodage DATETIME NOT NULL, titre VARCHAR(255) NOT NULL, INDEX IDX_67F068BC5158EDA5 (rediger_id), INDEX IDX_67F068BC95131E34 (concerner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commune (id INT AUTO_INCREMENT NOT NULL, commune VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, photo_id INT DEFAULT NULL, logo_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_C53D045F7E9E4C8C (photo_id), INDEX IDX_C53D045FF98F144A (logo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE internautes (id INT NOT NULL, avatar_id INT DEFAULT NULL, newsletter TINYINT(1) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_89B0CF0786383B10 (avatar_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE internaute_bloc (internaute_id INT NOT NULL, bloc_id INT NOT NULL, INDEX IDX_B4CC2BA7CAF41882 (internaute_id), INDEX IDX_B4CC2BA75582E9C0 (bloc_id), PRIMARY KEY(internaute_id, bloc_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE localite (id INT AUTO_INCREMENT NOT NULL, localite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE newsletter (id INT AUTO_INCREMENT NOT NULL, document_pdf LONGBLOB DEFAULT NULL, publication DATETIME NOT NULL, titre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE position (id INT AUTO_INCREMENT NOT NULL, ordre INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prestataire (id INT AUTO_INCREMENT NOT NULL, profil_id INT DEFAULT NULL, e_mail_contact VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, num_tel VARCHAR(255) NOT NULL, num_tva VARCHAR(255) NOT NULL, site_internet VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_60A26480275ED078 (profil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prestataire_categories_de_services (prestataire_id INT NOT NULL, categories_de_services_id INT NOT NULL, INDEX IDX_DAABA598BE3DB2B7 (prestataire_id), INDEX IDX_DAABA5986D74417C (categories_de_services_id), PRIMARY KEY(prestataire_id, categories_de_services_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, offrir_id INT DEFAULT NULL, concerner_id INT DEFAULT NULL, affichage_de DATETIME NOT NULL, affichage_jusque DATETIME NOT NULL, debut DATETIME NOT NULL, description VARCHAR(255) NOT NULL, document_pdf LONGBLOB DEFAULT NULL, fin DATETIME NOT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_C11D7DD111CF47FB (offrir_id), INDEX IDX_C11D7DD195131E34 (concerner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stage (id INT AUTO_INCREMENT NOT NULL, organiser_id INT DEFAULT NULL, affichage_de DATETIME NOT NULL, affichage_jusque DATETIME NOT NULL, debut DATETIME NOT NULL, description VARCHAR(255) NOT NULL, fin DATETIME NOT NULL, info_complementaire VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, tarif VARCHAR(255) NOT NULL, INDEX IDX_C27C9369A0631C12 (organiser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, adresse_cp_id INT NOT NULL, adresse_localite_id INT NOT NULL, adresse_commune_id INT NOT NULL, adresse_num VARCHAR(255) NOT NULL, adresse_rue VARCHAR(255) NOT NULL, banni TINYINT(1) NOT NULL, e_mail VARCHAR(255) DEFAULT NULL, inscript_conf TINYINT(1) NOT NULL, inscription DATETIME NOT NULL, mot_de_passe VARCHAR(255) NOT NULL, nb_essais_infructueux INT NOT NULL, type_utilisateur VARCHAR(255) NOT NULL, discr VARCHAR(255) NOT NULL, INDEX IDX_1D1C63B385CF3708 (adresse_cp_id), INDEX IDX_1D1C63B35C432B5A (adresse_localite_id), INDEX IDX_1D1C63B37C073F05 (adresse_commune_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abus ADD CONSTRAINT FK_72C9FD013CB68627 FOREIGN KEY (prevenir_id) REFERENCES internautes (id)');
        $this->addSql('ALTER TABLE categories_de_services ADD CONSTRAINT FK_9C52DB77E9E4C8C FOREIGN KEY (photo_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC5158EDA5 FOREIGN KEY (rediger_id) REFERENCES internautes (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC95131E34 FOREIGN KEY (concerner_id) REFERENCES prestataire (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F7E9E4C8C FOREIGN KEY (photo_id) REFERENCES prestataire (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FF98F144A FOREIGN KEY (logo_id) REFERENCES prestataire (id)');
        $this->addSql('ALTER TABLE internautes ADD CONSTRAINT FK_89B0CF0786383B10 FOREIGN KEY (avatar_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE internautes ADD CONSTRAINT FK_89B0CF07BF396750 FOREIGN KEY (id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE internaute_bloc ADD CONSTRAINT FK_B4CC2BA7CAF41882 FOREIGN KEY (internaute_id) REFERENCES internautes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE internaute_bloc ADD CONSTRAINT FK_B4CC2BA75582E9C0 FOREIGN KEY (bloc_id) REFERENCES bloc (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE prestataire ADD CONSTRAINT FK_60A26480275ED078 FOREIGN KEY (profil_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE prestataire_categories_de_services ADD CONSTRAINT FK_DAABA598BE3DB2B7 FOREIGN KEY (prestataire_id) REFERENCES prestataire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE prestataire_categories_de_services ADD CONSTRAINT FK_DAABA5986D74417C FOREIGN KEY (categories_de_services_id) REFERENCES categories_de_services (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD111CF47FB FOREIGN KEY (offrir_id) REFERENCES prestataire (id)');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD195131E34 FOREIGN KEY (concerner_id) REFERENCES categories_de_services (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C9369A0631C12 FOREIGN KEY (organiser_id) REFERENCES prestataire (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B385CF3708 FOREIGN KEY (adresse_cp_id) REFERENCES code_postal (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B35C432B5A FOREIGN KEY (adresse_localite_id) REFERENCES localite (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B37C073F05 FOREIGN KEY (adresse_commune_id) REFERENCES commune (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE internaute_bloc DROP FOREIGN KEY FK_B4CC2BA75582E9C0');
        $this->addSql('ALTER TABLE prestataire_categories_de_services DROP FOREIGN KEY FK_DAABA5986D74417C');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD195131E34');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B385CF3708');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B37C073F05');
        $this->addSql('ALTER TABLE categories_de_services DROP FOREIGN KEY FK_9C52DB77E9E4C8C');
        $this->addSql('ALTER TABLE internautes DROP FOREIGN KEY FK_89B0CF0786383B10');
        $this->addSql('ALTER TABLE abus DROP FOREIGN KEY FK_72C9FD013CB68627');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC5158EDA5');
        $this->addSql('ALTER TABLE internaute_bloc DROP FOREIGN KEY FK_B4CC2BA7CAF41882');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B35C432B5A');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC95131E34');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F7E9E4C8C');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FF98F144A');
        $this->addSql('ALTER TABLE prestataire_categories_de_services DROP FOREIGN KEY FK_DAABA598BE3DB2B7');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD111CF47FB');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C9369A0631C12');
        $this->addSql('ALTER TABLE internautes DROP FOREIGN KEY FK_89B0CF07BF396750');
        $this->addSql('ALTER TABLE prestataire DROP FOREIGN KEY FK_60A26480275ED078');
        $this->addSql('DROP TABLE abus');
        $this->addSql('DROP TABLE bloc');
        $this->addSql('DROP TABLE categories_de_services');
        $this->addSql('DROP TABLE code_postal');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE commune');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE internautes');
        $this->addSql('DROP TABLE internaute_bloc');
        $this->addSql('DROP TABLE localite');
        $this->addSql('DROP TABLE newsletter');
        $this->addSql('DROP TABLE position');
        $this->addSql('DROP TABLE prestataire');
        $this->addSql('DROP TABLE prestataire_categories_de_services');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE stage');
        $this->addSql('DROP TABLE utilisateur');
    }
}
