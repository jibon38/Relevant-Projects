
insert into Admin values(1200567, 'jibon@gmail.com');
insert into Admin values(1211566, 'minhaz@gmail.com');
insert into Admin values(1222565, 'sneha@gmail.com');
insert into Admin values(1233569, 'ryan@gmail.com');
insert into Admin values(1244568, 'alex@gmail.com');
insert into Admin values(1255562, 'masud@gmail.com');

insert into Students values(1200567, 'jibon@gmail.com', 'Jibon', '+8801712345678', 'Male', 'KUET');
insert into Students values(1211566, 'minhaz@gmail.com', 'Minhaz', '+8801744345633', 'Male', 'RUET');
insert into Students values(1222565, 'sneha@gmail.com', 'Sneha', '+8801715545644', 'Female', 'DU');
insert into Students values(1233569, 'ryan@gmail.com', 'Ryan', '+8801712235655', 'Male', 'MIT');
insert into Students values(1244568, 'alex@gmail.com', 'Alex', '+8801718745666', 'Male', 'CIT');
insert into Students values(1255562, 'masud@gmail.com', 'Masud', '+8801712345699', 'Male', 'KUET');

insert into Courses values(1200567, 'jibon@gmail.com', 'CCNA', 'Routing and Switching', 20000, '24-JAN-2019');
insert into Courses values(1211566, 'minhaz@gmail.com', 'CCNP', 'Core Networking', 30000, '20-JUN-2020');
insert into Courses values(1222565, 'sneha@gmail.com', 'CCIE', 'Advanced Networking', 40000, '15-JAN-2021');
insert into Courses values(1233569, 'ryan@gmail.com', 'CCNA', 'Data Center', 22000, '24-MAR-2018');
insert into Courses values(1244568, 'alex@gmail.com', 'CCNA', 'Wireless Networking', 21000, '22-JAN-2020');
insert into Courses values(1255562, 'masud@gmail.com', 'CCNP', 'Core Routing', 35000, '28-JUN-2024');

insert into Payment values(1200567, 'jibon@gmail.com', 'CCNA', 20000, 'Routing and Switching' ,7771234, '10-FEB-2019');
insert into Payment values(1211566, 'minhaz@gmail.com', 'CCNP', 30000, 'Core Networking', 7775678, '02-JUL-2020');
insert into Payment values(1222565, 'sneha@gmail.com', 'CCIE', 40000, 'Advanced Networking', 7779012, '20-JAN-2021');
insert into Payment values(1233569, 'ryan@gmail.com', 'CCNA', 22000, 'Data Center', 7773456, '30-MAR-2018');
insert into Payment values(1244568, 'alex@gmail.com', 'CCNA', 21000, 'Wireless Networking', 7777890, '02-FEB-2020');
insert into Payment values(1255562, 'masud@gmail.com', 'CCNP', 35000, 'Core Routing', 7772468, '04-JUL-2024');

insert into Semesters values(1200567, 'jibon@gmail.com', 'CCNA', 'Routing and Switching', 'Sem-03', 'Enterprise Networking', '4-Months');
insert into Semesters values(1211566, 'minhaz@gmail.com', 'CCNP', 'Core Networking', 'Sem-01', 'Intro to Advanced Routing', '4-Months');
insert into Semesters values(1222565, 'sneha@gmail.com', 'CCIE', 'Advanced Networking', 'Sem-02', 'Network Automation', '6-Months');
insert into Semesters values(1233569, 'ryan@gmail.com', 'CCNA', 'Data Center', 'Sem-01', 'Data Center Concepts', '2-Months');
insert into Semesters values(1244568, 'alex@gmail.com', 'CCNA', 'Wireless Networking', 'Sem-02', 'Enterprise Wireless', '4-Months');
insert into Semesters values(1255562, 'masud@gmail.com', 'CCNP', 'Core Routing', 'Sem-03', 'Hybrid Core Networks', '6-Months');

insert into Modules values(1200567, 'jibon@gmail.com', 'CCNA', 'Routing and Switching', 'Sem-03', 'Module-1', 'Single Area OSPF');
insert into Modules values(1200567, 'jibon@gmail.com', 'CCNA', 'Routing and Switching', 'Sem-03', 'Module-2', 'Single Area OSPF Configuration');
insert into Modules values(1200567, 'jibon@gmail.com', 'CCNA', 'Routing and Switching', 'Sem-03', 'Module-3', 'ACL Concepts');
insert into Modules values(1200567, 'jibon@gmail.com', 'CCNA', 'Routing and Switching', 'Sem-03', 'Module-4', 'ACL Configuration');
insert into Modules values(1200567, 'jibon@gmail.com', 'CCNA', 'Routing and Switching', 'Sem-03', 'Module-5', 'NAT Concepts');
insert into Modules values(1200567, 'jibon@gmail.com', 'CCNA', 'Routing and Switching', 'Sem-03', 'Module-6', 'NAT Configurations');

insert into Modules values(1211566, 'minhaz@gmail.com', 'CCNP', 'Core Networking', 'Sem-01', 'Module-4', 'Advance Route Config');
insert into Modules values(1222565, 'sneha@gmail.com', 'CCIE', 'Advanced Networking', 'Sem-02', 'Module-1', 'Autamation Concepts');
insert into Modules values(1233569, 'ryan@gmail.com', 'CCNA', 'Data Center', 'Sem-01', 'Module-2', 'Data Center Switches');
insert into Modules values(1244568, 'alex@gmail.com', 'CCNA', 'Wireless Networking', 'Sem-02', 'Module-5', 'Enterprise WLAN Config');
insert into Modules values(1255562, 'masud@gmail.com', 'CCNP', 'Core Routing', 'Sem-03', 'Module-7', 'Advanced MPLS Config');

insert into Exam values (1200567, 'jibon@gmail.com', 'CCNA', 'Routing and Switching', 'Sem-03', 92, 76, 'Pass');
insert into Exam values (1211566, 'minhaz@gmail.com', 'CCNP', 'Core Networking', 'Sem-01', 75, 76, 'Fail');
insert into Exam values (1222565, 'sneha@gmail.com', 'CCIE', 'Advanced Networking', 'Sem-02', 83, 76, 'Pass');
insert into Exam values (1233569, 'ryan@gmail.com', 'CCNA', 'Data Center', 'Sem-01', 85, 76, 'Pass');
insert into Exam values (1244568, 'alex@gmail.com', 'CCNA', 'Wireless Networking', 'Sem-02', 70, 76, 'Fail');
insert into Exam values (1255562, 'masud@gmail.com', 'CCNP', 'Core Routing', 'Sem-03', 78, 76, 'Pass');

commit;
/