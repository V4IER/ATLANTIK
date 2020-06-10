<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200609164031 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bateau (id INT AUTO_INCREMENT NOT NULL, id_bateau INT DEFAULT NULL, libelle_bateau VARCHAR(25) DEFAULT NULL, longueur DOUBLE PRECISION DEFAULT NULL, largeur DOUBLE PRECISION DEFAULT NULL, vitesse INT DEFAULT NULL, type INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, id_categorie INT DEFAULT NULL, libelle_categorie VARCHAR(25) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE detail_reserv (id INT AUTO_INCREMENT NOT NULL, qte_reserve INT DEFAULT NULL, id_reservation_en_ligne INT NOT NULL, id_type_tarif INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipement (id INT AUTO_INCREMENT NOT NULL, id_equip INT DEFAULT NULL, lib_equip VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE liaison (id INT AUTO_INCREMENT NOT NULL, id_liaison INT DEFAULT NULL, distance_liaison DOUBLE PRECISION DEFAULT NULL, port_depart INT NOT NULL, port_arrivee INT NOT NULL, id_secteur INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE periode (id INT AUTO_INCREMENT NOT NULL, id_periode INT DEFAULT NULL, libelle_periode VARCHAR(25) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE place_par_categ (id INT AUTO_INCREMENT NOT NULL, id_bateau INT NOT NULL, id_categorie INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE port (id INT AUTO_INCREMENT NOT NULL, id_port INT DEFAULT NULL, libelle_port VARCHAR(25) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE posseder (id INT AUTO_INCREMENT NOT NULL, id_bateau INT DEFAULT NULL, id_equip INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation_en_ligne (id INT AUTO_INCREMENT NOT NULL, id_reservation_en_ligne INT DEFAULT NULL, libelle_reservation_en_ligne VARCHAR(25) DEFAULT NULL, nom_reservation VARCHAR(25) DEFAULT NULL, adresse_reservation VARCHAR(75) DEFAULT NULL, id_traversees INT NOT NULL, id_tarifs INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE secteur (id INT AUTO_INCREMENT NOT NULL, id_secteur INT DEFAULT NULL, libelle_secteur VARCHAR(25) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarif (id INT AUTO_INCREMENT NOT NULL, prix INT DEFAULT NULL, id_periode INT NOT NULL, id_type_tarif INT NOT NULL, id_liaison INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tarifs (id INT AUTO_INCREMENT NOT NULL, id_tarifs INT DEFAULT NULL, libelle_tarifs VARCHAR(25) DEFAULT NULL, tarifs_liaison INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE traversees (id INT AUTO_INCREMENT NOT NULL, id_traversees INT DEFAULT NULL, date_depart DATE DEFAULT NULL, heure_depart TIME DEFAULT NULL, id_liaison INT NOT NULL, id_bateau INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_tarif (id INT AUTO_INCREMENT NOT NULL, id_type_tarif INT DEFAULT NULL, libelletype_tarif VARCHAR(25) DEFAULT NULL, id_categorie INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE bateau');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE detail_reserv');
        $this->addSql('DROP TABLE equipement');
        $this->addSql('DROP TABLE liaison');
        $this->addSql('DROP TABLE periode');
        $this->addSql('DROP TABLE place_par_categ');
        $this->addSql('DROP TABLE port');
        $this->addSql('DROP TABLE posseder');
        $this->addSql('DROP TABLE reservation_en_ligne');
        $this->addSql('DROP TABLE secteur');
        $this->addSql('DROP TABLE tarif');
        $this->addSql('DROP TABLE tarifs');
        $this->addSql('DROP TABLE traversees');
        $this->addSql('DROP TABLE type_tarif');
    }
}
