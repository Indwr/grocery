DELIMITER //

CREATE PROCEDURE GetAllCancelAndPlacedOrders()
BEGIN
	SELECT *,count(id) as total FROM `webNotifications` WHERE isWatch=0 GROUP BY type;
END //

DELIMITER ;