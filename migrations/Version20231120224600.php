<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231120224600 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entite CHANGE tips tips JSON NOT NULL COMMENT \'(DC2Type:json)\', CHANGE clues clues JSON NOT NULL COMMENT \'(DC2Type:json)\', CHANGE sanities sanities JSON NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entite CHANGE tips tips VARCHAR(255) DEFAULT NULL, CHANGE clues clues JSON NOT NULL COMMENT \'(DC2Type:json)\', CHANGE sanities sanities JSON NOT NULL COMMENT \'(DC2Type:json)\'');
    }
}
