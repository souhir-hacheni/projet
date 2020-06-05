<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200419095011 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');



        $this->addSql('ALTER TABLE adhesion CHANGE adherant_id adherant_id INT DEFAULT NULL, CHANGE montant montant VARCHAR(255) DEFAULT NULL, CHANGE dateAdhesion dateAdhesion DATE DEFAULT NULL, CHANGE anneeAdhesion anneeAdhesion VARCHAR(255) DEFAULT NULL, CHANGE paiement paiement TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE article CHANGE date_creation date_creation DATE DEFAULT NULL, CHANGE date_modification date_modification VARCHAR(255) DEFAULT NULL, CHANGE contenu contenu VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE convention CHANGE nom_evenement nom_evenement VARCHAR(255) DEFAULT NULL, CHANGE date_debut date_debut DATE DEFAULT NULL, CHANGE date_fin date_fin DATE DEFAULT NULL, CHANGE lieu lieu VARCHAR(255) DEFAULT NULL, CHANGE nom_responsable nom_responsable VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');



        $this->addSql('ALTER TABLE adhesion CHANGE adherant_id adherant_id INT DEFAULT NULL, CHANGE montant montant VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE dateAdhesion dateAdhesion DATE DEFAULT \'NULL\', CHANGE anneeAdhesion anneeAdhesion VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE paiement paiement TINYINT(1) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE article CHANGE date_creation date_creation DATE DEFAULT \'NULL\', CHANGE date_modification date_modification VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE contenu contenu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE convention CHANGE nom_evenement nom_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_debut date_debut DATE DEFAULT \'NULL\', CHANGE date_fin date_fin DATE DEFAULT \'NULL\', CHANGE lieu lieu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE nom_responsable nom_responsable VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
