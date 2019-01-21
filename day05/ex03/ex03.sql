INSERT INTO ft_table(login, creation_date, `group`)
SELECT last_name, birthdate, 'other' FROM user_card
WHERE last_name LIKE '%a%' AND LENGTH(last_name) < 9
LIMIT 10
ORDER BY last_name;
