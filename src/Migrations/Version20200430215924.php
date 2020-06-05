<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200430215924 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');


        $this->addSql('ALTER TABLE article CHANGE date_creation date_creation DATE DEFAULT NULL, CHANGE date_modification date_modification VARCHAR(255) DEFAULT NULL, CHANGE contenu contenu VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE bureau_directeur ADD date_debut_mondat DATE DEFAULT NULL, DROP president, DROP vice_prisedent, DROP tresorier, DROP secretaire_general, DROP membres, DROP date_deb_mondat, CHANGE date_fin_mondat date_fin_mondat DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE convention CHANGE nom_evenement nom_evenement VARCHAR(255) DEFAULT NULL, CHANGE date_debut date_debut DATE DEFAULT NULL, CHANGE date_fin date_fin DATE DEFAULT NULL, CHANGE lieu lieu VARCHAR(255) DEFAULT NULL, CHANGE nom_responsable nom_responsable VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE nom_evenement nom_evenement VARCHAR(255) DEFAULT NULL, CHANGE type_evenement type_evenement VARCHAR(255) DEFAULT NULL, CHANGE participate participate VARCHAR(255) DEFAULT NULL, CHANGE date_deb_ev date_deb_ev DATE DEFAULT NULL, CHANGE date_fin_ev date_fin_ev DATE DEFAULT NULL, CHANGE nom_responsable_ev nom_responsable_ev VARCHAR(255) DEFAULT NULL, CHANGE lieu_evenement lieu_evenement VARCHAR(255) DEFAULT NULL, CHANGE description_ev description_ev VARCHAR(255) DEFAULT NULL, CHANGE logo_evenement logo_evenement VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');


        $this->addSql('ALTER TABLE article CHANGE date_creation date_creation DATE DEFAULT \'NULL\', CHANGE date_modification date_modification VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE contenu contenu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE bureau_directeur ADD president VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, ADD vice_prisedent VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, ADD tresorier VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, ADD secretaire_general VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, ADD membres VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, ADD date_deb_mondat DATE DEFAULT \'NULL\', DROP date_debut_mondat, CHANGE date_fin_mondat date_fin_mondat DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE convention CHANGE nom_evenement nom_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_debut date_debut DATE DEFAULT \'NULL\', CHANGE date_fin date_fin DATE DEFAULT \'NULL\', CHANGE lieu lieu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE nom_responsable nom_responsable VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE evenement CHANGE nom_evenement nom_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE type_evenement type_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE participate participate VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_deb_ev date_deb_ev DATE DEFAULT \'NULL\', CHANGE date_fin_ev date_fin_ev DATE DEFAULT \'NULL\', CHANGE nom_responsable_ev nom_responsable_ev VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE lieu_evenement lieu_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE description_ev description_ev VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE logo_evenement logo_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
