<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220217211957 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reponse CHANGE reponse rep VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation CHANGE nom_user nom_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE message message VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_reclamation type_reclamation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reponse ADD reponse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP rep, CHANGE nomuser nomuser VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE date date VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE consult consult VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
