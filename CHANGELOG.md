# Template Selector Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) and this project adheres to [Semantic Versioning](http://semver.org/).

## 1.0.3 - 2022-08-23
### Changed
- Fixed version mismatch

## 1.0.2 - 2022-08-23
### Changed
- Added final Craft 4 compatibility

## 1.0.1 - 2022-08-23
### Changed
- Couple of minor changes to the Read Me file 

## 1.0.0 - 2022-08-23
### Added
- Initial release
- Craft 4 compatibility (works in both Craft 3 and 4)
- Added ability to set subfolder path to ENV variable
- Added ability to output subfolder path as a twig variable (e.g. _{{ craft.templateSelector.subfolder('fieldHandle') }}_)
