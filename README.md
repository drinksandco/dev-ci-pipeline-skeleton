Development Continuous Integration Pipeline Skeleton
=============================

This is the example repository for our post on Medium about ["Strict Development CI for PHP"](https://uvinum.engineering/strict-development-ci-for-php-20d2262c95f7).

## Requirements

* PHP >=8.1
* Composer Package Manager

## Installation

```bash
git clone git@github.com:drinksandco/dev-ci-pipeline-skeleton.git example
cd example
composer install
composer list
```

Some new commands should be added to your composer scripts:

* check-all: Executes all checks
* precommit-check: Executes all checks required before commit 
* cs-check: Checks PSR-12 coding standard with ECS - Pre-commit check
* cs-fix:  Fixes issues with PSR-12 coding standard
* inspect: Static analysis with PHPStan - Pre-commit check
* test: Unit tests using PHPUnit - Pre-commit check
* psalm: Static analysis with Psalm - Pre-commit check
* infection: Mutation testing using Infection
* rector: Automated refactoring using Rector
* rector-check: Check possible changes for automated refactoring using Rector

## Usage

When you install dependencies by composer, GrumPHP registers a precommit-hook in your local git. 
It will run "precommit-check" command before committing your code locally. Also, you can run any of registered commands using composer.
