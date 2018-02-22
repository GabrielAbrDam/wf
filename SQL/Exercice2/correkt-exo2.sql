use test;

SELECT agent_code FROM orders WHERE amount >= 1000;
SELECT agent_code, SUM(amount) FROM orders WHERE amount >= 1000 GROUP BY agent_code;
SELECT agent_code, SUM(amount), count(id) FROM orders WHERE amount >= 1000 GROUP BY agent_code;
SELECT agent_code, SUM(amount), count(id) FROM orders WHERE amount >= 1000 GROUP BY agent_code ORDER BY AVG(amount);
SELECT agent_code, sum(amount), count(id) FROM orders where amount >= 1000 GROUP BY agent_code order by avg(amount) desc;
