To install;

`cd` to your app/code directory then run

`mkdir -p Training/Repository && cd Training/Repository`

`git clone git@gitlab.iweb.co.uk:magento2/training-repository.git .` (make sure you include the dot on the end)

Then you need to enable the module;

In your project root

`chmod +x bin/magento`

`bin/magento module:enable Training_Repository`

`bin/magento setup:upgrade`
