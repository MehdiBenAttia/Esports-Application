<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220307155456 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE user ADD tel INT DEFAULT NULL, CHANGE date_n date_n DATE NOT NULL, CHANGE roles roles JSON NOT NULL, CHANGE block block TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe CHANGE roles roles JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE user DROP tel, CHANGE date_n date_n DATE DEFAULT NULL, CHANGE roles roles JSON DEFAULT NULL, CHANGE block block TINYINT(1) DEFAULT 0');
    }
}
