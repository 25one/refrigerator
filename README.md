<h4>SdkBonusApi - sdk-class for loyalty_api_v106 from funidst.org</h4>

<h3>1.Installation.</h3>

<b>1.1. composer.json file:</b>
{<br>
  "config": {<br>
    "vendor-dir": "vendor"<br>
  },<br>
  "require": {<br>
    "core-module-misc/softagming-lbs-api-sdk": "dev-master"<br>
  },<br>
  "repositories": [<br>
    {<br>
      "type": "vcs",<br>
      "url": "git@lab.megatron.pw:core-module-misc/softagming-lbs-api-sdk.git"<br>
    }<br>
  ],<br>
  "prefer-stable": true,<br>
  "minimum-stability": "dev"<br>
}<br>

<b>1.2. composer install</b>

<h3>2.Example of help of api-items - /help.php.</h3>

require_once 'vendor/autoload.php';<br>

use SdkBonusApi\Help\HelpController;<br>

$help = new HelpController();<br>
$help->actionIndex();<br>


<h3>3.Example of basic usage.</h3>

require_once 'vendor/autoload.php';<br>

use SdkBonusApi\SdkBonusApi;<br>

$bonusapi = new SdkBonusApi();<br>

$array['addurl'] = '/Loyalty/Levels/Set';<br>
$array['parameters']['Level'] = 1; //or '1', or absent (require-false)<br>

$jsonResponse = json_decode($bonusapi->bonusApi($array)));<br>
