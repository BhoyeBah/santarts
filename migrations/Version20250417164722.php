<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250417164722 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', total INT NOT NULL, status TINYINT(1) NOT NULL, address VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE order_detail (id INT AUTO_INCREMENT NOT NULL, orders_id INT DEFAULT NULL, product_id INT DEFAULT NULL, quantity INT NOT NULL, price_unit INT NOT NULL, subtotal INT NOT NULL, INDEX IDX_ED896F46CFFE9AD6 (orders_id), INDEX IDX_ED896F464584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE order_detail ADD CONSTRAINT FK_ED896F46CFFE9AD6 FOREIGN KEY (orders_id) REFERENCES `order` (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE order_detail ADD CONSTRAINT FK_ED896F464584665A FOREIGN KEY (product_id) REFERENCES product (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE product CHANGE ishome ishome TINYINT(1) NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE order_detail DROP FOREIGN KEY FK_ED896F46CFFE9AD6
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE order_detail DROP FOREIGN KEY FK_ED896F464584665A
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE `order`
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE order_detail
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE product CHANGE ishome ishome TINYINT(1) DEFAULT NULL
        SQL);
    }
}
