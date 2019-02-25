# Decission-Support-Systems
######Introduction#########

Operating room planning is the allotment of available surgeons and operating rooms available in a hospital to the patients visiting the
hospital. In this project, we proposed to implement the Decision Support System (DSS) for efficient and optimal allocation of resources
available at the hospital. “Decision support systems are interactive, computer-based systems that aid users in judgment and choice
activities”[1] Using DSS, we try to resolve this issue by scheduling the operating rooms in the hospital and prepare an agenda accordingly
for the surgeons, operating rooms, and other staff. Implementing IDSS would improve the situation by allowing us to take improved decisions
and utilize the available resources in an efficient manner.

#######Project implementation###########

The hospital system is implemented using Hybrid architecture. The project is Hybrid because the system is coded using different programming
languages. The DSS is implemented using xampp server, which is a free and open source cross-platform web server solution software. XAMPP
stands for Cross-Platform (X), Apache (A), Maria DB (M), PHP (P) and Perl (P). We made use of Apache Server and Maria DB, created php pages
for data entry into Maria DB. To make the pages visually appealing for the end users we created html and php pages using Cascading Style
Sheets (CSS).
The development of the php and html pages was carried out in editplus, which is an open source text editor which contains tools for
programming.We created a form for the patients where, the receptionist would enter the details such as name, patient ID, age, etc.
The surgeons have their login / signup page, when they login they can view their patients assigned, booking a slot for the patient for a 
surgery. The OR manager has his login page where he finds the requests for allocation of OR based on availability. The OR manager is the 
main decision maker in our system.
The DSS in our system will display the results based on the criteria waiting time, patients profile, patient type, available of resources 
and type of surgery.The data-base has the predefined values for the calculation of latest starting time and latest finishing time for any 
operation to take place. The calculation which we used in calculating the latest starting time and latest finishing time is
Latest starting time = Latest Finish – Duration
Latest Finish = Earliest finish time + 30 minutes.
Duration = Earliest Finish – Earliest Start
The Earliest starting time and Earliest Finish is entered by the surgeon as the input in the system.
In our system we have considered a total of five operating rooms and number of surgeons can be added to the database. We included this 
flexibility for the surgeons considering the threat that surgeons might leave the hospital at any time and no longer work in this hospital 
or may join of new surgeons into the hospital in real time. The above logic will help the DSS to display the optimal choices.
The patients of age 60 and above are given less priority for performing the operations. Emergency patients are given the higher priority 
followed by in patient, Out Patient, and day patient.
In displaying the operating room slots to the doctor the type of surgery required to the patient is also considered as critical surgery is 
more prioritized followed by complicated, scheduled and regular type surgeries.Our hospital system helps the OR Manager to take the 
decision based on data in the database and visualizing the data in the database.
