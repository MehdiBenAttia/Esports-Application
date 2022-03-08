<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220220231219 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reponses ADD reclamation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reponses ADD CONSTRAINT FK_1E512EC62D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id)');
        $this->addSql('CREATE INDEX IDX_1E512EC62D6BA2D9 ON reponses (reclamation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie CHANGE catrec catrec VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reclamation CHANGE nom_user nom_user VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE message message VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_reclamation type_reclamation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reponses DROP FOREIGN KEY FK_1E512EC62D6BA2D9');
        $this->addSql('DROP INDEX IDX_1E512EC62D6BA2D9 ON reponses');
        $this->addSql('ALTER TABLE reponses DROP reclamation_id, CHANGE nomuser nomuser VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE rep rep VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
