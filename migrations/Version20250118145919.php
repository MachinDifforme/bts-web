<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250118145919 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agence (id SERIAL NOT NULL, code INT NOT NULL, nom VARCHAR(32) DEFAULT NULL, tel_fixe VARCHAR(32) DEFAULT NULL, tel_port VARCHAR(32) DEFAULT NULL, mail VARCHAR(32) DEFAULT NULL, ville VARCHAR(32) DEFAULT NULL, code_post INT DEFAULT NULL, pays VARCHAR(32) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE application (id SERIAL NOT NULL, forticlient VARCHAR(255) DEFAULT NULL, kaspersky VARCHAR(255) DEFAULT NULL, parallels VARCHAR(255) DEFAULT NULL, rustdesk VARCHAR(12) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE dossier_executable (id SERIAL NOT NULL, bureau INT DEFAULT NULL, telechargement INT DEFAULT NULL, documents INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE dossier_taille (id SERIAL NOT NULL, bureau INT DEFAULT NULL, telechargement INT DEFAULT NULL, documents INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE ordinateur (id SERIAL NOT NULL, utilisateur_id INT DEFAULT NULL, dossier_taille_id INT DEFAULT NULL, dossier_executable_id INT DEFAULT NULL, application_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, nom VARCHAR(6) NOT NULL, os VARCHAR(16) DEFAULT NULL, disk_space INT DEFAULT NULL, free_disk_space INT DEFAULT NULL, ip_address VARCHAR(16) DEFAULT NULL, histo_mod TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_8712E8DBFB88E14F ON ordinateur (utilisateur_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8712E8DB316CC567 ON ordinateur (dossier_taille_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8712E8DBC17BA65 ON ordinateur (dossier_executable_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8712E8DB3E030ACD ON ordinateur (application_id)');
        $this->addSql('CREATE INDEX IDX_8712E8DBD725330D ON ordinateur (agence_id)');
        $this->addSql('COMMENT ON COLUMN ordinateur.histo_mod IS \'(DC2Type:array)\'');
        $this->addSql('CREATE TABLE utilisateur (id SERIAL NOT NULL, agence_id INT DEFAULT NULL, login VARCHAR(32) NOT NULL, nom VARCHAR(32) NOT NULL, prenom VARCHAR(32) NOT NULL, portnum VARCHAR(16) DEFAULT NULL, mail VARCHAR(64) DEFAULT NULL, fonction VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_1D1C63B3D725330D ON utilisateur (agence_id)');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB316CC567 FOREIGN KEY (dossier_taille_id) REFERENCES dossier_taille (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBC17BA65 FOREIGN KEY (dossier_executable_id) REFERENCES dossier_executable (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DB3E030ACD FOREIGN KEY (application_id) REFERENCES application (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ordinateur ADD CONSTRAINT FK_8712E8DBD725330D FOREIGN KEY (agence_id) REFERENCES agence (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3D725330D FOREIGN KEY (agence_id) REFERENCES agence (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE ordinateur DROP CONSTRAINT FK_8712E8DBFB88E14F');
        $this->addSql('ALTER TABLE ordinateur DROP CONSTRAINT FK_8712E8DB316CC567');
        $this->addSql('ALTER TABLE ordinateur DROP CONSTRAINT FK_8712E8DBC17BA65');
        $this->addSql('ALTER TABLE ordinateur DROP CONSTRAINT FK_8712E8DB3E030ACD');
        $this->addSql('ALTER TABLE ordinateur DROP CONSTRAINT FK_8712E8DBD725330D');
        $this->addSql('ALTER TABLE utilisateur DROP CONSTRAINT FK_1D1C63B3D725330D');
        $this->addSql('DROP TABLE agence');
        $this->addSql('DROP TABLE application');
        $this->addSql('DROP TABLE dossier_executable');
        $this->addSql('DROP TABLE dossier_taille');
        $this->addSql('DROP TABLE ordinateur');
        $this->addSql('DROP TABLE utilisateur');
    }
}
