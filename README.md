# 📜 Papyrus Identity generator
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/papyrus/identity-generator.svg?style=flat&include_prereleases)](https://packagist.org/packages/papyrus/identity-generator)
[![PHP Version](https://img.shields.io/badge/php-%5E8.1-8892BF.svg?style=flat)](http://www.php.net)

Identity generator interface for [papyrus/event-sourcing](https://github.com/papyrusphp/event-sourcing).

## Installation
This library contains an interface (the contract) to generate identifiers. 
Pick an existing implementation or build your own one.

Existing implementations:
- [papyrus/ramsey-uuid-identity-generator](https://github.com/papyrusphp/ramsey-uuid-identity-generator) - using [ramsey/uuid](https://github.com/ramsey/uuid)
