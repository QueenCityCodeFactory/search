CakeDC Search Plugin - Updated By QueenCityCodeFactory
========================

We Reccomed using [FriendsOfCake/Search](https://github.com/FriendsOfCake/search). But if you were like us and had a large codebase that was using this for years and recently updated to latest version of CakePHP in the 3.x you might want to considered using this until you can refactor or upgrade to CakePHP 4.x

This **Search** plugin enables developers to quickly implement the [POST-Redirect-GET](docs/Documentation/Post-Redirect-Get.md) pattern.

The Search plugin is an easy way to implement PRG in your application, and provides you with a paginate-able search in any controller. It supports simple methods to search inside models using strict and non-strict comparing, but also allows you to implement any complex type of searching.

* **PRG Component:** The component will turn GET parameters into POST to populate a form and vice versa.
* **Search Behaviour:** The behavior will generate search conditions passed in the provided GET parameters.

This is *not* a Search Engine or Index
--------------------------------------

As mentioned before, this plugin helps you to implement searching for data using the [PRG](docs/Documentation/Post-Redirect-Get.md) pattern. It is **not** in any way a search engine implementation or search index builder, although it can be used to search an index such as *Elastic Search* or *Sphinx*.

Requirements
------------

* CakePHP 3.10.0+
* PHP 7.2.0+

Documentation
-------------

For documentation, as well as tutorials, see the [Docs](docs/Home.md) directory of this repository.

Support
-------

For bugs and feature requests, please use the [issues](https://github.com/CakeDC/search/issues) section of this repository. 

Commercial support is also available, [contact us](http://cakedc.com/contact) for more information.

Contributing
------------

This repository follows the [CakeDC Plugin Standard](http://cakedc.com/plugin-standard). If you'd like to contribute new features, enhancements or bug fixes to the plugin, please read our [Contribution Guidelines](http://cakedc.com/contribution-guidelines) for detailed instructions.

License
-------

Copyright 2007-2014 Cake Development Corporation (CakeDC). All rights reserved.

Licensed under the [MIT](http://www.opensource.org/licenses/mit-license.php) License. Redistributions of the source code included in this repository must retain the copyright notice found in each file.
