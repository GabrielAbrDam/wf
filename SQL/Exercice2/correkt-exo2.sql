SELECT agent_code, sum(amount), count(id) FROM test.orders where amount >=1000 group by amount order by sum(amount) desc;
