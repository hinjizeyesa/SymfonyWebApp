<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200706092902 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cases CHANGE category_id_id category_id_id INT DEFAULT NULL, CHANGE age age VARCHAR(10) DEFAULT NULL, CHANGE file file VARCHAR(255) DEFAULT NULL, CHANGE evidence_gallery evidence_gallery VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE category CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE title title VARCHAR(20) DEFAULT NULL, CHANGE description description VARCHAR(100) DEFAULT NULL, CHANGE status status VARCHAR(10) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE file_documents CHANGE cases_id cases_id INT DEFAULT NULL, CHANGE title title VARCHAR(50) DEFAULT NULL, CHANGE image image VARCHAR(150) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD is_verified TINYINT(1) NOT NULL, CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cases CHANGE category_id_id category_id_id INT DEFAULT NULL, CHANGE age age VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE file file VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE evidence_gallery evidence_gallery VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE category CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE title title VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE status status VARCHAR(10) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE created_at created_at DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE file_documents CHANGE cases_id cases_id INT DEFAULT NULL, CHANGE title title VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(150) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user DROP is_verified, CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
