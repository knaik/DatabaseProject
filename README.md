#Database Project for Principles of Information and Data Management

Database Course taken with Professor Tomasz Imielinski

The purpose of the project was to use SQL queries to do simple data mining.
The main point was to exercie programming with SQL and so the GUI was not a priority.

I used PHP, passing the requested query in the url. This is very poor practice from a security standpoint 
but it's fine for a proof of concept. I used phpMyAdmin to ingest data as well as write the core of the sql queries, 
and just passed in user input from an html form for specific variables. I used D3.js a Javascript framework for simple dynamic chart generation.
The data was hosted on a remote instance of Ubuntu using a DigitalOcean Ubuntu Droplet that used the LAMP stack.

Multiple tables of data were used, along with joins. Data was sourced from the NYPD and related to Stop-and-Frisk and arrests.

All use of these documents must be consistent with the Rutgers University Code of Student Conduct.

All use of this code must be consistent with the DCS Academic Integrity Policy.


My Data Sources as well as Motivation:
https://www.ncbi.nlm.nih.gov/pmc/articles/PMC1485564/pdf/cmaj00266-0071.pdf
"Nevertheless, the correlations detected in this study suggest that the presence of a gun in the home
increases the likelihood of homicide or suicide." - Martin Killias, Dr. iur., Lic. phil., 1993

http://data.beta.nyc/dataset/stop-question-and-frisk-data
"Data records from the NYPD Stop, Question and Frisk Database are available for download from the links provided below. Data is made available in SPSS portable file and csv format and has been stored in a zip file archive. After downloading the zip archive must be extracted to access the SPSS portable file."

http://data.beta.nyc/dataset/nypd-compstat-data-2016
"Weekly File Upload of Cumulative NYPD CompStat Data for 2016. Released on Fridays."

http://www.nyc.gov/html/nypd/html/crime_prevention/crime_statistics.shtml
"This page displays the NYPD crime statistics as recorded in the CompStat book. CompStat periods run Monday through Sunday. All figures reflect statistics from the end of the most recent CompStat period. Geographic coordinates are mapped to the nearest intersection. This data is subject to change as complaints are investigated."

My application will use the data as way of better understanding the relationship between stop, question, and frisk practices and the incidence of crime. I have decided to restrict my data to the NYPD. The correlation of prevalence of crimes and stop-and-frisk can be studied. Correlations can be limited by date, geolocation, or even frequency of incidence.

It is hard to predict the exact relationship between gun control policies, stop-and-frisk practices, and crime incidences however it should be possible to see large trends after any major gun control policies are put in place. 
