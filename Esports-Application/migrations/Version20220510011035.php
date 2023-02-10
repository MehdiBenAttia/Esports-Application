<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220510011035 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
      //  $this->addSql('ALTER TABLE adresse CHANGE codepromo codepromo VARCHAR(8) NOT NULL');
     //   $this->addSql('ALTER TABLE competition CHANGE updated_at updated_at DATETIME NOT NULL, CHANGE datedeb datedeb DATETIME NOT NULL, CHANGE datefin datefin DATETIME NOT NULL');
        $this->addSql('ALTER TABLE post ADD liked INT , ADD badlevel INT ');
      //  $this->addSql('ALTER TABLE produit CHANGE image image VARCHAR(255) NOT NULL');
    //    $this->addSql('ALTER TABLE reclamation CHANGE categorie_id categorie_id INT DEFAULT NULL, CHANGE date date DATETIME NOT NULL, CHANGE rep rep VARCHAR(255) NOT NULL');
    //    $this->addSql('ALTER TABLE review CHANGE username username VARCHAR(255) NOT NULL');
    //    $this->addSql('ALTER TABLE typerec CHANGE date date DATETIME NOT NULL, CHANGE descrip descrip VARCHAR(255) NOT NULL');
    //    $this->addSql('ALTER TABLE user DROP code, CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE date_n date_n DATE NOT NULL, CHANGE sexe sexe VARCHAR(255) NOT NULL, CHANGE password password VARCHAR(255) NOT NULL, CHANGE username username VARCHAR(255) NOT NULL, CHANGE roles roles JSON NOT NULL, CHANGE block block TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adresse CHANGE codepromo codepromo VARCHAR(8) DEFAULT NULL');
        $this->addSql('ALTER TABLE competition CHANGE updated_at updated_at DATETIME DEFAULT NULL, CHANGE datedeb datedeb DATETIME DEFAULT NULL, CHANGE datefin datefin DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE post DROP liked, DROP badlevel');
        $this->addSql('ALTER TABLE produit CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE categorie_id categorie_id INT NOT NULL, CHANGE date date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE rep rep VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE review CHANGE username username VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE typerec CHANGE date date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE descrip descrip VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD code INT DEFAULT NULL, CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE prenom prenom VARCHAR(255) DEFAULT NULL, CHANGE username username VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE date_n date_n DATE DEFAULT NULL, CHANGE sexe sexe VARCHAR(255) DEFAULT NULL, CHANGE password password VARCHAR(255) DEFAULT NULL, CHANGE roles roles JSON DEFAULT NULL, CHANGE block block TINYINT(1) DEFAULT NULL');
    }
}
