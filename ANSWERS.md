
## Question 2
This uses lazy loading (the author and publisher are checked with a query each iteration of the for each). With N books, this requires N+1 queries to list out. We can use eager loading (->with('author')) to avoid this, which uses a select to group all of the author queries into one statement (and similarly for publisher)
