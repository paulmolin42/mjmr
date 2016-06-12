<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160601222818 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE carpooling_message ADD carpooling_topic_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE carpooling_message ADD CONSTRAINT FK_657F61A17EED1DBF FOREIGN KEY (carpooling_topic_id) REFERENCES carpooling_topic (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_657F61A17EED1DBF ON carpooling_message (carpooling_topic_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE carpooling_message DROP CONSTRAINT FK_657F61A17EED1DBF');
        $this->addSql('DROP INDEX IDX_657F61A17EED1DBF');
        $this->addSql('ALTER TABLE carpooling_message DROP carpooling_topic_id');
    }
}
