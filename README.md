# Silverstripe google tag manager
A simple module that adds google tag manager snippets to silverstripe.

## Installation
Composer is the recommended way of installing SilverStripe modules.
```
composer require gorriecoe/silverstripe-gtm
```

## Requirements

- silverstripe/cms ^4.0

## Maintainers

- [Gorrie Coe](https://github.com/gorriecoe)

## Usage
Insert `$GTMscript` after the opening head tag and `$GTMnoscript` after the opening body tag.
```
<!doctype html>
<html class="no-js" lang="en">
<head>
	{$GTMscript}
	...
</head>
<body>
	{$GTMnoscript}
	...
</body>
</html>
```
