<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220310154120 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
//        $this->addSql('ALTER TABLE adresse CHANGE codepromo codepromo VARCHAR(8) NOT NULL');
        $this->addSql('ALTER TABLE participation ADD user_id INT DEFAULT NULL, ADD competition_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F7B39D312 FOREIGN KEY (competition_id) REFERENCES competition (id)');
        $this->addSql('CREATE INDEX IDX_AB55E24FA76ED395 ON participation (user_id)');
        $this->addSql('CREATE INDEX IDX_AB55E24F7B39D312 ON participation (competition_id)');
//        $this->addSql('ALTER TABLE reclamation CHANGE rep rep VARCHAR(255) NOT NULL');
//        $this->addSql('ALTER TABLE typerec CHANGE descrip descrip VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
//       $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24FA76ED395');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F7B39D312');
        $this->addSql('DROP INDEX IDX_AB55E24FA76ED395 ON participation');
        $this->addSql('DROP INDEX IDX_AB55E24F7B39D312 ON participation');
        $this->addSql('ALTER TABLE participation DROP user_id, DROP competition_id');
//        $this->addSql('ALTER TABLE reclamation CHANGE rep rep VARCHAR(255) DEFAULT NULL');
//        $this->addSql('ALTER TABLE typerec CHANGE descrip descrip VARCHAR(255) DEFAULT NULL');
    }
}
