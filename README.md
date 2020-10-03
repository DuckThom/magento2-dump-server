# magento2-dump-server
Symfony VarDumper implementation for Magento 2

## Installation

```
composer require --dev wiringa/magento2-dump-server "^1.0"

bin/magento module:enable Wiringa_DumpServer
bin/magento setup:upgrade
```

## Usage

```
bin/magento server:dump
```

Output from `dump()` calls will now be logged in the that terminal. See [Symfony VarDumper Server](https://symfony.com/doc/current/components/var_dumper.html#the-dump-server) documentation for more information.
