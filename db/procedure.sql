DELIMITER //

CREATE PROCEDURE spCreateOrder(
	IN id_cart INT,
    IN id_user INT,
    IN id_status INT
)

BEGIN

	/* Criar o pedido e obter o ID para relacionar os produtos a este pedido */
	DECLARE id INT DEFAULT 0;
	INSERT INTO tblOrders (id_user, id_status, created_at) VALUES (id_user, id_status, NOW() );    
    SET id = (SELECT LAST_INSERT_ID());
    
    INSERT INTO tblItensOrders 
    (id_order, id_product, price_product, qtd, created_at, updated_at)
    SELECT 
        id as id_order,
        id_product, 
        price_product, 
        qtd,
        NOW() as created_at,
        NULL as updated_at
    FROM tblItensCart WHERE id_cart = id_cart;
    
    -- DELETE FROM tblItensCart WHERE id_cart = id_cart;
    -- DELETE FROM tblCart WHERE id_cart = id_cart AND id_user = id_user;

END //

DELIMITER ;