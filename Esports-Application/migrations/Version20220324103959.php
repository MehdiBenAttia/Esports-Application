<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220324103959 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        //$this->addSql('ALTER TABLE adresse CHANGE codepromo codepromo VARCHAR(8) NOT NULL');
        $this->addSql('ALTER TABLE competition CHANGE datedeb datedeb DATETIME NOT NULL, CHANGE datefin datefin DATETIME NOT NULL');
//        $this->addSql('ALTER TABLE reclamation CHANGE rep rep VARCHAR(255) NOT NULL');
//        $this->addSql('ALTER TABLE typerec CHANGE descrip descrip VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        //$this->addSql('ALTER TABLE adresse CHANGE codepromo codepromo VARCHAR(8) DEFAULT NULL');
        $this->addSql('ALTER TABLE competition CHANGE datedeb datedeb DATETIME DEFAULT NULL, CHANGE datefin datefin DATETIME DEFAULT NULL');
//        $this->addSql('ALTER TABLE reclamation CHANGE rep rep VARCHAR(255) DEFAULT NULL');
//        $this->addSql('ALTER TABLE typerec CHANGE descrip descrip VARCHAR(255) DEFAULT NULL');
    }
}
