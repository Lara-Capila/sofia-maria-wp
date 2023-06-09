<?php declare(strict_types = 1);

namespace MailPoet\Migrations;

if (!defined('ABSPATH')) exit;


use MailPoet\Entities\SubscriberEntity;
use MailPoet\Migrator\Migration;

class Migration_20230503_210945 extends Migration {
  public function run(): void {
    $subscribersTable = $this->getTableName(SubscriberEntity::class);
    $this->connection->executeQuery(
      "ALTER TABLE `{$subscribersTable}`
        ADD INDEX `first_name` (`first_name`(10)),
        ADD INDEX `last_name` (`last_name`(10))"
    );
  }
}
