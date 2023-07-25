# ExpenseManager
 To Keep Track of Personal Expenses
Expense Manager
----------------
it allows user to enter personal and other expense to keep track.

Accounts
1 General:
2 KBS:
3 Personal:
4 Hobbies:

Tables:-
1. Account(AcId int ainc pk,AcName varchar2(100),CreatedDate TimeStamp,isStatus bool)
	1 Nimesh 21:13 21-07-2023 true 
	2 Personal 21:13 21-07-2023 true 
	3 Food 21:13 21-07-2023 true 
	4 Hobbies 21:13 21-07-2023 true 
	5 Travel 21:13 21-07-2023 true 

2. TrasactionType(TransTypeId int ainc pk,TransTypeName varchar2(50))
1,debit
2,credit

3. PaymentMethod(PMTID,PMTNAME)
1,Cash
2,DebitCard
3,CreditCard
4,UPI
5,Check

4. Transaction(tid pk,acid fk,tyid fk,tamout,tdesc,tcomment,createdDate,transDate,isStatus,PMTID)
1,KBS,DEBIT,500,'dell mouse','purchased for system no 1',09:04 15-07-2023,09:04 15-07-2023,1,CASH)



Menus
  Dashboard  dashboard.php 
  Master Entry
   - Manage Account account.php
   - Manage Transaction Type transactiontype.php
   - Manage Payment Method paymentmethod.php
 
  Transaction Entry
   - Transaction Entry transaction.php
  Reports
   - Account Wise Summery or Details accountsummary.php
   - Daily dailyreport.php
   - Weekwise weeklyreport.php
   - Monthly monthlyreport.php
   - Custom Report customreport.php
   - Login login.php
Pages
 Dashboard
  - summery of my account. 
  - debit total, credit total, remaining total

