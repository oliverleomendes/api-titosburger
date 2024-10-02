CREATE TABLE tblTokens (
    id_token INT AUTO_INCREMENT PRIMARY KEY,
    token VARCHAR(8),
    username VARCHAR(100),
    expired_at DATETIME,
    created_at DATETIME
);