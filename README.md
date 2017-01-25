# wordpress
Useful widget areas for homepages, additional ones for sidebars

I get a lot of requests from clients to have homepage boxes that are dynamic, not in the sidebar, homepage only (usually)
and easy to change as needed. I do this all the time but finally decided to write it down. 
The location of all the CSS and blocks of code that go into the functions.php file and your homepage/content/loop template will depend
on your wordpress theme. If you put it in the header it will show on all pages on the site, I put mine in just the home-grid.php template 
since that's where we want it. 
This makes wordpress themes so much more dynamic, less blog like, and more newspapers or websites, depending on how you use it.

**The current layout of this widget bunch is two full width with header titles (not required to use titles for layout). And a 4 grid section
below, similar to a footer with multiple widgets. I basically copied an existing 

*You may want to rename the widgets and classes because I named them so I would know what they are on the site I'm working on - and one is called "russian map". 
It makes sense if you see the site.. but in general, just change the word map and or russia to something else and be consistent across files.
Or keep it, because it's kind of funny. :D
