CREATE TABLE tblUsersRoles (
    `id_user_role` INT AUTO_INCREMENT PRIMARY KEY,
    `id_user` INT,
    `group` VARCHAR(10),
    `created_at` DATETIME,
    `updated_at` DATETIME
);