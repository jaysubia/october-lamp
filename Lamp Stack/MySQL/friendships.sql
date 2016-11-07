SELECT users.first_name, users.last_name, friendships.first_name, friendships.last_name, friendships.id
FROM users
LEFT JOIN friendships ON friendships.id = users.id
GROUP BY friendships.last_name

