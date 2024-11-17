<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241117153448 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE cryptocurrency_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE cryptocurrency (id INT NOT NULL, name VARCHAR(255) NOT NULL, symbol VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, market_cap DOUBLE PRECISION NOT NULL, volume24h DOUBLE PRECISION DEFAULT NULL, circulating_supply DOUBLE PRECISION DEFAULT NULL, change24h DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE cryptocurrency_id_seq CASCADE');
        $this->addSql('DROP TABLE cryptocurrency');
    }
}
