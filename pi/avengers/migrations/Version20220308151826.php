<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220308151826 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE jeux DROP FOREIGN KEY FK_3755B50DBCF5E72D');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6F347EFB');
        $this->addSql('DROP TABLE categorie_c');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE review');
        $this->addSql('ALTER TABLE categorie ADD nom VARCHAR(255) NOT NULL, DROP nom_categ, DROP nom_fournisseur, DROP mail_fournisseur');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_497DD6346C6E55B5 ON categorie (nom)');
        $this->addSql('ALTER TABLE jeux DROP FOREIGN KEY FK_3755B50DBCF5E72D');
        $this->addSql('ALTER TABLE jeux ADD CONSTRAINT FK_3755B50DBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_c (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_7CDBAEED6C6E55B5 (nom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, reference INT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, marque VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prix DOUBLE PRECISION NOT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, updated_at DATETIME DEFAULT NULL, INDEX IDX_29A5EC27BCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, produit_id INT DEFAULT NULL, note_produit INT NOT NULL, avis VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_794381C6F347EFB (produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('DROP INDEX UNIQ_497DD6346C6E55B5 ON categorie');
        $this->addSql('ALTER TABLE categorie ADD nom_categ VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD nom_fournisseur VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD mail_fournisseur VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP nom');
        $this->addSql('ALTER TABLE competition CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE jeux DROP FOREIGN KEY FK_3755B50DBCF5E72D');
        $this->addSql('ALTER TABLE jeux CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE dates dates VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE jeux ADD CONSTRAINT FK_3755B50DBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie_c (id)');
    }
}
