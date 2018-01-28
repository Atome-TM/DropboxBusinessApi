# Wrapper for Dropbox Business API v2
Just the starting point for a PHP Wrapper needing for personal use.

## Example
```php
require 'vendor/autoload.php';

$dropboxBusiness = new \Atome\DropboxBusiness(OAUTH2_KEY_FOR_TEAM);

$response = $dropboxBusiness->team()->members()->add([
  "new_members" => [
    [
      "member_email"       => "john@doe.com",
      "member_given_name"  => "John",
      "member_surname"     => "Dore",
      "send_welcome_email" => true,
      "role"               => "member_only"
    ]
  ],
  "force_async" => false
]);
```