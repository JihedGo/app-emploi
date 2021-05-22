<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210522155332 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE demande (id INT AUTO_INCREMENT NOT NULL, emploi_id INT NOT NULL, employer_id INT DEFAULT NULL, is_terminated TINYINT(1) NOT NULL, INDEX IDX_2694D7A5EC013E12 (emploi_id), INDEX IDX_2694D7A541CD9E7A (employer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emploi (id INT AUTO_INCREMENT NOT NULL, proprietaire_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, adresse LONGTEXT NOT NULL, INDEX IDX_74A0B0FA76C50E4A (proprietaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5EC013E12 FOREIGN KEY (emploi_id) REFERENCES emploi (id)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A541CD9E7A FOREIGN KEY (employer_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE emploi ADD CONSTRAINT FK_74A0B0FA76C50E4A FOREIGN KEY (proprietaire_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5EC013E12');
        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A541CD9E7A');
        $this->addSql('ALTER TABLE emploi DROP FOREIGN KEY FK_74A0B0FA76C50E4A');
        $this->addSql('DROP TABLE demande');
        $this->addSql('DROP TABLE emploi');
        $this->addSql('DROP TABLE user');
    }
}
