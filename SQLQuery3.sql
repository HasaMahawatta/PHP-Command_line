INSERT INTO broker(NAME) VALUES ('Ted');
INSERT INTO broker(NAME) VALUES ('Mark');
INSERT INTO broker(NAME) VALUES ('Aaron');
INSERT INTO broker(NAME) VALUES ('Luke');

INSERT INTO customer(NAME,AMOUNT,BROKER_ID) VALUES ('sam', 3000, 4);
INSERT INTO customer(NAME,AMOUNT,BROKER_ID) VALUES ('john', 4000, 2);
INSERT INTO customer(NAME,AMOUNT,BROKER_ID) VALUES ('mack', 5000, 2);
INSERT INTO customer(NAME,AMOUNT,BROKER_ID) VALUES ('test', 3000, 3);
INSERT INTO customer(NAME,AMOUNT,BROKER_ID) VALUES ('june', 2000, 3);
INSERT INTO customer(NAME,AMOUNT,BROKER_ID) VALUES ('mike', 4000, 1);
INSERT INTO customer(NAME,AMOUNT,BROKER_ID) VALUES ('annie', 4000, 2);
INSERT INTO customer(NAME,AMOUNT,BROKER_ID) VALUES ('michael', 2000, 1);
INSERT INTO customer(NAME,AMOUNT,BROKER_ID) VALUES ('tom', 2000, 4);
INSERT INTO customer(NAME,AMOUNT,BROKER_ID) VALUES ('jason', 6000, 4);

SELECT
b.NAME,
COUNT(*) AS cnt
FROM
customer c
INNER JOIN broker b ON b.ID = c.BROKER_ID
GROUP BY
c.BROKER_ID
ORDER BY
cnt DESC,
b.NAME ASC