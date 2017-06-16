# Tencent Xinge Push

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ElfSundae/xgpush.svg?style=flat-square)](https://packagist.org/packages/elfsundae/xgpush)
[![Build Status](https://img.shields.io/travis/ElfSundae/xgpush/master.svg?style=flat-square)](https://travis-ci.org/ElfSundae/xgpush)

A simple Composer port for the [Tencent Xinge Push](http://xg.qq.com) PHP SDK.

- [Official Documentation](http://developer.qq.com/wiki/xg/)
- [Usage Samples](docs)

## Installation

```sh
composer require elfsundae/xgpush
```

## Modifications

This package makes the following changes against the official SDK:

- Add namespace `ElfSundae\XgPush`
- Fix HTTP request. [65f9d7a](https://github.com/ElfSundae/xgpush/commit/65f9d7ad628be80936826afda5c22fa87222d517)
