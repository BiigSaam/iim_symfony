<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250611101635 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE notification CHANGE user_id user_id INT NOT NULL, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE notification RENAME INDEX user_id TO IDX_BF5476CAA76ED395');
        $this->addSql('ALTER TABLE produit CHANGE description description LONGTEXT DEFAULT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE produit RENAME INDEX user_id TO IDX_29A5EC27A76ED395');
        $this->addSql('ALTER TABLE user CHANGE points points INT NOT NULL, CHANGE actif actif TINYINT(1) NOT NULL, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CAA76ED395');
        $this->addSql('ALTER TABLE notification CHANGE user_id user_id INT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE updated_at updated_at DATETIME DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE notification RENAME INDEX idx_bf5476caa76ed395 TO user_id');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27A76ED395');
        $this->addSql('ALTER TABLE produit CHANGE user_id user_id INT DEFAULT NULL, CHANGE description description TEXT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE updated_at updated_at DATETIME DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE produit RENAME INDEX idx_29a5ec27a76ed395 TO user_id');
        $this->addSql('ALTER TABLE user CHANGE points points INT DEFAULT 1000 NOT NULL, CHANGE actif actif TINYINT(1) DEFAULT 1 NOT NULL, CHANGE created_at created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}
