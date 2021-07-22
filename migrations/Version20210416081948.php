<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210416081948 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bloc CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE questions CHANGE question question LONGTEXT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bloc MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE bloc DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE bloc CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE questions CHANGE question question VARCHAR(400) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
    }
}
