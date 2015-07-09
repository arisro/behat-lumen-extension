This is an adaptation for Lumen of the Laravel Behat Extension package (https://github.com/laracasts/Behat-Laravel-Extension).

It's a custom Behat / Mink driver which extends the BrowserKit driver.

This will allow you to write functional tests using Behat (boot the Lumen application in a custom environment, mock components from the FeatureContext, requests are done directly on the application - no external requests).

To get started, you only need to follow a few steps:

# 1. Install Dependencies

As always, we need to pull in some dependencies through Composer.

    composer require behat/behat behat/mink behat/mink-extension arisro/behat-lumen-extension --dev

This will give us access to Behat, Mink, and, of course, the Lumen extension.

# 2. Create the behat.yml configuration file

Next, within your project root, create a `behat.yml` file, and add:

```
default:
    extensions:
        Arisro\Behat\ServiceContainer\LumenExtension:
            # env_path: .env.behat
        Behat\MinkExtension:
            default_session: lumen
            lumen: ~
```

Optinally, you can specify a different .env file for your functional tests (with a test DB for example).

# 3. Write Some Features

You can check this page for a short guide through Behat and Mink.

> Note: if you want to leverage some of the Mink helpers in your `FeatureContext` file, then be sure to extend `Behat\MinkExtension\Context\MinkContext`.
