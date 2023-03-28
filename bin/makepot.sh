#!/usr/bin/env bash

docker run \
  --user root \
  --rm \
  --volume  "$(pwd):/var/www/html/neve-fse" \
  wordpress:cli bash -c 'php -d memory_limit=1024M "$(which wp)" i18n make-pot ./neve-fse/ ./neve-fse/languages/neve-fse.pot --headers={\"Last-Translator\":\"friends@themeisle.com\"\,\"Project-Id-Version\":\"NeveFSE\"\,\"Report-Msgid-Bugs-To\":\"https://github.com/Codeinwp/neve-fse/issues\"\} --allow-root --exclude=dist,build,bundle,e2e-tests '