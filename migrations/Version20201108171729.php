<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201108171729 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories_de_services DROP FOREIGN KEY FK_9C52DB77E9E4C8C');
        $this->addSql('ALTER TABLE internaute DROP FOREIGN KEY FK_6C8E97CC86383B10');
        $this->addSql('ALTER TABLE abus DROP FOREIGN KEY FK_72C9FD013CB68627');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC5158EDA5');
        $this->addSql('ALTER TABLE internaute_bloc DROP FOREIGN KEY FK_B4CC2BA7CAF41882');
        $this->addSql('ALTER TABLE internaute_prestataire DROP FOREIGN KEY FK_D906EC3ACAF41882');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, photo_id INT DEFAULT NULL, logo_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_C53D045F7E9E4C8C (photo_id), INDEX IDX_C53D045FF98F144A (logo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE internautes (id INT NOT NULL, avatar_id INT DEFAULT NULL, newsletter TINYINT(1) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_89B0CF0786383B10 (avatar_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F7E9E4C8C FOREIGN KEY (photo_id) REFERENCES prestataire (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FF98F144A FOREIGN KEY (logo_id) REFERENCES prestataire (id)');
        $this->addSql('ALTER TABLE internautes ADD CONSTRAINT FK_89B0CF0786383B10 FOREIGN KEY (avatar_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE internautes ADD CONSTRAINT FK_89B0CF07BF396750 FOREIGN KEY (id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE images');
        $this->addSql('DROP TABLE internaute');
        $this->addSql('DROP TABLE internaute_prestataire');
        $this->addSql('ALTER TABLE abus DROP FOREIGN KEY FK_72C9FD013CB68627');
        $this->addSql('ALTER TABLE abus ADD CONSTRAINT FK_72C9FD013CB68627 FOREIGN KEY (prevenir_id) REFERENCES internautes (id)');
        $this->addSql('ALTER TABLE categories_de_services DROP FOREIGN KEY FK_9C52DB77E9E4C8C');
        $this->addSql('ALTER TABLE categories_de_services ADD CONSTRAINT FK_9C52DB77E9E4C8C FOREIGN KEY (photo_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC5158EDA5');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC5158EDA5 FOREIGN KEY (rediger_id) REFERENCES internautes (id)');
        $this->addSql('ALTER TABLE internaute_bloc DROP FOREIGN KEY FK_B4CC2BA7CAF41882');
        $this->addSql('ALTER TABLE internaute_bloc ADD CONSTRAINT FK_B4CC2BA7CAF41882 FOREIGN KEY (internaute_id) REFERENCES internautes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateur ADD discr VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories_de_services DROP FOREIGN KEY FK_9C52DB77E9E4C8C');
        $this->addSql('ALTER TABLE internautes DROP FOREIGN KEY FK_89B0CF0786383B10');
        $this->addSql('ALTER TABLE abus DROP FOREIGN KEY FK_72C9FD013CB68627');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC5158EDA5');
        $this->addSql('ALTER TABLE internaute_bloc DROP FOREIGN KEY FK_B4CC2BA7CAF41882');
        $this->addSql('CREATE TABLE images (id INT AUTO_INCREMENT NOT NULL, photo_id INT DEFAULT NULL, logo_id INT DEFAULT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, url VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_E01FBE6AF98F144A (logo_id), INDEX IDX_E01FBE6A7E9E4C8C (photo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE internaute (id INT AUTO_INCREMENT NOT NULL, profil_id INT DEFAULT NULL, avatar_id INT DEFAULT NULL, newsletter TINYINT(1) NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prenom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_6C8E97CC86383B10 (avatar_id), UNIQUE INDEX UNIQ_6C8E97CC275ED078 (profil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE internaute_prestataire (internaute_id INT NOT NULL, prestataire_id INT NOT NULL, INDEX IDX_D906EC3ACAF41882 (internaute_id), INDEX IDX_D906EC3ABE3DB2B7 (prestataire_id), PRIMARY KEY(internaute_id, prestataire_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A7E9E4C8C FOREIGN KEY (photo_id) REFERENCES prestataire (id)');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6AF98F144A FOREIGN KEY (logo_id) REFERENCES prestataire (id)');
        $this->addSql('ALTER TABLE internaute ADD CONSTRAINT FK_6C8E97CC275ED078 FOREIGN KEY (profil_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE internaute ADD CONSTRAINT FK_6C8E97CC86383B10 FOREIGN KEY (avatar_id) REFERENCES images (id)');
        $this->addSql('ALTER TABLE internaute_prestataire ADD CONSTRAINT FK_D906EC3ABE3DB2B7 FOREIGN KEY (prestataire_id) REFERENCES prestataire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE internaute_prestataire ADD CONSTRAINT FK_D906EC3ACAF41882 FOREIGN KEY (internaute_id) REFERENCES internaute (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE internautes');
        $this->addSql('ALTER TABLE abus DROP FOREIGN KEY FK_72C9FD013CB68627');
        $this->addSql('ALTER TABLE abus ADD CONSTRAINT FK_72C9FD013CB68627 FOREIGN KEY (prevenir_id) REFERENCES internaute (id)');
        $this->addSql('ALTER TABLE categories_de_services DROP FOREIGN KEY FK_9C52DB77E9E4C8C');
        $this->addSql('ALTER TABLE categories_de_services ADD CONSTRAINT FK_9C52DB77E9E4C8C FOREIGN KEY (photo_id) REFERENCES images (id)');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC5158EDA5');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC5158EDA5 FOREIGN KEY (rediger_id) REFERENCES internaute (id)');
        $this->addSql('ALTER TABLE internaute_bloc DROP FOREIGN KEY FK_B4CC2BA7CAF41882');
        $this->addSql('ALTER TABLE internaute_bloc ADD CONSTRAINT FK_B4CC2BA7CAF41882 FOREIGN KEY (internaute_id) REFERENCES internaute (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateur DROP discr');
    }
}
