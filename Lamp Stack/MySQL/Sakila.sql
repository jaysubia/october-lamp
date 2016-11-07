-- SELECT city.city_id, customer.first_name, customer.last_name, customer.email, address.address
-- FROM city
-- JOIN address ON city.city_id = address.city_id
-- JOIN customer ON address.address_id = customer.address_id
-- WHERE city.city_id = '312'

-- SELECT film.title, film.description, film.release_year, film.rating,film.special_features, category.name
-- FROM film	
-- JOIN film_category ON film.film_id = film_category.film_id
-- JOIN category ON film_category.category_id = category.category_id
-- WHERE category.name = 'comedy'

-- SELECT film.title, film.description, film.release_year, actor.first_name, actor.last_name, actor.actor_id
-- FROM film
-- JOIN film_actor ON film.film_id = film_actor.film_id
-- JOIN actor ON actor.actor_id = film_actor.actor_id 
-- WHERE actor.actor_id = '5'
-- GROUP BY film.film_id


-- SELECT customer.first_name, customer.last_name, customer.email, address.address, city.city, city.city_id, customer.store_id
-- FROM customer
-- JOIN address ON address.address_id = customer.customer_id
-- JOIN city ON city.city_id = address.city_id
-- WHERE customer.store_id = '1'
-- AND (city.city_id = 1 || city.city_id = 42 || city.city_id = 31 || city.city_id = 459)

-- SELECT film.title, film.description, film.release_year, film.rating, film.special_features, actor.actor_id
-- FROM actor
-- JOIN film_actor ON actor.actor_id = film_actor.actor_id
-- JOIN film ON film_actor.film_id = film.film_id 
-- WHERE actor.actor_id = '15'
-- AND film.rating = 'G'
-- AND film.special_features LIKE '%Behind the Scenes%'

-- SELECT film.title, film.film_id, actor.actor_id, actor.first_name, actor.last_name
-- FROM actor
-- JOIN film_actor ON actor.actor_id = film_actor.actor_id
-- JOIN film ON film_actor.film_id = film.film_id 
-- WHERE film.film_id = '369'

-- SELECT film.title, film.description, film. release_year, film.rating, film.special_features, category.name, film.rental_rate
-- FROM film	
-- JOIN film_category ON film.film_id = film_category.film_id
-- JOIN category ON film_category.category_id = category.category_id
-- WHERE category.name = 'drama'
-- AND film.rental_rate = '2.99'

-- SELECT film.title, film.description, film.release_year, film.rating, film.film_id, film.special_features, actor.actor_id, actor.first_name, actor.last_name, category.name 
-- FROM film
-- JOIN category ON film.film_id = film.film_id
-- JOIN actor ON film.film_id = film.film_id  
-- WHERE actor.first_name = 'Sandra'
-- AND actor.last_name = 'Kilmer'
-- AND category.name = 'action'
-- GROUP BY film.film_id


