# Universities-Courses-Information-Website
 CS3319 (Database I) Final Assigment

Using CSS, HTML, PHP, Javascript and MySQL, create a website  that allows someone to update the Universities, Western Courses, Outside Courses and Equivalencies tables.
- List all the Western Course Data.  Allow the user to order the courses by Course Number OR by Course Name (you might want to use a radio button for this choice).  For each of these 2 fields (num or name)  allow the user to either order them in ascending or descending order (you could also use a radio button for this choice).

- Allow the user to select one of the Western Courses listed and change the Western course name or weight or suffix but do NOT allow the user to modify the Course number.
- Allow the user to select one of the Western Courses listed and delete that course. If the course is equivalent to outside courses, make sure you warn the user about that before deleting the course and allow the user to change his/her mind. Any permanent deletions should always allow the user the chance to back out. 
- Allow the user to enter a new Western Course.  The user should be able to enter all the information.   If the user enters a course number that already exists, give the user a warning message and do not allow it to be entered into the system. Make sure the user follows the rules of the course number starting with cs (it is up to you how you enforce that). 
- Allow the user to select a university from the list of universities names in order by province and then see all the university information and see all that university's courses. 
- Allow the user to select a province code and see all the university names and nicknames  from that province.
- Allow the user to select a Western course by number  and see the name and the number and the weight of the western course and see the university name and the outside course name and outside course number and weight of all outside courses it is equivalent to.  Also show the date this equivalency was made. 
- Allow the user to select a date and then show all equivalencies made before and including that date. For this query show the same information as in the previous bullet point. 
- Allow the user to create a new equivalency between an existing outside course and an existing Western course.  Make the equivalency date to be the current date.  If the user is trying to create an equivalency that already exists, then just modify that row in the table by updating  the date to today's date.
- List the names and nicknames of universities that are in our system but do not have any courses associated with them. 
