<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200723095438 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE causeannul');
        $this->addSql('DROP TABLE causereport');
        $this->addSql('DROP TABLE employee');
        $this->addSql('DROP TABLE poste');
        $this->addSql('DROP TABLE reunionaction');
        $this->addSql('DROP TABLE reunioncofiginvit');
        $this->addSql('DROP TABLE reunioncommentaire');
        $this->addSql('DROP TABLE reunionconfigdiscuss');
        $this->addSql('DROP TABLE reunionconstat');
        $this->addSql('DROP TABLE reunionconstatdecision');
        $this->addSql('DROP TABLE reuniondecision');
        $this->addSql('DROP TABLE reuniondecisionaction');
        $this->addSql('DROP TABLE reuniondiscussion');
        $this->addSql('DROP TABLE reuniondiscussionlienexterne');
        $this->addSql('DROP TABLE reuniondiscussionpiecejointe');
        $this->addSql('DROP TABLE reunionetat');
        $this->addSql('DROP TABLE reunionetatdiscussion');
        $this->addSql('DROP TABLE reunionlienexterne');
        $this->addSql('DROP TABLE reunionnotif');
        $this->addSql('DROP TABLE reunionparticipent');
        $this->addSql('DROP TABLE reunionpiecejointe');
        $this->addSql('DROP TABLE reunionpv');
        $this->addSql('DROP TABLE reunionstatutpv');
        $this->addSql('DROP TABLE reuniontype');
        $this->addSql('ALTER TABLE reunion MODIFY RIdReunion INT NOT NULL');
        $this->addSql('DROP INDEX IdParticipentReunion ON reunion');
        $this->addSql('DROP INDEX IdTypeReunion ON reunion');
        $this->addSql('DROP INDEX IdEtatReunion ON reunion');
        $this->addSql('ALTER TABLE reunion DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE reunion ADD rtld_type_reunion INT NOT NULL, ADD reld_etat_reunion INT NOT NULL, ADD rpld_participent_reunion VARCHAR(255) NOT NULL, ADD rdate_prevue DATE NOT NULL, ADD rheure_rrevu TIME NOT NULL, ADD rduree_prevu VARCHAR(255) NOT NULL, ADD rdate_realisation DATE NOT NULL, ADD rduree_realisation VARCHAR(255) NOT NULL, ADD rheure_debut TIME NOT NULL, ADD rheure_fin TIME NOT NULL, ADD rres_reunion VARCHAR(255) NOT NULL, ADD rres_verif VARCHAR(255) NOT NULL, ADD rres_pv VARCHAR(255) NOT NULL, ADD rtitre_reunion VARCHAR(255) NOT NULL, ADD rcause_annul LONGTEXT NOT NULL, ADD rcause_report LONGTEXT NOT NULL, DROP RtIdTypeReunion, DROP ReIdEtatReunion, DROP RpIdParticipentReunion, DROP RDatePrevue, DROP RHeurePrevu, DROP RDureePrevu, DROP RDateRealisation, DROP RdureeRealisation, DROP RHeureDebut, DROP RHeureFin, DROP RResReunion, DROP RResVerif, DROP RResPv, DROP RTitreReunion, DROP RCauseAnnul, DROP RCauseReport, CHANGE ridreunion id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reunion ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE causeannul (CaIdCauseAnnul INT AUTO_INCREMENT NOT NULL, RIdReunion INT NOT NULL, CaProprietaire VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CaDateCreation DATE NOT NULL, INDEX IdReunion (RIdReunion), PRIMARY KEY(CaIdCauseAnnul)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE causereport (CrIdCauseReport INT AUTO_INCREMENT NOT NULL, RIdReunion INT NOT NULL, CrCauseRep TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CrDateSaisie DATE NOT NULL, INDEX IdReunion (RIdReunion), PRIMARY KEY(CrIdCauseReport)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE employee (EIdEmployee INT AUTO_INCREMENT NOT NULL, ENom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, EPrenom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, EEmail VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ENumTlf VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ECIN VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(EIdEmployee)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE poste (PIdPoste INT AUTO_INCREMENT NOT NULL, PPoste INT NOT NULL, PRIMARY KEY(PIdPoste)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunionaction (RaIdAction INT AUTO_INCREMENT NOT NULL, EIdEmployee INT NOT NULL, RdIdDecision INT NOT NULL, RaAction TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RaDeadline DATETIME NOT NULL, INDEX EIdEmployee (EIdEmployee), INDEX RdIdDecision (RdIdDecision), PRIMARY KEY(RaIdAction)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunioncofiginvit (RciIdReunionConfigInvit INT AUTO_INCREMENT NOT NULL, RtIdTypeReunion INT NOT NULL, RciCin VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RciEtat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RciDateSaisie DATE NOT NULL, INDEX RtIdTypeReunion (RtIdTypeReunion), PRIMARY KEY(RciIdReunionConfigInvit)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunioncommentaire (RcIdCom INT AUTO_INCREMENT NOT NULL, RIdReunion INT NOT NULL, RcCommentaire TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX IdCom (RIdReunion), PRIMARY KEY(RcIdCom)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunionconfigdiscuss (RcdIdReunionConfigDiscuss INT AUTO_INCREMENT NOT NULL, RtIdTypeReunion INT NOT NULL, RdIdDiscussion INT NOT NULL, Rcdetat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RcdDateSaisie DATE NOT NULL, INDEX RdIdDiscussion (RdIdDiscussion), INDEX RtIdTypeReunion (RtIdTypeReunion), PRIMARY KEY(RcdIdReunionConfigDiscuss)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunionconstat (RcIdConstat INT AUTO_INCREMENT NOT NULL, RdIdDiscussion INT NOT NULL, RcConstat TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RcDateSaisie DATE NOT NULL, INDEX RdIdDiscussion (RdIdDiscussion), PRIMARY KEY(RcIdConstat)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunionconstatdecision (RcIdConstat INT NOT NULL, RdIdDecision INT NOT NULL, PRIMARY KEY(RcIdConstat, RdIdDecision)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reuniondecision (RdIdDecision INT AUTO_INCREMENT NOT NULL, RcIdConstat INT NOT NULL, EIdEmployee INT NOT NULL, RdDateSaisie DATE NOT NULL, RdDecision TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RdCommentaire INT NOT NULL, INDEX RcIdConstat (RcIdConstat), INDEX EIdEmployee (EIdEmployee), PRIMARY KEY(RdIdDecision)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reuniondecisionaction (RaIdAction INT NOT NULL, RdIdDecision INT NOT NULL, PRIMARY KEY(RaIdAction, RdIdDecision)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reuniondiscussion (RdIdDiscussion INT AUTO_INCREMENT NOT NULL, RIdReunion INT NOT NULL, RdHeureDebut TIME NOT NULL, RdHeureFin TIME NOT NULL, RdDureeDiscut VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, Rdcommentaire TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RdAnimateure VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RedIdEtatDiscussion INT NOT NULL, RdPtsDiscut TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX IdReunion (RIdReunion), INDEX RedIdEtatDiscussion (RedIdEtatDiscussion), PRIMARY KEY(RdIdDiscussion)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reuniondiscussionlienexterne (RdleIdLienExterneDiscussion INT AUTO_INCREMENT NOT NULL, RdIdDiscussion INT NOT NULL, RdleLienExterne VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RdleDateCreation DATE NOT NULL, RdleProprietaire VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX RdIdDiscussion (RdIdDiscussion), PRIMARY KEY(RdleIdLienExterneDiscussion)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reuniondiscussionpiecejointe (RdpjIdPieceJointeDiscussion INT AUTO_INCREMENT NOT NULL, RdIdDiscussion INT NOT NULL, RdpjvPieceJointe VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RdpjDateCreation DATE NOT NULL, RdpjProprietaire VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX RdIdDiscussion (RdIdDiscussion), PRIMARY KEY(RdpjIdPieceJointeDiscussion)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunionetat (ReIdEtatReunion INT AUTO_INCREMENT NOT NULL, ReEtat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(ReIdEtatReunion)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunionetatdiscussion (RedIdEtatDiscussion INT AUTO_INCREMENT NOT NULL, RedEtat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(RedIdEtatDiscussion)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunionlienexterne (LeIdLienExterne INT AUTO_INCREMENT NOT NULL, RIdReunion INT NOT NULL, LeDateCreation DATE NOT NULL, LeProprietaire VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX IdReunion (RIdReunion), PRIMARY KEY(LeIdLienExterne)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunionnotif (RnIdNotif INT AUTO_INCREMENT NOT NULL, RIdReunion INT NOT NULL, RnDateNotif DATE NOT NULL, INDEX IdReunion (RIdReunion), PRIMARY KEY(RnIdNotif)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunionparticipent (RpIdParticipantReunion INT AUTO_INCREMENT NOT NULL, EIdEmployee INT NOT NULL, RIdReunion INT NOT NULL, PIdPoste INT NOT NULL, RpInterim VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RpCauseRefus TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RpHeureEntrer TIME NOT NULL, RpHeureSorti TIME NOT NULL, RpRetardPrevue VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RpDateSaisi DATE NOT NULL, INDEX FIdFonction (PIdPoste), INDEX EIdEmployee (EIdEmployee), INDEX RIdReunion (RIdReunion), PRIMARY KEY(RpIdParticipantReunion)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunionpiecejointe (RpjIdPieceJointe INT AUTO_INCREMENT NOT NULL, RIdReunion INT NOT NULL, RpjDateCreation DATE NOT NULL, RpjProprietaire VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX IdReunion (RIdReunion), PRIMARY KEY(RpjIdPieceJointe)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunionpv (RpvIdPV INT AUTO_INCREMENT NOT NULL, RIdReunion INT NOT NULL, RspvIdStatut INT NOT NULL, RpvRespPV VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RpvEtat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, RpvDateSaisie DATE NOT NULL, INDEX IdReunion (RIdReunion), INDEX IdStatut (RspvIdStatut), PRIMARY KEY(RpvIdPV)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunionstatutpv (RspvIdReunionStatutPV INT AUTO_INCREMENT NOT NULL, RspvStatut VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(RspvIdReunionStatutPV)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reuniontype (RtIdTypeReunion INT AUTO_INCREMENT NOT NULL, RtType VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(RtIdTypeReunion)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE reunion MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE reunion DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE reunion ADD RtIdTypeReunion INT NOT NULL, ADD ReIdEtatReunion INT NOT NULL, ADD RpIdParticipentReunion VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD RDatePrevue DATE NOT NULL, ADD RHeurePrevu TIME NOT NULL, ADD RDureePrevu VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD RDateRealisation DATE NOT NULL, ADD RdureeRealisation VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD RHeureDebut TIME NOT NULL, ADD RHeureFin TIME NOT NULL, ADD RResReunion VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD RResVerif VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD RResPv VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD RTitreReunion VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD RCauseAnnul TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ADD RCauseReport TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, DROP rtld_type_reunion, DROP reld_etat_reunion, DROP rpld_participent_reunion, DROP rdate_prevue, DROP rheure_rrevu, DROP rduree_prevu, DROP rdate_realisation, DROP rduree_realisation, DROP rheure_debut, DROP rheure_fin, DROP rres_reunion, DROP rres_verif, DROP rres_pv, DROP rtitre_reunion, DROP rcause_annul, DROP rcause_report, CHANGE id RIdReunion INT AUTO_INCREMENT NOT NULL');
        $this->addSql('CREATE INDEX IdParticipentReunion ON reunion (RpIdParticipentReunion)');
        $this->addSql('CREATE INDEX IdTypeReunion ON reunion (RtIdTypeReunion)');
        $this->addSql('CREATE INDEX IdEtatReunion ON reunion (ReIdEtatReunion)');
        $this->addSql('ALTER TABLE reunion ADD PRIMARY KEY (RIdReunion)');
    }
}
