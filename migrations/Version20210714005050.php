<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210714005050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE trekking_crossing_points (trekking_id INT NOT NULL, crossing_points_id INT NOT NULL, INDEX IDX_9426A2ABF30CE107 (trekking_id), INDEX IDX_9426A2ABACCF3A62 (crossing_points_id), PRIMARY KEY(trekking_id, crossing_points_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE trekking_crossing_points ADD CONSTRAINT FK_9426A2ABF30CE107 FOREIGN KEY (trekking_id) REFERENCES trekking (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE trekking_crossing_points ADD CONSTRAINT FK_9426A2ABACCF3A62 FOREIGN KEY (crossing_points_id) REFERENCES crossing_points (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE trekking ADD difficulty_id INT NOT NULL, ADD type_id INT NOT NULL, ADD district_id INT NOT NULL, ADD town_id INT NOT NULL, ADD start_id INT NOT NULL');
        $this->addSql('ALTER TABLE trekking ADD CONSTRAINT FK_39D6BCBFCFA9DAE FOREIGN KEY (difficulty_id) REFERENCES difficulty (id)');
        $this->addSql('ALTER TABLE trekking ADD CONSTRAINT FK_39D6BCBC54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE trekking ADD CONSTRAINT FK_39D6BCBB08FA272 FOREIGN KEY (district_id) REFERENCES district (id)');
        $this->addSql('ALTER TABLE trekking ADD CONSTRAINT FK_39D6BCB75E23604 FOREIGN KEY (town_id) REFERENCES town (id)');
        $this->addSql('ALTER TABLE trekking ADD CONSTRAINT FK_39D6BCB623DF99B FOREIGN KEY (start_id) REFERENCES start (id)');
        $this->addSql('CREATE INDEX IDX_39D6BCBFCFA9DAE ON trekking (difficulty_id)');
        $this->addSql('CREATE INDEX IDX_39D6BCBC54C8C93 ON trekking (type_id)');
        $this->addSql('CREATE INDEX IDX_39D6BCBB08FA272 ON trekking (district_id)');
        $this->addSql('CREATE INDEX IDX_39D6BCB75E23604 ON trekking (town_id)');
        $this->addSql('CREATE INDEX IDX_39D6BCB623DF99B ON trekking (start_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE trekking_crossing_points');
        $this->addSql('ALTER TABLE trekking DROP FOREIGN KEY FK_39D6BCBFCFA9DAE');
        $this->addSql('ALTER TABLE trekking DROP FOREIGN KEY FK_39D6BCBC54C8C93');
        $this->addSql('ALTER TABLE trekking DROP FOREIGN KEY FK_39D6BCBB08FA272');
        $this->addSql('ALTER TABLE trekking DROP FOREIGN KEY FK_39D6BCB75E23604');
        $this->addSql('ALTER TABLE trekking DROP FOREIGN KEY FK_39D6BCB623DF99B');
        $this->addSql('DROP INDEX IDX_39D6BCBFCFA9DAE ON trekking');
        $this->addSql('DROP INDEX IDX_39D6BCBC54C8C93 ON trekking');
        $this->addSql('DROP INDEX IDX_39D6BCBB08FA272 ON trekking');
        $this->addSql('DROP INDEX IDX_39D6BCB75E23604 ON trekking');
        $this->addSql('DROP INDEX IDX_39D6BCB623DF99B ON trekking');
        $this->addSql('ALTER TABLE trekking DROP difficulty_id, DROP type_id, DROP district_id, DROP town_id, DROP start_id');
    }
}
