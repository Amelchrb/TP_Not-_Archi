<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241106154731 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acteurs (id INT AUTO_INCREMENT NOT NULL, nom_acteur VARCHAR(50) NOT NULL, prenom_acteur VARCHAR(50) NOT NULL, date_naissance_acteur DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE aime (id INT AUTO_INCREMENT NOT NULL, film_id INT NOT NULL, utilisateur_id INT NOT NULL, role_favori VARCHAR(50) DEFAULT NULL, INDEX IDX_8533FE8567F5183 (film_id), INDEX IDX_8533FE8FB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE films (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(50) NOT NULL, duree INT DEFAULT NULL, anne_sortie INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE joue (id INT AUTO_INCREMENT NOT NULL, film_id INT NOT NULL, acteur_id INT NOT NULL, role_acteur VARCHAR(50) NOT NULL, INDEX IDX_59C45C02567F5183 (film_id), INDEX IDX_59C45C02DA6F574A (acteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE realisateurs (id INT AUTO_INCREMENT NOT NULL, nom_realisateur VARCHAR(50) NOT NULL, prenom_realisateur VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE realise (id INT AUTO_INCREMENT NOT NULL, film_id INT NOT NULL, realisateur_id INT NOT NULL, INDEX IDX_15CCD99E567F5183 (film_id), INDEX IDX_15CCD99EF1D8422E (realisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, nom_utilisateur VARCHAR(50) NOT NULL, prenom_utilisateur VARCHAR(50) NOT NULL, email VARCHAR(50) DEFAULT NULL, mot_de_passe VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE aime ADD CONSTRAINT FK_8533FE8567F5183 FOREIGN KEY (film_id) REFERENCES films (id)');
        $this->addSql('ALTER TABLE aime ADD CONSTRAINT FK_8533FE8FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE joue ADD CONSTRAINT FK_59C45C02567F5183 FOREIGN KEY (film_id) REFERENCES films (id)');
        $this->addSql('ALTER TABLE joue ADD CONSTRAINT FK_59C45C02DA6F574A FOREIGN KEY (acteur_id) REFERENCES acteurs (id)');
        $this->addSql('ALTER TABLE realise ADD CONSTRAINT FK_15CCD99E567F5183 FOREIGN KEY (film_id) REFERENCES films (id)');
        $this->addSql('ALTER TABLE realise ADD CONSTRAINT FK_15CCD99EF1D8422E FOREIGN KEY (realisateur_id) REFERENCES realisateurs (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE aime DROP FOREIGN KEY FK_8533FE8567F5183');
        $this->addSql('ALTER TABLE aime DROP FOREIGN KEY FK_8533FE8FB88E14F');
        $this->addSql('ALTER TABLE joue DROP FOREIGN KEY FK_59C45C02567F5183');
        $this->addSql('ALTER TABLE joue DROP FOREIGN KEY FK_59C45C02DA6F574A');
        $this->addSql('ALTER TABLE realise DROP FOREIGN KEY FK_15CCD99E567F5183');
        $this->addSql('ALTER TABLE realise DROP FOREIGN KEY FK_15CCD99EF1D8422E');
        $this->addSql('DROP TABLE acteurs');
        $this->addSql('DROP TABLE aime');
        $this->addSql('DROP TABLE films');
        $this->addSql('DROP TABLE joue');
        $this->addSql('DROP TABLE realisateurs');
        $this->addSql('DROP TABLE realise');
        $this->addSql('DROP TABLE utilisateurs');
    }
}
