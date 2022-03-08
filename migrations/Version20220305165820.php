<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220305165820 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie CHANGE descrip descrip VARCHAR(255) NOT NULL, CHANGE level level VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD etat VARCHAR(255) DEFAULT NULL, CHANGE rep rep VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie CHANGE catrec catrec VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE descrip descrip VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE level level VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reclamation DROP etat, CHANGE nom_user nom_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE message message VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE rep rep VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reponses CHANGE nomuser nomuser VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE rep rep VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
