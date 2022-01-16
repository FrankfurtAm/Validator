# 📜 Validator

Validator - a simple tool written in PHP for data validation.


# Usage

### IsEmail

```php
Validator::isEmail('example@mail.ru'); // return true
```
<br>

### VerifyPasswords

```php
Validator::verifyPasswords('123456', '12345'); // return false
```
<br>

# Documentation

### Method IsEmail

The method checks if it is mail or not

```php
Validator:isEmail(string $mail?): bool
```

***Mail?***

The string that checks the mail is it or not

------
<br>

### Method VerifyPasswords

The method compares two passwords whether they are identical or not.

```php
Validator:verifyPasswords(string $password1, string $password2): bool
```

------
<br>
