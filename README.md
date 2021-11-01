# Demo Scenario for [#6788](https://github.com/vimeo/psalm/issues/6788)

## Install

```bash
git clone https://github.com/ohader/psalm-6788.git
cd psalm-6788
composer install
```

## Invoke Psalm

```bash
composer run psalm

> psalm -c psalm.xml --no-cache
string(10) "registered"
Scanning files...
string(74) "Scanner: /Users/olly/Development/projects/psalm-6788/examples/whatever.any"
Analyzing files...

string(75) "Analyzer: /Users/olly/Development/projects/psalm-6788/examples/whatever.any"
░
------------------------------
No errors found!
------------------------------

Checks took 1.21 seconds and used 54.101MB of memory
Psalm was unable to infer types in the codebase
```
