---
title: Eclipse PHP Development Tools
DefaultContentLanguage: en
date: 2025-09-08T10:09:45+02:00
theme: "hugo-solstice-theme"
#headline: "The Community for Open Innovation and Collaboration"
#tagline: "The Eclipse Foundation provides our global community of individuals and organizations with a mature, scalable, and business-friendly environment for open source software collaboration and innovation."
hide_page_title: false
#hide_sidebar: true
hide_breadcrumb: true
#show_featured_story: true
#layout: "single"
#links: [[href: "/projects/", text: "Projects"],[href: "/org/workinggroups/", text: "Working Group"],[href: "/membership/", text: "Members"],[href: "/org/value", text: "Business Value"]]
#container: "container-fluid"
---

## About

The PHP IDE project delivers a PHP Integrated Development Environment framework for the
Eclipse platform. This project encompasses the development components necessary to
develop PHP-based Web Applications and facilitates extensibility. It leverages the
existing Web Tools Project in providing developers with PHP capabilities.

{{< home/slider >}}

## Features

* Syntax Highlighting
* Syntax Validation
* Content Assist
* Code Navigation
* PHP Debugging (Zend Debugger / Xdebug)
* PHP Profiling (Zend Debugger / Xdebug)
* PHPUnit
* Code Formatter
* Refactoring
* Code Templates
* Remote Projects
* Power of Eclipse Ecosystem

## Download

### Eclipse Package for PHP Developers

The essential starting point for PHP developers, including a PHP language support, a Git client, XML Editor and Mylyn, Terminal.

Click on the links below to start downloading package for specific OS. You have to install Java in your system.

<div class="row">
	<div class="col-md-8">
		<h3>OS X</h3>
		<a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/{{% param "eclipse_version" %}}/R/eclipse-php-{{% param "eclipse_version" %}}-R-macosx-cocoa-x86_64.dmg" class="btn btn-primary">64 bit</a>
		<a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/{{% param "eclipse_version" %}}/R/eclipse-php-{{% param "eclipse_version" %}}-R-macosx-cocoa-aarch64.dmg" class="btn btn-primary">ARM 64 bit</a>
	</div>
	<div class="col-md-8">
		<h3>Windows</h3>
		<a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/{{% param "eclipse_version" %}}/R/eclipse-php-{{% param "eclipse_version" %}}-R-win32-x86_64.zip" class="btn btn-primary">64 bit</a>
		<a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/{{% param "eclipse_version" %}}/R/eclipse-php-{{% param "eclipse_version" %}}-R-win32-aarch64.zip" class="btn btn-primary">ARM 64 bit</a>
	</div>
	<div class="col-md-8">
		<h3>Linux</h3>
		<a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/{{% param "eclipse_version" %}}/R/eclipse-php-{{% param "eclipse_version" %}}-R-linux-gtk-x86_64.tar.gz" class="btn btn-primary">64 bit</a>
		<a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/{{% param "eclipse_version" %}}/R/eclipse-php-{{% param "eclipse_version" %}}-R-linux-gtk-aarch64.tar.gz" class="btn btn-primary">ARM 64 bit</a>
	</div>
</div>

### Update existing Eclipse

In Eclipse, click _Help -> Install New Software_ and work with <span class="red">*</span>: https://download.eclipse.org/tools/pdt/updates/latest

Drag to your running Eclipse workspace to install PHP Development Tools: [![Drag to your running Eclipse workspace to install PHP Development Tools](img/install.png)](https://marketplace.eclipse.org/marketplace-client-intro?mpc_install=1944539)

![Eclipse Install&amp;Update Dialog](img/update_dialog.png)

If you're looking for developer builds, try out <span class="red">**</span>: https://download.eclipse.org/tools/pdt/updates/latest-nightly

All downloads are provided under the terms and conditions of the [Eclipse.org Software User Agreement](https://www.eclipse.org/legal/epl/notice.html) unless otherwise specified.

<span class="red">*</span> - Latest stable: https://download.eclipse.org/tools/pdt/updates/{{% param "latest" %}}  
<span class="red">**</span> - Latest nightly: https://download.eclipse.org/tools/pdt/updates/{{% param "latest_dev" %}}

## Extensions

The experience of developing PHP application with PDT can be extended with a large variety of plugins created by the Eclipse ecosystem. Below are open source projects and commercial products that are built on top of PDT or are integrated with PDT.

#### PDT Extensions group

_Open source plugins that extend or integrate with PDT_

<a href="https://p2.pdt-extensions.org/phpfeatures.html#pex-core" rel="nofollow">CS-Fixer</a> ::
<a href="https://p2.pdt-extensions.org/frameworks.html#symfony" rel="nofollow">Symfony</a> ::
<a href="https://p2.pdt-extensions.org/editors.html#yedit" rel="nofollow">YAML</a> ::
<a href="https://p2.pdt-extensions.org/editors.html#twig" rel="nofollow">Twig</a> ::
<a href="https://p2.pdt-extensions.org/editors.html#smarty" rel="nofollow">Smarty</a> ::
<a href="https://p2.pdt-extensions.org/editors.html#coffee" rel="nofollow">CoffeeScript</a> ::
<a href="https://p2.pdt-extensions.org/editors.html#markdown" rel="nofollow">Markdown</a> ::
<a href="https://p2.pdt-extensions.org/editors.html#rest" rel="nofollow">reStructuredText</a> ::
<a href="https://p2.pdt-extensions.org/editors.html#gherkin" rel="nofollow">Gherkin</a> ::
<a href="https://p2.pdt-extensions.org/editors.html#vrapper" rel="nofollow">Vrapper</a> ::
<a href="https://p2.pdt-extensions.org/editors.html#emmet" rel="nofollow">Emmet</a> ::
<a href="https://p2.pdt-extensions.org/editors.html#jshint" rel="nofollow">JSHint</a> ::
<a href="https://p2.pdt-extensions.org/editors.html#closure" rel="nofollow">Closure</a> ::
<a href="https://p2.pdt-extensions.org/editors.html#less" rel="nofollow">Less</a> ::
<a href="https://p2.pdt-extensions.org/misc.html#logviewer" rel="nofollow">Log Viewer</a> ::
<a href="https://p2.pdt-extensions.org/misc.html#ansi" rel="nofollow">ANSI Console</a> ::
<a href="https://p2.pdt-extensions.org/misc.html#copyright" rel="nofollow">Copyright Wizard</a>

<a href="https://p2.pdt-extensions.org/" rel="nofollow">Visib website</a>

## Contributing

PDT is an Open Source project and we welcome everyone who's interested to contribute his or her source code or help project in some other way.

Visit our <a href="https://github.com/eclipse-pdt/pdt/wiki/Contributing">wiki page</a> to learn how to get source code and build it, or go directly to <a href="https://github.com/eclipse-pdt/pdt">GitHub project</a>.

Don't hesitate to nurture PDT developers team with your questions and hit our <a href="https://dev.eclipse.org/mailman/listinfo/pdt-dev">mailing list</a>.

### Thanks to ![YourKit](https://www.yourkit.com/images/yklogo.png)

YourKit is kindly supporting open source projects with its full-featured (YourKit Java Profiler)[https://www.yourkit.com/java/profiler/index.jsp]
(YourKit, LLC)[https://www.yourkit.com] 

