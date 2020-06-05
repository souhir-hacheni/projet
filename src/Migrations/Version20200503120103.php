<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200503120103 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE revenu (id INT AUTO_INCREMENT NOT NULL, designation VARCHAR(255) DEFAULT NULL, prix_unitaire DOUBLE PRECISION DEFAULT NULL, quantite DOUBLE PRECISION DEFAULT NULL, total INT DEFAULT NULL, date_action DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE adherant CHANGE adherant_id adherant_id INT DEFAULT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE tel tel INT DEFAULT NULL, CHANGE mail mail VARCHAR(255) DEFAULT NULL, CHANGE cin cin INT DEFAULT NULL');
        $this->addSql('ALTER TABLE adhesion CHANGE montant montant DOUBLE PRECISION DEFAULT NULL, CHANGE paiement paiement TINYINT(1) DEFAULT NULL, CHANGE date_adhesion date_adhesion DATE DEFAULT NULL, CHANGE annee_adhesion annee_adhesion DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE article CHANGE date_creation date_creation DATE DEFAULT NULL, CHANGE date_modification date_modification VARCHAR(255) DEFAULT NULL, CHANGE contenu contenu VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE bureau_directeur CHANGE president_id president_id INT DEFAULT NULL, CHANGE vice_president_id vice_president_id INT DEFAULT NULL, CHANGE tresorier_id tresorier_id INT DEFAULT NULL, CHANGE secretaire_general_id secretaire_general_id INT DEFAULT NULL, CHANGE date_fin_mondat date_fin_mondat DATE DEFAULT NULL, CHANGE date_debut_mondat date_debut_mondat DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE convention CHANGE nom_evenement nom_evenement VARCHAR(255) DEFAULT NULL, CHANGE date_debut date_debut DATE DEFAULT NULL, CHANGE date_fin date_fin DATE DEFAULT NULL, CHANGE lieu lieu VARCHAR(255) DEFAULT NULL, CHANGE nom_responsable nom_responsable VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE nom_evenement nom_evenement VARCHAR(255) DEFAULT NULL, CHANGE type_evenement type_evenement VARCHAR(255) DEFAULT NULL, CHANGE participate participate VARCHAR(255) DEFAULT NULL, CHANGE date_deb_ev date_deb_ev DATE DEFAULT NULL, CHANGE date_fin_ev date_fin_ev DATE DEFAULT NULL, CHANGE nom_responsable_ev nom_responsable_ev VARCHAR(255) DEFAULT NULL, CHANGE lieu_evenement lieu_evenement VARCHAR(255) DEFAULT NULL, CHANGE description_ev description_ev VARCHAR(255) DEFAULT NULL, CHANGE logo_evenement logo_evenement VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE sponsor CHANGE nom_sponsor nom_sponsor VARCHAR(255) DEFAULT NULL, CHANGE montant montant DOUBLE PRECISION DEFAULT NULL, CHANGE mode_paient mode_paient VARCHAR(255) DEFAULT NULL, CHANGE matriculefiscale matriculefiscale INT DEFAULT NULL, CHANGE logo_sponsor logo_sponsor VARCHAR(255) DEFAULT NULL, CHANGE tel tel INT DEFAULT NULL, CHANGE mail mail VARCHAR(255) DEFAULT NULL, CHANGE lien_web lien_web VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE revenu');
        $this->addSql('ALTER TABLE adherant CHANGE adherant_id adherant_id INT DEFAULT NULL, CHANGE adresse adresse VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE tel tel INT DEFAULT NULL, CHANGE mail mail VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE cin cin INT DEFAULT NULL');
        $this->addSql('ALTER TABLE adhesion CHANGE montant montant DOUBLE PRECISION DEFAULT \'NULL\', CHANGE date_adhesion date_adhesion DATE DEFAULT \'NULL\', CHANGE annee_adhesion annee_adhesion DATE DEFAULT \'NULL\', CHANGE paiement paiement TINYINT(1) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE article CHANGE date_creation date_creation DATE DEFAULT \'NULL\', CHANGE date_modification date_modification VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE contenu contenu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE bureau_directeur CHANGE president_id president_id INT DEFAULT NULL, CHANGE vice_president_id vice_president_id INT DEFAULT NULL, CHANGE tresorier_id tresorier_id INT DEFAULT NULL, CHANGE secretaire_general_id secretaire_general_id INT DEFAULT NULL, CHANGE date_debut_mondat date_debut_mondat DATE DEFAULT \'NULL\', CHANGE date_fin_mondat date_fin_mondat DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE convention CHANGE nom_evenement nom_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_debut date_debut DATE DEFAULT \'NULL\', CHANGE date_fin date_fin DATE DEFAULT \'NULL\', CHANGE lieu lieu VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE nom_responsable nom_responsable VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE evenement CHANGE nom_evenement nom_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE type_evenement type_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE participate participate VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_deb_ev date_deb_ev DATE DEFAULT \'NULL\', CHANGE date_fin_ev date_fin_ev DATE DEFAULT \'NULL\', CHANGE nom_responsable_ev nom_responsable_ev VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE lieu_evenement lieu_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE description_ev description_ev VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE logo_evenement logo_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE sponsor CHANGE nom_sponsor nom_sponsor VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE montant montant DOUBLE PRECISION DEFAULT \'NULL\', CHANGE mode_paient mode_paient VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE matriculefiscale matriculefiscale INT DEFAULT NULL, CHANGE logo_sponsor logo_sponsor VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE tel tel INT DEFAULT NULL, CHANGE mail mail VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE lien_web lien_web VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
