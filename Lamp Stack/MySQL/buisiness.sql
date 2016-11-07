-- SELECT MONTHNAME(charged_datetime) AS month, SUM(amount) AS revenue
-- FROM billing
-- WHERE MONTHNAME(charged_datetime) = 'March'
-- AND YEAR(charged_datetime) = 2012

-- SELECT clients.client_id, sum(billing.amount)
-- FROM clients
-- JOIN billing ON clients.client_id = billing.client_id
-- WHERE clients.client_id = 2

-- SELECT clients.client_id, sites.domain_name
-- FROM clients
-- JOIN sites ON clients.client_id = sites.client_id
-- WHERE clients.client_id = 10

-- SELECT sites.domain_name, clients.client_id, monthname(sites.created_datetime) as Month 
-- FROM clients
-- JOIN sites ON clients.client_id = sites.client_id
-- WHERE clients.client_id = 20
-- OR clients.client_id = 1

-- SELECT count(leads.registered_datetime) AS Count, sites.domain_name, concat(date_format(created_datetime, '%M %D, %Y')) AS Date
-- FROM sites
-- JOIN leads ON leads.site_id = sites.site_id
-- WHERE sites.created_datetime BETWEEN '2011-01-01' AND '2011-02-15'  





