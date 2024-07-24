GildedRose-Refactoring-Kata-main

   - this project involves implementing an inventory management system for an inn called Gilded Rose. The system handles updating      inventory data for products over time, with each product in the inventory having two main parameters:
   SellIn: The number of days remaining until the product should be sold.
   Quality: The value of the product, which affects its quality.
   The system tracks the behavior of products in the inventory and updates their values at the end of each day. 

  Installation
   - PHP: Download from php.net and follow the installation instructions for your operating system.
   - Composer: Download and run the installer from getcomposer.org or use the command curl -sS https://getcomposer.org/installer | php in the terminal.
  
   - To run the application, navigate to the project directory in the terminal and use the command 'php fixtures/texttest_fixture.php'

   - To a PHP script for setup or testing, navigate to the project directory in the terminal and use the command 'vendor\bin\phpunit --configuration phpunit.xml'

    Note on Running Tests:
    I have not previously worked with the type of tests encountered here, and while I resolved some issues, I learned that using testThirtyDays is more appropriate and recommended. However, I was unable to modify it to function correctly. The issue may have been related to Approvals

   refactoring Changes :

   1.FixCodeClarity
     - Removing empty lines
     - Update operators

   2.optimize-updateQuality
     - The updateQuality method was refactored to use a switch statement for handling the different item types.
     - Extracted a private method updateItem to handle the logic for updating a single item.
     - Added a private method changeQuality to manage quality changes and ensure it stays within the 0-50 range.

   3.CorrectingTests :
    - Fix testFoo to check item quality instead of name
    - Replace Approval Verification with Direct String Comparison in testFoo

    - ahuva kofman-0583260484
    Thanks