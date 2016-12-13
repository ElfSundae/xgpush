# Tencent Xinge Push

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ElfSundae/xgpush.svg?style=flat-square)](https://packagist.org/packages/elfsundae/xgpush)
[![Build Status](https://img.shields.io/travis/ElfSundae/xgpush/master.svg?style=flat-square)](https://travis-ci.org/ElfSundae/xgpush)

A simple Composer port for the [Tencent Xinge Push](http://xg.qq.com) PHP SDK.

- [Documentation](http://developer.qq.com/wiki/xg/)

## Installation

```sh
composer require elfsundae/xgpush
```

## Modification

This package makes the following changes against the official SDK:

- Wrap all classes under namespace `ElfSundae\XgPush`.
- Fix HTTP request. [bcd13ad](https://github.com/ElfSundae/xgpush/commit/bcd13addd78a593d5fd518bddc34b4580f7ddda1)

## Sample

- [simple_demo.php](simple_demo.php)
- [demo.php](demo.php)
