rwildcard=$(wildcard $1$2) $(foreach d,$(wildcard $1*),$(call rwildcard,$d/,$2))
COMPOSER		:= "/usr/bin/composer"
PHP			:= "/usr/bin/php"

PHPDIR			:= "src"
PHPFILES		:= $(call rwildcard,$(PHPDIR)/,*.php)
PHP_TARGETS		:= $(patsubst %,check-php-syntax_%,$(PHPFILES))
BINDIR			= bin

.PHONY: check
check:	setup-toolchain check-php-syntax
	$(BINDIR)/behat --stop-on-failure --verbose

.PHONY: check-php-syntax
check-php-syntax: $(PHP_TARGETS)

check-php-syntax_./%:
	@php --syntax-check $(*)

.PHONY: setup-toolchain
setup-toolchain:
	$(COMPOSER) install --no-interaction
