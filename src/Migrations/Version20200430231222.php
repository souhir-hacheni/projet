<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200430231222 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE adherant CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE tel tel INT DEFAULT NULL, CHANGE mail mail VARCHAR(255) DEFAULT NULL, CHANGE cin cin INT DEFAULT NULL');
        $this->addSql('ALTER TABLE adhesion DROP FOREIGN KEY FK_C50CA65ABE612E45');
        $this->addSql('DROP INDEX IDX_C50CA65ABE612E45 ON adhesion');
        $this->addSql('ALTER TABLE adhesion ADD date_adhesion DATE DEFAULT NULL, ADD annee_adhesion DATE DEFAULT NULL, DROP adherant_id, DROP dateAdhesion, DROP anneeadhesion, CHANGE montant montant DOUBLE PRECISION DEFAULT NULL, CHANGE paiement paiement TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE article CHANGE date_creation date_creation DATE DEFAULT NULL, CHANGE date_modification date_modification VARCHAR(255) DEFAULT NULL, CHANGE contenu contenu VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE bureau_directeur ADD president_id INT DEFAULT NULL, ADD vice_president_id INT DEFAULT NULL, ADD tresorier_id INT DEFAULT NULL, ADD secretaire_general_id INT DEFAULT NULL, CHANGE date_fin_mondat date_fin_mondat DATE DEFAULT NULL, CHANGE date_debut_mondat date_debut_mondat DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE bureau_directeur ADD CONSTRAINT FK_7EB400CDB40A33C7 FOREIGN KEY (president_id) REFERENCES adherant (id)');
        $this->addSql('ALTER TABLE bureau_directeur ADD CONSTRAINT FK_7EB400CD544DD2AD FOREIGN KEY (vice_president_id) REFERENCES adherant (id)');
        $this->addSql('ALTER TABLE bureau_directeur ADD CONSTRAINT FK_7EB400CD5014067D FOREIGN KEY (tresorier_id) REFERENCES adherant (id)');
        $this->addSql('ALTER TABLE bureau_directeur ADD CONSTRAINT FK_7EB400CDF51A033D FOREIGN KEY (secretaire_general_id) REFERENCES adherant (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7EB400CDB40A33C7 ON bureau_directeur (president_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7EB400CD544DD2AD ON bureau_directeur (vice_president_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7EB400CD5014067D ON bureau_directeur (tresorier_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7EB400CDF51A033D ON bureau_directeur (secretaire_general_id)');
        $this->addSql('ALTER TABLE convention CHANGE nom_evenement nom_evenement VARCHAR(255) DEFAULT NULL, CHANGE date_debut date_debut DATE DEFAULT NULL, CHANGE date_fin date_fin DATE DEFAULT NULL, CHANGE lieu lieu VARCHAR(255) DEFAULT NULL, CHANGE nom_responsable nom_responsable VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE nom_evenement nom_evenement VARCHAR(255) DEFAULT NULL, CHANGE type_evenement type_evenement VARCHAR(255) DEFAULT NULL, CHANGE participate participate VARCHAR(255) DEFAULT NULL, CHANGE date_deb_ev date_deb_ev DATE DEFAULT NULL, CHANGE date_fin_ev date_fin_ev DATE DEFAULT NULL, CHANGE nom_responsable_ev nom_responsable_ev VARCHAR(255) DEFAULT NULL, CHANGE lieu_evenement lieu_evenement VARCHAR(255) DEFAULT NULL, CHANGE description_ev description_ev VARCHAR(255) DEFAULT NULL, CHANGE logo_evenement logo_evenement VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE sponsor CHANGE nom_sponsor nom_sponsor VARCHAR(255) DEFAULT NULL, CHANGE montant montant DOUBLE PRECISION DEFAULT NULL, CHANGE mode_paient mode_paient VARCHAR(255) DEFAULT NULL, CHANGE matriculefiscale matriculefiscale INT DEFAULT NULL, CHANGE logo_sponsor logo_sponsor VARCHAR(255) DEFAULT NULL, CHANGE tel tel INT DEFAULT NULL, CHANGE mail mail VARCHAR(255) DEFAULT NULL, CHANGE lien_web lien_web VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE adherant CHANGE adresse adresse VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE tel tel INT DEFAULT NULL, CHANGE mail mail VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE cin cin INT DEFAULT NULL');
        $this->addSql('ALTER TABLE adhesion ADD adherant_id INT DEFAULT NULL, ADD dateAdhesion DATE DEFAULT \'NULL\', ADD anneeadhesion DATE DEFAULT \'NULL\', DROP date_adhesion, DROP annee_adhesion, CHANGE montant montant DOUBLE PRECISION DEFAULT \'NULL\', CHANGE paiement paiement TINYINT(1) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE adhesion ADD CONSTRAINT FK_C50CA65ABE612E45 FOREIGN KEY (adherant_id) REFERENCES adherant (id)');
        $this->addSql('CREATE INDEX IDX_C50CA65ABE612E45 ON adhesion (adherant_id)');
        $this->addSql('ALTER TABLE article CHANGE date_creation date_creation DATE DEFAULT \'NULL\', CHANGE date_modification date_modification VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE contenu contenu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE bureau_directeur DROP FOREIGN KEY FK_7EB400CDB40A33C7');
        $this->addSql('ALTER TABLE bureau_directeur DROP FOREIGN KEY FK_7EB400CD544DD2AD');
        $this->addSql('ALTER TABLE bureau_directeur DROP FOREIGN KEY FK_7EB400CD5014067D');
        $this->addSql('ALTER TABLE bureau_directeur DROP FOREIGN KEY FK_7EB400CDF51A033D');
        $this->addSql('DROP INDEX UNIQ_7EB400CDB40A33C7 ON bureau_directeur');
        $this->addSql('DROP INDEX UNIQ_7EB400CD544DD2AD ON bureau_directeur');
        $this->addSql('DROP INDEX UNIQ_7EB400CD5014067D ON bureau_directeur');
        $this->addSql('DROP INDEX UNIQ_7EB400CDF51A033D ON bureau_directeur');
        $this->addSql('ALTER TABLE bureau_directeur DROP president_id, DROP vice_president_id, DROP tresorier_id, DROP secretaire_general_id, CHANGE date_debut_mondat date_debut_mondat DATE DEFAULT \'NULL\', CHANGE date_fin_mondat date_fin_mondat DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE convention CHANGE nom_evenement nom_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_debut date_debut DATE DEFAULT \'NULL\', CHANGE date_fin date_fin DATE DEFAULT \'NULL\', CHANGE lieu lieu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE nom_responsable nom_responsable VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE evenement CHANGE nom_evenement nom_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE type_evenement type_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE participate participate VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_deb_ev date_deb_ev DATE DEFAULT \'NULL\', CHANGE date_fin_ev date_fin_ev DATE DEFAULT \'NULL\', CHANGE nom_responsable_ev nom_responsable_ev VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE lieu_evenement lieu_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE description_ev description_ev VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE logo_evenement logo_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE sponsor CHANGE nom_sponsor nom_sponsor VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE montant montant DOUBLE PRECISION DEFAULT \'NULL\', CHANGE mode_paient mode_paient VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE matriculefiscale matriculefiscale INT DEFAULT NULL, CHANGE logo_sponsor logo_sponsor VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE tel tel INT DEFAULT NULL, CHANGE mail mail VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE lien_web lien_web VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
