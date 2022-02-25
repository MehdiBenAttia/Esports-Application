<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220217234503 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE classroom');
        $this->addSql('DROP TABLE student');
        $this->addSql('ALTER TABLE commande RENAME INDEX idx_6eeaa67d5deee7d6 TO IDX_6EEAA67D35CD7A3B');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE classroom (id INT NOT NULL, name VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE student (nsc INT NOT NULL, email VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, domaine VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, date DATE NOT NULL, FK INT NOT NULL) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commande CHANGE produit Produit VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE commande RENAME INDEX idx_6eeaa67d35cd7a3b TO IDX_6EEAA67D5DEEE7D6');
        $this->addSql('ALTER TABLE livreur CHANGE nom Nom VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE prenom Prenom VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE email Email VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE panier CHANGE nom nom VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE produit CHANGE nom nom VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
    }
}
