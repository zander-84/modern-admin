/**
 * Database schema required by \yii\rbac\DbManager.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @author Alexander Kochetov <creocoder@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * @since 2.0
 */

drop table if exists `rbac_auth_assignment`;
drop table if exists `rbac_auth_item_child`;
drop table if exists `rbac_auth_item`;
drop table if exists `rbac_auth_rule`;

create table `rbac_auth_rule`
(
   `name`                 varchar(64) not null,
   `data`                 blob,
   `created_at`           integer,
   `updated_at`           integer,
    primary key (`name`)
) engine InnoDB;

create table `rbac_auth_item`
(
   `name`                 varchar(64) not null,
   `type`                 smallint not null,
   `description`          text,
   `rule_name`            varchar(64),
   `data`                 blob,
   `created_at`           integer,
   `updated_at`           integer,
   primary key (`name`),
   foreign key (`rule_name`) references `rbac_auth_rule` (`name`) on delete set null on update cascade,
   key `type` (`type`)
) engine InnoDB;

create table `rbac_auth_item_child`
(
   `parent`               varchar(64) not null,
   `child`                varchar(64) not null,
   primary key (`parent`, `child`),
   foreign key (`parent`) references `rbac_auth_item` (`name`) on delete cascade on update cascade,
   foreign key (`child`) references `rbac_auth_item` (`name`) on delete cascade on update cascade
) engine InnoDB;

create table `rbac_auth_assignment`
(
   `item_name`            varchar(64) not null,
   `user_id`              varchar(64) not null,
   `created_at`           integer,
   primary key (`item_name`, `user_id`),
   foreign key (`item_name`) references `rbac_auth_item` (`name`) on delete cascade on update cascade,
   key `auth_assignment_user_id_idx` (`user_id`)
) engine InnoDB;
