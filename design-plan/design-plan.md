# Project 1, Milestone 1 - Design & Plan

Your Name: Junan Qu

## Markdown



## 1. Persona

[1. Pick a persona]

I've selected **[Abby]** as my persona.

I've selected my persona because Abby is different from other three personas in a way that she has a fragile computer self-efficacy. While all other three personas will all sort of keep trying when problems arise, Abby tends to blame herself. Therefore, choosing Abby sets a higher bar for designers to make sure she would carry on her task.

## 2. Sketches

[2. Create some sketches to generate ideas about a website design that would work for your persona.]
![](01.jpg)
![](02.jpg)
![](03.jpg)
![](04.jpg)
![](05.jpg)
[Tell us why your sketches meet the needs of your persona. 1-3 sentences]
Because Abby like to have a big picture before she really tries to solve any problems, it is necessary for a website to have a navigate bar that is easy to use. Therefore, she can easily navi through the entire site. At the same time, since she does not like to take risk, I decide to clarify basically every button she needs to click on.
[Insert your 2-3 sketches here.]

## 3. Wireframes


[3. Author detailed wireframes that will become the design that you program for the final milestone.]
![](06.jpg)
![](07.jpg)
![](08.jpg)
![](09.jpg)
![](010.jpg)

This is going to be basically my whole layout for my final milestone.

## 4. Coding Plan & Pseudocode

[4. Author a plan for how you will code your PHP website.]

[Make sure you layout how to you plan to use PHP *includes*.]

[Write your pseudocode for your user defined function.]

**JS**
*Interactive menu*
If the menu is hidden, click on the icon will show the menu.
If the menu is showing, click on the icon will hide the menu.

*Interactive Tabs on "My Work"*
If the user is clicking "All",
a css attribute - visibility:show will show in every photo's link

If the user clicks "Web Design",
a css attribute - visibility:show will show in only those picture of web designs, and a css attribute - visibility:hidden will show in all other pictures

If the user clicks "Photography",
a css attribute - visibility:show will show in only those picture of Photography, and a css attribute - visibility:hidden will show in all other pictures

If the user clicks "Illustration",
a css attribute - visibility:show will show in only those picture of Illustration, and a css attribute - visibility:hidden will show in all other pictures

**PHP**
For each $tab_name in $current_page_id array,
if $tab_name = title,
then a new css attribute will be echoed out to add a background to that corresponding tab.

**includes**
"Nav bar" will be in an include
"Footer" will be also in an include

**user_defined_function**
*validation_function*
when user clicks "submit"
check if there is any value inside the input space
if there is value inside the input space,
then user can submit the page,
if there is no value,
then browser will show an error message.
