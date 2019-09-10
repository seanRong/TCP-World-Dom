# TCP-World-Dom

My first stab at building both the front and the backend... plan to revisit this someday

Files are named "mathopoly" but final version was renamed to "World Domination" before launch

Each team is started on one of the .php pages of differing colors (could easily implement a log in system, which is in reality a redirect, and fuddle the URLs to prevent teams from accidentally using another team's page)

Solving problems on the index_*teamcolor*.php page for a particular question module of 3 questions (hereby known as a "station") will increase the points on the points sql table from 0 to 1 to 2 and maxes at 3 for that team on that station. Once a team reaches 3 points, nobody will receive points for answering questions in that station. All scores so far will be frozen, including 0's if unattempted. A button is included at the top of every station module on the .php pages so that a team may check the station's status (locked or unlocked) before deciding to invest time in solving problems. Once all stations are in the locked state, the game is over. 

*could probably have a row with points totalled in sql table for easy calculation of winner, but in actual executon we manually tallied as the most a team scored was 7 points.
