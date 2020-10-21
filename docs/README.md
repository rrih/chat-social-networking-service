## 開発スタートアップ

## 環境構築
- まずリポジトリからクローンする
```bash
$ composer install
# .env 消しておく
$ bin/cake server
# .env 追加しておく
```
なぜか？
```bash
Fatal error: Uncaught LogicException: Key "DB_HOST" has already been defined in getenv() in
```
.envファイルの中身がある状態で `bin/cake server` 起動時はコメントアウトで消しておく。
起動後、ローカル環境で開発する際(普段)には.envファイルの中身保存しておく。
