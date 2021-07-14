<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210714004004 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trekking ADD creator_id INT NOT NULL');
        $this->addSql('ALTER TABLE trekking ADD CONSTRAINT FK_39D6BCB61220EA6 FOREIGN KEY (creator_id) REFERENCES admin (id)');
        $this->addSql('CREATE INDEX IDX_39D6BCB61220EA6 ON trekking (creator_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trekking DROP FOREIGN KEY FK_39D6BCB61220EA6');
        $this->addSql('DROP INDEX IDX_39D6BCB61220EA6 ON trekking');
        $this->addSql('ALTER TABLE trekking DROP creator_id');
    }
}
