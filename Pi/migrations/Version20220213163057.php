<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220213163057 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE livraison');
        $this->addSql('ALTER TABLE commande CHANGE id_livreur id_livreur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D5DEEE7D6 FOREIGN KEY (id_livreur_id) REFERENCES livreur (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D5DEEE7D6 ON commande (id_livreur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE livraison (id_livreur INT AUTO_INCREMENT NOT NULL, Nom VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Prenom VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Tel INT NOT NULL, Email VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id_livreur)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D5DEEE7D6');
        $this->addSql('DROP INDEX IDX_6EEAA67D5DEEE7D6 ON commande');
        $this->addSql('ALTER TABLE commande CHANGE produit Produit VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE id_livreur_id id_livreur INT DEFAULT NULL');
        $this->addSql('ALTER TABLE livreur CHANGE nom Nom VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE prenom Prenom VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE email Email VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE panier CHANGE nom nom VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE produit CHANGE nom nom VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
    }
}
