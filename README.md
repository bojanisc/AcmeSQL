# AcmeSQL
The purpose of this web application is to demonstrate SQL injection
vulnerabilities. Some of them are simple to exploit while some are more 
difficult due to various filtering of keywords used by the application.

Filtering was based on real-world cases I have encountered. The last
example is particularly difficult for exploitation and currently (January 2019)
no automated tools will exploit it (sqlmap can exploit all but the last one).

The application is part of the my presentation "Exploiting esoteric SQL
injection vulnerabilities", presented at the BalCCon 2018 conference.
The presentation is also included in the repository.

Questions or comments?
Reach me at bojan.isc@gmail.com or https://twitter.com/bojanz


How to install/use?

You will need to install Apache, PHP and MySQL.
Once done, import the acmesql.sql database and edit the config.php file
so the application can connect to the database.
If everything works OK you should see the list of transactions.

