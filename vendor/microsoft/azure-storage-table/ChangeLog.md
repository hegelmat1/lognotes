2022.08 - version 1.1.6
* Removed EOL from Content-Type header in batch API.

2021.09 - version 1.1.5
* Upgraded dependency for `azure-storage-common` to version 1.5.2.
* Fixed a bug where `QueryEnttitiesResult` with a null `NextRowKey` won't work.
* Return integer from a sorting callback, not bool.

2020.12 - version 1.1.4
* Guzzle version is now updated to support both 6.x and 7.x.

2020.08 - version 1.1.3
* Lower case query parameter names.

2020.01 - version 1.1.2
* Fixed the issue in SAS token where special characters were not correctly encoded.
* Empty lines no longer treated as headers in Batch operation.


2019.04 - version 1.1.1
* Resolved some issues on Linux platform.

2018.04 - version 1.1.0

* MD files are modified for better readability and formatting.
* CACERT can now be set when creating RestProxies using `$options` parameter.
* Removed unnecessary trailing spaces.
* Assertions are re-factored in test cases.
* Now the test framework uses `PHPUnit\Framework\TestCase` instead of `PHPUnit_Framework_TestCase`.

2018.01 - version 1.0.0

* Created `TableSharedAccessSignatureHelper` and moved method `SharedAccessSignatureHelper::generateTableServiceSharedAccessSignatureToken()` into `TableSharedAccessSignatureHelper`.
* Added static builder methods `createTableService` into `TableRestProxy`.
* Removed `dataSerializer` parameter from `TableRextProxy` constructor.
* Will change variable type according to EdmType specified when serializing table entity values.
* Deprecated PHP 5.5 support.