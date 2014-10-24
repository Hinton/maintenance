Maintenance
===========
![Maintenance Banner]
(https://github.com/stevebauman/maintenance/blob/master/maintenance-banner.jpg)

A Preventative Maintenance Application (CMMS) for Laravel

###TO DO
* Robust notifications
* Finish asset events with event reporting / other additions
* <del>Asset manual attachments</del> - Oct 15th 2014
* Customizable user dashboard
* User profile with assigned work orders view
* User registration with public work order creation
* <del>Better category management</del> - Oct 15th 2014
* Better breadcrumb management
* Finish administration panel for managing permissions/users/groups
* <del>Add date for end of life for assets</del> - Oct 22nd 2014
* Ability to assign users to events
* <del>Clean up routes</del> - Oct 21st 2014
* <del>Add soft deletes for some tables for recoverable data</del> - Oct 21st 2014 (Work Orders, Assets & Inventory)
* <del>Implement [Revisionable](https://github.com/VentureCraft/revisionable) for viewing edit history on records</del> - Oct 22nd 2014
* <del>Implement selectable inventory metrics (LB, Litres, Tonnes etc)</del> - Oct 22nd 2014
* Implement Print view for QR codes as well as all other data
* <del>Implement Status and Priority DB tables and functionality</del> - Oct 23rd 2014
* <del>Add meter readings to assets</del> - Oct 24th 2014
* Tests

###Features
* Infinite Category Management with Laravel [Baum](https://github.com/etrepat/baum) & [JsTree](https://github.com/vakata/jstree)
* Dynamic Ajax Uploads for Attachments & Images with [Plupload](https://github.com/jildertmiedema/laravel-plupload)
* LDAP Authentication with [Corp](https://github.com/stevebauman/Corp) Combined with [Sentry](https://github.com/cartalyst/sentry)
* Work Order / Inventory / Asset Management (with Maintenance Scheduling using [FullCalendar](https://github.com/arshaw/fullcalendar))
* Administration Panel for managing users, permissions, groups, and data restoration (archive)
* [Revisionable](https://github.com/VentureCraft/revisionable) is built in for easy history viewing on changes made
* And more...