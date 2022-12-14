-- GET MAX PAGE COUNT
SELECT CEILING(count(*) / 15) AS pages FROM actor;

-- USE OFFSET TO CONTROL PAGES
SELECT * FROM actor ORDER BY id LIMIT 15 OFFSET 30;
